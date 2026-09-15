<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StaffLoginController extends Controller
{
    public function showLogin()
    {
        return view('staff-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $response = Http::post(
            'http://127.0.0.1:8001/api/staff-login',
            [
                'email' => $request->email,
                'password' => $request->password,
            ]
        );

        if ($response->successful()) {

            $data = $response->json();

            session([
                'staff_user' => $data['user'] ?? null,
                'staff_token' => $data['token'] ?? null,
            ]);

            $role = $data['user']['role'] ?? null;

            if ($role === 'doctor') {
                return redirect('/doctor-dashboard');
            }

            if ($role === 'receptionist') {
                return redirect('/receptionist-dashboard');
            }

            if ($role === 'admin') {
                return redirect('/admin-dashboard');
            }

            return redirect('/dashboard');
        }

        return back()
            ->withInput($request->only('email'))
            ->withErrors([
                'error' => $response->json(
                    'message',
                    'Invalid email or password.'
                ),
            ]);
    }
}