<?php
namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;
class PortalTest extends TestCase {
    public function test_client_has_no_admin_pages_or_management_proxy():void {
        Http::fake();
        foreach(['/admin','/admin/login','/admin-staff','/management','/applications','/setup'] as $path)$this->get($path)->assertNotFound();
        foreach(['management','staff','staff/1/decision','departments','setup'] as $path)$this->withSession(['api_token'=>'staff-token'])->postJson('/portal-api/'.$path,[])->assertNotFound();
        Http::assertNothingSent();
    }
    public function test_portal_renders_without_a_database(): void {
        $this->get('/')->assertOk()->assertSee('csrf-token',false);
    }
    public function test_login_keeps_api_token_out_of_browser_response(): void {
        Http::fake(['*'=>Http::response(['token'=>'private-token','user'=>['role'=>'doctor']],200)]);
        $this->postJson('/portal-api/staff-login',['email'=>'doctor@test.test','password'=>'secret'])
            ->assertOk()->assertJsonMissingPath('token')->assertSessionHas('api_token','private-token');
    }
    public function test_private_proxy_requires_session_and_rejects_unknown_paths(): void {
        Http::fake();$this->getJson('/portal-api/state')->assertUnauthorized();
        $this->getJson('/portal-api/not-an-endpoint')->assertNotFound();Http::assertNothingSent();
    }
    public function test_proxy_forwards_bearer_from_session_and_handles_outage(): void {
        Http::fake(['*'=>Http::response(['message'=>'ok'],200)]);
        $this->withSession(['api_token'=>'private-token'])->getJson('/portal-api/state')->assertOk();
        Http::assertSent(fn($r)=>$r->hasHeader('Authorization','Bearer private-token'));
        Http::fake(['*'=>Http::failedConnection()]);
        $this->withSession(['api_token'=>'private-token'])->getJson('/portal-api/state')->assertStatus(503);
    }
    public function test_expired_api_token_is_removed_without_invalidating_form_csrf(): void {
        Http::fake(['*'=>Http::response(['message'=>'Unauthenticated.'],401)]);
        $this->withSession(['api_token'=>'expired-token','_token'=>'existing-csrf-token'])
            ->getJson('/portal-api/state')->assertUnauthorized()
            ->assertSessionMissing('api_token')->assertSessionHas('_token','existing-csrf-token');
    }
}
