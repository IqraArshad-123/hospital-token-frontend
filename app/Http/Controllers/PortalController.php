<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class PortalController extends Controller {
    public function proxy(Request $r, string $path) {
        $public=['login','staff-login','register','staff-register','catalog'];
        $allowed='/^(login|staff-login|register|staff-register|catalog|state|logout|requests|requests\/\d+\/(decision|progress|cancel)|availability|sessions\/\d+(?:\/emergency)?|reception-message|notifications\/read|profile)$/';
        abort_unless(preg_match($allowed,$path),404);
        if(!in_array($path,$public) && !$r->session()->has('api_token')) return response()->json(['message'=>'Please sign in to continue.'],401);
        try {
            $client=Http::acceptJson()->timeout(20)->connectTimeout(5);
            if($r->session()->has('api_token')) $client=$client->withToken($r->session()->get('api_token'));
            $response=$client->send($r->method(),rtrim(config('hospital.api_url'),'/').'/'.$path,['json'=>$r->except('_token')]);
        } catch(ConnectionException $e) { return response()->json(['message'=>'The hospital service is temporarily unavailable. Please try again shortly.'],503); }
        $body=$response->json()??['message'=>'The service returned an unexpected response.'];
        if($response->successful() && isset($body['token'])) {
            $r->session()->regenerate(); $r->session()->put('api_token',$body['token']); unset($body['token']);
        }
        if($path==='logout' && $response->successful()) {
            $r->session()->invalidate(); $r->session()->regenerateToken();
            $body['csrf_token']=$r->session()->token();
        } elseif($response->status()===401 && !in_array($path,$public)) {
            // Keep the CSRF/session identity stable while parallel public catalog requests finish.
            $r->session()->forget('api_token');
        }
        return response()->json($body,$response->status());
    }
}
