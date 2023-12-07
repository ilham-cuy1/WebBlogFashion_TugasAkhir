<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        Session::flash('email', $request->email);

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            //autentikasi berhasil
            return redirect('admin')->with(['sukses_login' => 'Login Berhasil!']);
        }else{
            //autentikasi gagal
            return redirect('admin/login')->with(['gagal' => 'Email atau Password yang Anda Masukkan Salah!']);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('admin/login')->with(['sukses_proses' => 'Berhasil Logout!']);
    }
}
