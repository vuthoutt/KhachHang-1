<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\NhanVien;


class LoginController extends Controller
{
    public function login(){
        if (Auth::check()) {
            // nếu đăng nhập thàng công thì
            return redirect()->route('quanly.index');
        } else {
            return view('quanly.layout.login');
        }

    }



    public function postLogin(LoginRequest $request)
    {
     $user = User::where('email', $request->email)
                  ->where('password',md5($request->password))
                  ->first();

        if ($user) {
            Auth::login($user);
            return redirect('/');
        } else {
            return redirect()->back()->with('thongbao', 'Email hoặc Password không chính xác');
        }
    }

    public function taikhoan(){
        return view('quanly.taikhoan');
    }

    public function dangxuat(){
        Auth::logout();
        return response()->view('quanly.layout.login');
    }
}
