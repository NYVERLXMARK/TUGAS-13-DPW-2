<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Pembeli;
use App\Models\Penjual;

class AuthController extends Controller{

    function showLogin(){
        return view('template.section.login');
    }

    function loginProcess(){
        // if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
        //     return redirect('template')->with('success', 'Login Berhasil');
        // }else{
        //     return back()->with('danger', 'Login Gagal, Silahkan Cek Kembali Email dan Password Anda');
        // }
        $email = request('email');
        $user = Penjual::where('email', $email)->first();
        if ($user) {
            $guard = "penjual";
        } else {
            $user = Pembeli::where('email', $email)->first();
            if ($user) {
                $guard = "pembeli";
            } else {
                $guard = false;
            }
        }

        if (!$guard) {
            return back()->with('danger', 'Login Gagal, Email Tidak ditemukan');
        } else {
            if (Auth::guard($guard)->attempt(['email' => request('email'), 'password' => request('password')])) {
                return redirect("/$guard")->with('success', 'Login Berhasil');
            } else {
                return back()->with('danger', 'Login Gagal, Silahkan Cek Kembali Email dan Password Anda');
            }
        }
    }

    function logout(){
        // Auth::logout();
        // return redirect('template');
        Auth::logout();
        Auth::guard('penjual')->logout();
        Auth::guard('pembeli')->logout();
        return redirect('template');
    }

    function registration(){
        return view('daftar');
    }

    function forgotpassword(){

    }
}