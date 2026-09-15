<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StaffRegisterController extends Controller
{
    public function store(Request $request)
    {
        $response = Http::post(
            'http://127.0.0.1:8001/api/staff-register',
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'role' => $request->role,
                'password' => $request->password,
                'password_confirmation' => $request->password_confirmation,
            ]
        );

        if ($response->successful()) {

            $backendUser = $response->json('user');

            $user = [
                'id' => $backendUser['id'] ?? null,
                'name' => $backendUser['name'] ?? $request->name,
                'phone' => $backendUser['phone'] ?? $request->phone,
                'role' => $backendUser['role'] ?? $request->role,
                'status' => $backendUser['status'] ?? 'pending',
            ];

            return view('staff-register-success', [
                'message' => $response->json('message')
                    ?? 'Application submitted successfully.',
                'user' => $user,
            ]);
        }

        return back()
            ->withInput()
            ->withErrors([
                'error' => $response->json(
                    'message',
                    'Something went wrong. Please try again.'
                ),
            ]);
    }
}