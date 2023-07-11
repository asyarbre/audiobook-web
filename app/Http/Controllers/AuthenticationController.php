<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email is not valid',
            'password.required' => 'Password wajib diisi'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)) {
            return redirect()->route('book.index');
        } else {
            return redirect()->route('auth.index')->withErrors('Email atau password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.index')->with('success', 'Berhasil logout');
    }
}
