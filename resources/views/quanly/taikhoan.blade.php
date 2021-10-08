@extends('quanly.layout.layout')
@section('head')
    <title>Thông tin cá nhân</title>
@endsection
@section('content')
<h1>Thông tin cá nhân</h1>

     <div class="panel-body">
       <form action="" method="POST">
           <div>
               <div>
                   <label>Mã Khách Hàng</label>
                     <input type="text" class="form-control" placeholder="" value="" name="ma_kh" aria-describedby="basic-addon1" disabled>
               </div>
               <br>
           <div>
               <label>Email</label>
                 <input type="email" class="form-control" placeholder="" value="" name="email" aria-describedby="basic-addon1" disabled>
           </div>
           <br>	
           <div>  
               <label>Họ tên</label>
                <input type="text" class="form-control" placeholder="" value="" name="ten" aria-describedby="basic-addon1">
           </div>
                <br>
            <div>  
                <label>Ngày sinh</label>
                <input type="date" class="form-control" placeholder="" value="" name="ngay_sinh" aria-describedby="basic-addon1">
            </div>
                <br>
           <div>
               <label>Số điện thoại</label>
                 <input type="text" class="form-control" placeholder="" value="" name="sdt" aria-describedby="basic-addon1">
           </div>
           <br>
             <br>
           <button type="submit" class="btn btn-primary">Lưu</button>

      </form>
     </div>

@endsection
