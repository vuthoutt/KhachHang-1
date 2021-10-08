<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marketing;
use App\Models\NhanVien;

class MarketingController extends Controller
{
    public function index(){
        $marketing = Marketing::orderby('id','asc')->get();
        return view('quanly.marketing.index', compact('marketing'));
    }

    public function getThem(){
        $nv = NhanVien::all();
        return view('quanly.marketing.add', compact('nv'));
    }

    public function postThem(Request $request){
        $this->validate($request,[
            'noidung'=>'required'
        ],
        [
            'noidung.required'=>'Bạn chưa nhập nội dung'
        ]);
        $marketing = new Marketing;
        $marketing->nguoi_tao = $request->nguoitao;
        $marketing->nguoi_phu_trach = $request->nguoiphutrach;
        $marketing->ten = $request->noidung;
        $marketing->ngay_bat_dau = $request->ngaybatdau;
        $marketing->ngay_ket_thuc = $request->ngayketthuc;
        $marketing->trang_thai = $request->trang_thai;
        $marketing->save();
        
        return redirect()->back()->with('thongbao', 'Thêm thành công');
    }

    public function getSua($id){
        $nv = NhanVien::all();
        $marketing = Marketing::find($id);
        return view('quanly.marketing.edit', compact('nv','marketing'));
    }
    public function postSua(Request $request, $id){
        $marketing = Marketing::find($id);
        $this->validate($request,[
            'ten'=>'required'.$id,
        ],
        [
            'ten.required'=>'Bạn chưa nhập nội dung dự án'
        ]);
        $marketing->nguoi_tao = $request->nguoitao;
        $marketing->nguoi_phu_trach = $request->nguoiphutrach;
        $marketing->ten = $request->noidung;
        $marketing->ngay_bat_dau = $request->ngaybatdau;
        $marketing->ngay_ket_thuc = $request->ngayketthuc;
        $marketing->save();
        return redirect()->back()->with('thongbao', 'Sửa thành công');
    }

    public function getXoa($id){
        Marketing::destroy($id);
        return redirect()->back()->with('thongbao', 'Xóa thành công');
    }
}
