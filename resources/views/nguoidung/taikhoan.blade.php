@extends('nguoidung.layout')
@section('head')
    <title>Thông tin cá nhân</title>
@endsection
@section('content')
<h1>Thông tin cá nhân</h1>
@if (count($errors)>0)
  <div class="alert alert-danger">
    @foreach ($errors->all() as $err)
        {{$err}}
    @endforeach
@endif
  </div>
@if (session('thongbao'))
    <div class="alert alert-success">
      {{ session('thongbao') }}
    </div>
@endif
     <div class="panel-body">
       <form action="{{ route('thekhachhang.postTaikhoan') }}" method="POST">
         @csrf
           <div>
               <div>
                   <label>Mã Khách Hàng</label>
                     <input type="text" class="form-control" placeholder="" value="{{ Auth::user()->khach_hang->ma_kh }}" name="ma_kh" aria-describedby="basic-addon1" disabled>
               </div>
               <br>
           <div>
               <label>Email</label>
                 <input type="email" class="form-control" placeholder="" value="{{ Auth::user()->email }}" name="email" aria-describedby="basic-addon1" disabled>
           </div>
           <br>	
           <div>  
               <label>Họ tên</label>
                <input type="text" class="form-control" placeholder="" value="{{ Auth::user()->khach_hang->ten }}" name="ten" aria-describedby="basic-addon1">
           </div>
                <br>
            <div>  
                <label>Ngày sinh</label>
                <input type="date" class="form-control" placeholder="" value="{{ Auth::user()->khach_hang->ngay_sinh }}" name="ngay_sinh" aria-describedby="basic-addon1">
            </div>
                <br>
           <div>
               <label>Số điện thoại</label>
                 <input type="text" class="form-control" placeholder="" value="{{ Auth::user()->khach_hang->sdt }}" name="sdt" aria-describedby="basic-addon1">
           </div>
           <br>
           <div>  
            <label>Điểm tích lữy</label>
             <input type="text" class="form-control" placeholder="" value="{{ Auth::user()->khach_hang->tich_diem }}" name="ten" aria-describedby="basic-addon1" disabled>
        </div>
             <br>
           <button type="submit" class="btn btn-primary">Lưu</button>

      </form>
     </div>

@endsection
