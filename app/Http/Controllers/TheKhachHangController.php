<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\KhachHang;

class TheKhachHangController extends Controller
{
    public function index(){
        return view('nguoidung.index');
    }
    public function taikhoan(){
        return view('nguoidung.taikhoan');
    }

    public function dangky(){
        return view('nguoidung.dangky');
    }
    public function postDangky(Request $request){
        $this->validate($request,[
            'ten'=>'required',
            'email'=>'required',
            'sdt'=>'required',
            'password'=>'required|min:6',
            'ngay_sinh'=>'required',
            'dia_chi'=>'required',
        ],
        [
            'ten.required'=>'Bạn chưa nhập họ tên',
            'email.required'=>'Bạn chưa nhập email',
            'sdt.required'=>'Bạn chưa nhập số điện thoại',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'pasword.min'=>'Mật khẩu ít nhất phải có 6 chữ số',
            'ngay_sinh.required'=>'Bạn chưa nhập ngày sinh',
            'dai_chi.required'=>'Bạn chưa nhập địa chỉ',
        ]);
        $user = new User;
        $user->chuc_vu_id =7;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $kh = new KhachHang;
        $kh->user_id = $user->id;
        $kh->ma_kh = rand(3,10);
        $kh->ten = $request->ten;
        $kh->gioi_tinh = $request->gioi_tinh;
        $kh->ngay_sinh = $request->ngay_sinh;
        $kh->dia_chi = $request->dia_chi;
        $kh->sdt = $request->sdt;
        $kh->save();

        return redirect()->back()->with('thongbao', 'Đăng kí thành công');
    }
    public function dangnhap(){
        return view('nguoidung.dangky');
    }
    public function postDangnhap(){

    }
}
