<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\NhanVien;
use App\Models\User;

class NhanVienController extends Controller
{
    //
    public function index() {
        $diemBan = Auth::user()->nhan_vien->diem_ban_id;
        $phongBan = Auth::user()->nhan_vien->phong_ban_id;
        $nhanvien = NhanVien::where('diem_ban_id', $diemBan)->where('phong_ban_id', $phongBan)->get();
        return view('pages.NhanVien.index', compact('nhanvien'));
    }

    public function getAdd() {
        return view('pages.NhanVien.add');
    }

    public function getEdit($id) {
        $nhanVien = NhanVien::find($id);
        return view('pages.NhanVien.edit', compact('nhanVien'));
    }

    public function postAdd(Request $request) {
        if ($request->ajax()) {
            $validator = \Validator::make($request->all(), [
                'email' => 'required|email|unique:users,email',
                'ten' => 'required',
                'gioi_tinh' => 'required',
                'ngay_sinh' => 'required',
                'sdt' => 'required',
                'cccd' => 'required',
                'dia_chi' => 'required',
            ], [
                'email.required' => 'Hãy nhập email!',
                'email.unique' => 'Địa chỉ email đã tồn tại!',
                'email.email' => 'Email không đúng định dạng!',
                'ten.required' => 'Hãy nhập đẩy đủ họ tên!',
                'gioi_tinh.required' => 'Hãy chọn giới tính!',
                'ngay_sinh.required' => 'Hãy chọn ngày sinh!',
                'sdt.required' => 'Hãy nhập số điện thoại!',
                'cccd.required' => 'Hãy nhập số Căn cước công dân!',
                'dia_chi.required' => 'Hãy nhập địa chỉ!',
            ]);

            if ($validator->fails()) {
                return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
            } else {
                $respone = ['success' => true];

                $user = new User;
                $user->email = $request->email;
                $user->password = md5(date('d/m/Y', strtotime($request->ngay_sinh)));
                $user->chuc_vu_id = 6;
                $user->save();

                $nhanVien = new NhanVien;
                $nhanVien->user_id = $user->id;
                $nhanVien->phong_ban_id = Auth::user()->nhan_vien->phong_ban_id;
                $nhanVien->chuc_vu_id = 6;
                $nhanVien->diem_ban_id = Auth::user()->nhan_vien->diem_ban_id;
                $nhanVien->ten = $request->ten;
                $nhanVien->gioi_tinh = $request->gioi_tinh;
                $nhanVien->ngay_sinh = $request->ngay_sinh;
                $nhanVien->dia_chi = $request->dia_chi;
                $nhanVien->sdt = $request->sdt;
                $nhanVien->cccd = $request->cccd;
                $nhanVien->trang_thai = 'Đang làm việc';
                $nhanVien->save();
                $nhanVien->ma_nv = 'NV'.$nhanVien->id;
                $nhanVien->save();

                return response()->json($respone, 200);
            }   
        }
    }

    public function postEdit(Request $request, $id) {
        if ($request->ajax()) {
            $nhanVien = NhanVien::find($id);
            $user = User::find($nhanVien->user_id);

            $validator = \Validator::make($request->all(), [
                'ten' => 'required',
                'email' => 'required|email|unique:users,email,'.$user->id,
                'gioi_tinh' => 'required',
                'ngay_sinh' => 'required',
                'sdt' => 'required',
                'cccd' => 'required',
                'dia_chi' => 'required',
            ], [
                'ten.required' => 'Hãy nhập đẩy đủ họ tên!',
                'email.required' => 'Hãy nhập email!',
                'email.unique' => 'Email đã tồn tại!',
                'email.email' => 'Email Không đúng dịnh dạng!',
                'gioi_tinh.required' => 'Hãy chọn giới tính!',
                'ngay_sinh.required' => 'Hãy chọn ngày sinh!',
                'sdt.required' => 'Hãy nhập số điện thoại!',
                'cccd.required' => 'Hãy nhập số Căn cước công dân!',
                'dia_chi.required' => 'Hãy nhập địa chỉ!',
            ]);

            if ($validator->fails()) {
                return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
            } else {
                $respone = ['success' => true];

                $user->email = $request->email;
                $user->update();

                $nhanVien->ten = $request->ten;
                $nhanVien->gioi_tinh = $request->gioi_tinh;
                $nhanVien->ngay_sinh = $request->ngay_sinh;
                $nhanVien->dia_chi = $request->dia_chi;
                $nhanVien->sdt = $request->sdt;
                $nhanVien->cccd = $request->cccd;
                $nhanVien->update();

                return response()->json($respone, 200);
            }   
        }
    }

    public function delete($id) {
        $respone = ['success' => false];

        $nhanVien = NhanVien::find($id);
        $user = User::destroy($nhanVien->user_id);
        $delete = $nhanVien->delete();
        if ($delete && $user) {
            $respone['success'] = true;
            return response()->json($respone, 200);
        } 
        return response()->json($respone, 400);
    }

    public function resetPass($id) {
        $respone = ['success' => false];
        $user = User::find($id);
        if($user) {
            $ngaySinh = md5(date('d/m/Y', strtotime($user->nhan_vien->ngay_sinh)));
            $user->password = $ngaySinh;
            $user->update();

            $respone['success'] = true;
            return response()->json($respone, 200);
        } else {
            return response()->json($respone, 200);
        }

        return response()->json($respone, 400);
    }

}
