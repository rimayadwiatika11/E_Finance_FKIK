<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
    // Validasi data yang diterima dari formulir login
    $request->validate([
        'username' => 'required', // Anda bisa menyesuaikan dengan nama field pada formulir
        'password' => 'required',
    ], [

        'username.required' => 'username wajib diisi',
        'password.required' => 'password wajib diisi',

    ]);

    // Ambil kredensial yang diterima dari formulir login
    $credentials = $request->only('username', 'password');

    // Lakukan proses otentikasi
    if (Auth()->attempt($credentials)) {
        // Otentikasi berhasil
        return redirect()->route('admin.index') -> with('succes'); // Redirect ke halaman dashboard atau halaman yang sesuai
    } else {
        // Otentikasi gagal
        return redirect()->route('login')->with('error', 'Login failed. Please check your credentials.');
    }
    }
}
