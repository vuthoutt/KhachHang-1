<?php

namespace App\Http\Controllers;

use App\Models\NgayCong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index(){
        $isChamCong = false;
        $dateNow = date('Y-m-d', strtotime(\Carbon\Carbon::now()));
        $chamCong = NgayCong::where('nhan_vien_id', Auth::user()->nhan_vien->id)->where('ngay_cham_cong', $dateNow)->first();
        if ($chamCong) {
            $isChamCong = true;
        }
        // dd($isChamCong);
        return view('quanly.index', compact('isChamCong'));
    }
}
