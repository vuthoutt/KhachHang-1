<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Thẻ khách hàng</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    <link href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('assets/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{ asset('assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('assets/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
    
    <style>
        /* body{
            background-color: rgb(238, 169, 169);
            
        } */
     .col-6{
         float: left;
         margin-left: 150px;
         max-width: 50%;
     }
     .the{
         width: 100%;
         height: 40px;
         background-color: rgb(201, 49, 49);
         text-align: center;
         font-size: 30px;
     }
     
    </style>
</head>
<body>
{{-- @if (session('thongbao2'))
<div class="alert alert-success">
    {{session('thongbao2')}}
</div>
@endif --}}
<div class="the">Thẻ khách hàng</div>
@if (count($errors)>0)
<div class="alert alert-danger">
    @foreach ($errors->all() as $item)
        {{$item}}
        <br>
    @endforeach
</div>
@endif
@if (session('thongbao'))
<div class="alert alert-danger">
        {{session('thongbao')}}
</div>
@endif
<div class="main-content">
    <div class="row">
       
        <div class="col-6">
            <h2 class="ml-3">Đăng nhập</h2>
            <div class="panel panel-default" style="width: 300px">
                <div class="panel-body">
                    <form action="" method="POST" id="dang-nhap">
                        @csrf
                        <div class="form-group">
                            <label for="email">Tài khoản</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                                placeholder="Nhập tài khoản...">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu">
                        </div>
                        <div class="checkbox ml-3">
                            <label>
                                <input name="remember" type="checkbox" value=""> Ghi nhớ đăng nhập lần sau
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success ml-3">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6">
            <h2 class="ml-3">Đăng Kí</h2>
            <div class="panel panel-default" style="width: 600px">
                <div class="panel-body">
                    <form action="" method="POST" id="dang-ky">
                        @csrf
      
                        <div class="form-group">
                            <label for="ho_ten_dk">Họ tên <span style="color: red">*</span></label>
                            <input type="text" class="form-control" name="ten" id="ho_ten_dk" 
                                placeholder="Nhập họ tên...">
                        </div>
                        <div class="form-group">
                            <label for="email_dk">Email <span style="color: red">*</span></label>
                            <input type="email" class="form-control" name="email" id="email_dk" aria-describedby="emailHelp"
                                placeholder="Nhập tài khoản...">
                        </div>
                        <div class="form-group">
                            <label for="dien_thoai_dk">Số điện thoại <span style="color: red">*</span></label>
                            <input type="text" class="form-control" name="sdt" id="dien_thoai_dk" 
                                placeholder="Nhập số điện thoại...">
                        </div>
                        <div class="form-group">
                            <label for="password_dk">Mật khẩu <span style="color: red">*</span></label>
                            <input type="password" class="form-control" id="password_dk" name="password" placeholder="Nhập mật khẩu">
                        </div>
      
                        <div class="form-group">
                            <label for="ngay_sinh_dk">Ngày sinh <span style="color: red">*</span></label>
                            <input type="date" class="form-control" name="ngay_sinh" id="ngay_sinh_dk" 
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="dia_chi_dk">Địa chỉ <span style="color: red">*</span></label>
                            <input type="text" class="form-control" name="dia_chi" id="dia_chi_dk" 
                                placeholder="Nhập địa chỉ">
                        </div>
                        <small id="emailHelp" class="form-text text-muted ml-3">Các trường có dấu (<span style="color: red">*</span>) không được để trống!</small> <br>
                        <button type="submit" class="btn btn-primary float-right mr-4">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
