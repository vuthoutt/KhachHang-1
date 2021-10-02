<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Carbon\Carbon;

class ThongKeController extends Controller
{
    //
    public function index() {
        $month = ['1','2','3','4','5','6','7','8','9','10','11','12'];
        $user = [];
        foreach ($month as $key => $value) {
            $user[] = User::where(\DB::raw("Month(created_at)"),$value)->where('chuc_vu_id',7)->count();
        }
        // dd($user);
    	return view('quanly.thongke.index')->with('month',json_encode($month,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));
    }

    public function khachhang() {
        $month = ['1','2','3','4','5','6','7','8','9','10','11','12'];
        $user = [];
        $user_vip = [];
        foreach ($month as $key => $value) {
            $user_vip[] = KhachHang::where(\DB::raw("Month(created_at)"),$value)->where('tich_diem','>=',50)->count();
            $user[] = KhachHang::where(\DB::raw("Month(created_at)"),$value)->where('tich_diem','<',50)->count();
        }
        // dd($user);
    	return view('quanly.thongke.khachhang')->with('month',json_encode($month,JSON_NUMERIC_CHECK))
        ->with('user_vip',json_encode($user_vip,JSON_NUMERIC_CHECK))
        ->with('user',json_encode($user,JSON_NUMERIC_CHECK));
    }
}
