<?php

namespace App\Http\Controllers;

use App\Models\Marketing;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TheKhachHangController extends Controller
{
    public function index(){
        return view('nguoidung.index');
    }
    public function voucher(){
        $date = Carbon::now()->toDateString();
        $vouchers = Marketing::whereDate('ngay_ket_thuc','>=',$date)->get();
        return view('nguoidung.voucher.index',compact('vouchers'));
    }
}
