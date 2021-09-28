<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TheKhachHangController extends Controller
{
    public function index(){
        return view('nguoidung.index');
    }
}
