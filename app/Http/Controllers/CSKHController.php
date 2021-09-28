<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CSKH;
use App\Models\NhanVien;

class CSKHController extends Controller
{
    public function index(){
        $danhsach = CSKH::orderby('id', 'asc')->get();
        return view('quanly.cskh.index', compact('danhsach'));
    }

    public function getThem(){
        $nv = Nhanvien::all();
        return view('quanly.cskh.add', compact('nv'));
    }

    public function postThem(Request $request){
        $this ->validate($request, [
            'noidung'=>'required',
        ],
        [
            'noidung.required'=>'Bạn chưa nhập nội dung chiến dịch',
        ]);
            $danhsach = new CSKH;
            $danhsach->nguoi_tao = $request->nguoitao;
            $danhsach->nguoi_phu_trach = $request->phutrach;
            $danhsach->ten = $request->noidung;
            $danhsach->ngay_bat_dau = $request->batdau;
            $danhsach->ngay_ket_thuc = $request->ketthuc;
            $danhsach->save();
        return redirect()->back()->with('thongbao', 'Thêm mới thành công');

    }

    public function getSua($id){
        $danhsach = CSKH::find($id);
        $nv = NhanVien::all();
        return view('quanly.cskh.edit',compact('nv','danhsach'));
    }
    public function postSua(Request $request, $id){
        $danhsach = CSKH::find($id);
        $this->validate($request, [
            'ten'=>'required'.$id
        ],
        [
            'ten.required'=>'Bạn chưa nội dung chiến dịch'
        ]);

        $danhsach->nguoi_tao = $request->nguoitao;
        $danhsach->nguoi_phu_trach = $request->phutrach;
        $danhsach->ten = $request->noidung;
        $danhsach->ngay_bat_dau = $request->batdau;
        $danhsach->ngay_ket_thuc = $request->ketthuc;
        $danhsach->save();
        return redirect()->back()->with('thongbao', 'Sửa thành công');
    }

    public function getXoa($id){
        CSKH::destroy($id);
        return redirect()->back()->with('thongbao', 'Xóa thành công');
    }
}
