<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Gagal, Priksa kembali Akun Anda!');
    }

    public function logout(Request $request)
    {

        Auth::logout();


        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect(route('login'))->with('success', 'data berhasil di hapus');
    }
}
