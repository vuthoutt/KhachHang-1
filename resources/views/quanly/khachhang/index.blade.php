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
                        <th>Mã KH</th>
                        <th>Họ tên</th>
                        <th>Số điện thoại</th>
                        <th>Ngày sinh</th>
                        <th>Địa chỉ</th>
                        <th>Điểm tích lũy</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($thongtin))
                        <?php $i=1; ?>
                        @foreach ($thongtin as $tt)
                    <tr class="even gradeC" align="center">
                        <td>{{ $i++ }}</td>
                        <td>{{ $tt->ma_kh }}</td>
                        <td>{{ $tt->ten }}</td>
                        <td>{{ $tt->sdt }}</td>
                        <td>{{ $tt->ngay_sinh}}</td>
                        <td>{{ $tt->dia_chi }}</td>
                        <td>{{ $tt->tich_diem }}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

@endsection
