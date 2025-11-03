<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UmkmAuthController extends Controller
{
    // tampil form register
    public function showRegister()
    {
        return view('umkm.register');
    }

    // proses register
    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:umkms,email',
            'no_hp' => 'required',
            'username' => 'required|unique:umkms,username',
            'password' => 'required|confirmed'
        ]);

        Umkm::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/umkm/login')->with('success','Pendaftaran berhasil! Silahkan login.');
    }

    // tampil form login
    public function showLogin()
    {
        return view('umkm.login');
    }

    // proses login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = Umkm::where('username', $request->username)->first();

        if($user && Hash::check($request->password, $user->password)) {
            Session::put('umkm_id', $user->id);
            Session::put('umkm_nama', $user->nama);
            return redirect('/umkm/home');
        } else {
            return back()->with('error','Username atau Password salah!');
        }
    }

    // logout
    public function logout()
    {
        Session::flush();
        return redirect('/umkm/login');
    }
}
