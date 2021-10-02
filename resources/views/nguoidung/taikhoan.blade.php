@extends('nguoidung.layout')
@section('head')
    <title>Thông tin cá nhân</title>
@endsection
@section('content')
        <h1>Thông tin cá nhân</h1>
                  <div class="panel-body">
                    <form>
                        <div>
                            <div>
                                <label>Mã Khách Hàng</label>
                                  <input type="email" class="form-control" placeholder="MKH1" name="email" aria-describedby="basic-addon1"
                                  disabled>
                            </div>
                            <br>
                            <label>Họ tên</label>
                              <input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <div>
                            <label>Email</label>
                              <input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
                              disabled>
                        </div>
                        <br>	
                        <div>
                            <label>Số điện thoại</label>
                              <input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <div>
                            <input type="checkbox" class="" name="checkpassword">
                            <label>Đổi mật khẩu</label>
                              <input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <div>
                            <label>Nhập lại mật khẩu</label>
                              <input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <button type="button" class="btn btn-default">Sửa
                        </button>

                    </form>
                  </div>

@endsection