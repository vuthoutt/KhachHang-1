<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\NhanVien;

class LoginController extends Controller
{
    public function login(){
        return view('quanly.layout.login');
    }

    public function postLogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ],
        [
            'email.required'=>'Bạn chưa nhập email',
            'password.required'=>'Bạn chưa nhập mật khẩu',
        ]);

        $remember = $request->has('remember') ?true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect()->route('quanly.index');
        }
        else{
            return redirect()->back()->with('thongbao', 'Đăng nhập thất bại');
        }

    }
}
