@extends('quanly.layout.layout')
@section('head')
    <title>CSKH</title>
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách khách hàng</h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Họ tên</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Ngày sinh</th>
                        <th>Địa chỉ</th>
                        <th>Điểm tích lũy</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="even gradeC" align="center">
                        <td>1</td>
                        <td>Nguyễn Khắc Hiếu</td>
                        <td>hieu@gmail.com</td>
                        <td>012345678</td>
                        <td>05/05/2000</td>
                        <td>Thanh Hóa</td>
                        <td>200</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

@endsection
