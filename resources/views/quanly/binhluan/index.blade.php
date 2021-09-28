@extends('quanly.layout.layout')
@section('head')
    <title>Quản lý bình luận</title>
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách bình luận</h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên người gửi</th>
                        <th>Bình luận</th>
                        <th>Ngày gửi</th>
                        <th>Sản phẩm</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($binhluan))
                    <?php $i=1; ?>
                    @foreach ($binhluan as $bl)
                    <tr class="even gradeC" align="center">
                        <td>{{ $i++ }}</td>
                        <td>{{ $bl->user_id }}</td>
                        <td>{{ $bl->noi_dung }} <br>
                            <textarea class="form-control" rows="3"></textarea> <br>
                            <button type="submit" class="btn btn-default">Trả lời</button>
                        </td>
                        <td>{{ $bl->created_at }}</td>
                        <td>{{ $bl->sanpham_id }}</td>
                        <td class="center">
                            <a href="#"><i class="fa fa-pencil fa-fw"></i> </a>
                            <a href="#"><i class="fa fa-trash-o  fa-fw"></i></a>
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
