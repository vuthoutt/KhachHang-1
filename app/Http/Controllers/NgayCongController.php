<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NgayCong;
use Illuminate\Support\Facades\Auth;

class NgayCongController extends Controller
{
    //
    public function add() {
        $respone = ['success' => false];

        $dateNow = date('Y-m-d', strtotime(\Carbon\Carbon::now()));
        $chamCong = NgayCong::where('nhan_vien_id', Auth::user()->nhan_vien->id)->where('ngay_cham_cong', $dateNow)->first();

        if (!$chamCong) {
            $nc = new NgayCong();
            $nc->nhan_vien_id = Auth::user()->nhan_vien->id;
            $nc->ngay_cham_cong = \Carbon\Carbon::now();
            $nc->save();

            $respone['success'] = true;
        }

        return response()->json($respone, 200);
    }
}
