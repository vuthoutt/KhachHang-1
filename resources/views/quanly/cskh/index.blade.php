@extends('quanly.layout.layout')
@section('head')
    <title>CSKH</title>
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chăm sóc khách hàng</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        <a class="btn btn-primary" href="{{ Route('cskh.getThem') }}"> <i class="fa fa-plus"></i>
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
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($danhsach))
                    <?php $i = 1; ?>
                    @foreach ($danhsach as $ds)
                    <tr class="even gradeC" align="center">
                        <td>{{ $i++ }}</td>
                        <td>{{ $ds->ten }}</td>
                        <td>{{ $ds->nhan_vien->ten }}</td>
                        <td>{{ $ds->nguoi_phu_trach }}</td>
                        <td>{{ $ds->ngay_bat_dau }}</td>
                        <td>{{ $ds->ngay_ket_thuc }}</td>
                        <td class="center">
                            <a href="{{ Route('cskh.getSua',['id'=>$ds->id])}}"><i class="fa fa-pencil fa-fw"></i> </a>
                            <a href="{{ Route('cskh.getXoa',['id'=>$ds->id]) }}"><i class="fa fa-trash-o  fa-fw" onclick="return ConfirmDelete()"></i></a>
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
