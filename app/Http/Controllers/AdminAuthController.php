<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    public function showLogin() {
        return view('admin.login');
    }

    public function login(Request $request) {

        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin = DB::table('admins')->where('username', $request->username)->first();

        if($admin && Hash::check($request->password, $admin->password)){
            Session::put('admin', $admin);
            return redirect('/admin/dashboard');
        }else{
            return back()->with('error','Username atau password salah!');
        }
    }

    public function logout(){
        Session::forget('admin');
        return redirect('/admin/login');
    }
}
