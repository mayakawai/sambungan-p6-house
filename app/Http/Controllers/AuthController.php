<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Cek kalau username & password tidak kosong
        if (!empty($username) && !empty($password)) {
            // Simpan username ke session biar bisa dipakai di halaman lain
            Session::put('username', $username);

            // Redirect ke halaman dashboard setelah berhasil login
            return redirect('/dashboard')->with('success', 'Login Berhasil!');
        } else {
            // Kalau salah / kosong tampilkan error
            return back()->withErrors(['Login Gagal!'])->withInput();
        }
    }

    public function logout()
    {
        Session::forget('username');
        return redirect('/auth')->with('success', 'Logout Berhasil!');
    }
}
