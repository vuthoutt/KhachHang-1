@extends('quanly.layout.layout')
@section('head')
    <title>Marketing</title>
@endsection
@section('content')
@if (count($errors)>0)
    <div class="alert alert-danger">
        @foreach ($errors as $err)
            {{$err}} <br>
        @endforeach
    </div>
@endif
@if (session('thongbao'))
<div class="alert alert-success">
    {{ session('thongbao') }}
</div>
@endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dự án Marketing</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        <a class="btn btn-primary" href="{{Route('marketing.getThem')}}"> <i class="fa fa-plus"></i>
                            Thêm</a>
                    <p>
                </div>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Nội dung</th>
                        <th>Người tạo</th>
                        <th>Người phụ trách</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày kết thúc</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($marketing))
                        <?php $i = 1; ?>
                        @foreach ($marketing as $item)
                    <tr class="even gradeC" align="center">
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->ten}}</td>
                        <td>{{ $item->nhan_vien->ten }}</td>
                        <td>{{ $item->nguoi_phu_trach }}</td>
                        <td>{{ $item->ngay_bat_dau }}</td>
                        <td>{{ $item->ngay_ket_thuc }}</td>
                        <td>{{ $item->trang_thai }}</td>
                        <td class="center">
                            <a href="{{ Route('marketing.getSua',['id'=>$item->id]) }}"><i class="fa fa-pencil fa-fw"></i> </a>
                            <a href="{{ Route('marketing.getXoa', ['id'=>$item->id]) }}"><i class="fa fa-trash-o  fa-fw"></i></a>
                        </td>
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
