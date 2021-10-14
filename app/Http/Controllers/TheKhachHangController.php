<?php

namespace App\Http\Controllers;

use App\Models\Marketing;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\KhachHang;
use App\Models\BinhLuan;

class TheKhachHangController extends Controller
{
    public function index(){
        return view('nguoidung.index');
    }

    public function dangky(){
        return view('nguoidung.dangky');
    }
    public function postDangky(Request $request){
        $this->validate($request,[
            'ten'=>'required',
            'email'=>'required',
            'sdt'=>'required',
            'password'=>'required|min:6',
            'ngay_sinh'=>'required',
            'dia_chi'=>'required',
        ],
        [
            'ten.required'=>'Bạn chưa nhập họ tên',
            'email.required'=>'Bạn chưa nhập email',
            'sdt.required'=>'Bạn chưa nhập số điện thoại',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'pasword.min'=>'Mật khẩu ít nhất phải có 6 chữ số',
            'ngay_sinh.required'=>'Bạn chưa nhập ngày sinh',
            'dai_chi.required'=>'Bạn chưa nhập địa chỉ',
        ]);
        $user = new User;
        $user->chuc_vu_id =0;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $kh = new KhachHang;
        $kh->user_id = $user->id;
        $kh->ma_kh = rand(1,1000000);
        $kh->ten = $request->ten;
        $kh->gioi_tinh = $request->gioi_tinh;
        $kh->ngay_sinh = $request->ngay_sinh;
        $kh->dia_chi = $request->dia_chi;
        $kh->sdt = $request->sdt;
        $kh->save();

        return redirect()->back()->with('thongbao', 'Đăng kí thành công');
    }
    public function dangnhap(){
        return view('nguoidung.dangky');
    }
    public function postDangnhap(Request $req){
        $this->validate($req,[
          'email'=>'required',
          'password'=>'required',
        ],[
            'email.required'=>'Bạn chưa nhập tài khoản',
            'password.required'=>'Bạn chưa nhập mật khẩu',
        ]);

        $remember = $req->has('remember') ?TRUE : FALSE;
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password], $remember)){
            return redirect()->route('thekhachhang.index');
        }
        else{
            return redirect()->route('thekhachhang.dangnhap')->with('thongbao2','Đăng nhập thất bại');
        }
    }

    public function dangxuat(){
        Auth::logout();
        return redirect()->route('thekhachhang.dangnhap');
    }

    public function voucher(){
        $date = Carbon::now()->toDateString();
        $vouchers = Marketing::whereDate('ngay_ket_thuc','>=',$date)->where('trang_thai','=','Công khai')->get();
        return view('nguoidung.voucher.index',compact('vouchers'));
    }

    public function taikhoan(){
        return view('nguoidung.taikhoan');
    }

    public function postTaikhoan(Request $request){
        $taikhoan = KhachHang::find(Auth::user()->khach_hang->id);
        $this->validate($request,[
            'ten'=>'required',
            'sdt'=>'required',
        ],[
            'ten.required'=>'Bạn chưa nhập tên',
            'sdt.required'=>'Bạn chưa nhập sdt',
        ]);
        $taikhoan->ten = $request->ten;
        $taikhoan->sdt = $request->sdt;
        $taikhoan->ngay_sinh = $request->ngay_sinh;
        $taikhoan->update();
        return redirect()->back()->with('thongbao','Thay đổi thông tin thành công');

    }

    public function matkhau(){
        return view('nguoidung.matkhau.index');
    }

    public function postMatkhau(Request $request){
        $user = Auth::user();
        if(!(Hash::check($request->oldPassword, $user->password))){
            return redirect()->back()->with('loi1','Sai mật khẩu cũ');
        }
        else if(strcmp($request->oldPassword, $request->password)==0){
            return redirect()->back()->with('loi2','Mật khẩu mới trùng với mật khẩu cũ');
        }
        else if(strcmp($request->password, $request->confirmPassword) ==1){
            return redirect()->back()->with('loi3','Mật khẩu xác nhận không khớp');
        }
        $user->password = bcrypt($request->password);
    	$user->update();
        return redirect()->back()->with('thongbao', 'Thay đổi mật khẩu thành công!');
    }

    public function phanhoi(){
        $phanhoi = BinhLuan::where('nguon_binh_luan','=', Auth::user()->id)->get();
        return view('nguoidung.phanhoi.index', compact('phanhoi'));
    }
    public function postPhanhoi(Request $request){
        $binhluan = new BinhLuan;
        $binhluan ->user_id = Auth::user()->id;
        $binhluan->noi_dung = $request->noi_dung;
        $binhluan->san_pham_id = 1;
        $binhluan->status = 0;
        $binhluan ->nguon_binh_luan = Auth::user()->id;
        $binhluan->ngay_gui = Carbon::now();
        $binhluan->save();

        return redirect()->back()->with('thongbao', 'Gửi phản hồi thành công');

    }


}
