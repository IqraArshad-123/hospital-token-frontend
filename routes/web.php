<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalController;
Route::match(['get','post','put','delete'],'/portal-api/{path}',[PortalController::class,'proxy'])->where('path','.*');
Route::get('/{page?}',fn()=>view('portal'))->where('page','home|login|register|staff-login|staff-register|dashboard|doctor|receptionist|find-doctors|book-token|queue|live-status|records|availability|reception|notifications|profile');
