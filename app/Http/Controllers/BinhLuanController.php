<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BinhLuan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class BinhLuanController extends Controller
{
    public function index(){
        $binhluan = BinhLuan::orderby('id','asc')->where('status',0)->get();
        return view('quanly.binhluan.index', compact('binhluan'));
    }

    public function getSua($id){
        $comments = BinhLuan::where('id',$id)->first();
        return view('quanly.binhluan.edit',['comments' => $comments]);
    }

    public function postSua(Request $request,$id){
        $binhluan_kh = BinhLuan::where('id',$id)->first();
        $binhluan = new BinhLuan;
        $binhluan ->user_id = 5;
        $binhluan->noi_dung = $request->noi_dung;
        $binhluan->san_pham_id = 1;
        $binhluan->status = 1;
        $binhluan ->nguon_binh_luan = $binhluan_kh->user_id;
        $binhluan->ngay_gui = Carbon::now();
        $binhluan->save();

        return redirect()->back()->with('thongbao', 'Gửi phản hồi thành công');
    }
}
