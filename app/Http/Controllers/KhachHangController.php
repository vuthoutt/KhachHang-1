<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KhachHang;

class KhachHangController extends Controller
{
    public function index(){
        $thongtin = KhachHang::orderby('id','asc')->get();
        return view('quanly.khachhang.index', compact('thongtin'));
    }

    public function khachthuong(){
        $khachthuong = KhachHang::where('tich_diem','<=','50')->get();
        return view('quanly.khachthuong.index',compact('khachthuong'));
    }
    public function khachvip(){
        $khachvip = KhachHang::where('tich_diem','>','50')->get();
        return view('quanly.khachvip.index', compact('khachvip'));
    }
}
