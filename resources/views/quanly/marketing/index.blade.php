@extends('quanly.layout.layout')
@section('head')
    <title>Marketing</title>
@endsection
@section('content')

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
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="even gradeC" align="center">
                        <td>1</td>
                        <td>Chiến lược marketing 1</td>
                        <td>Nguyễn Khắc Hiếu</td>
                        <td>Nguyễn Khắc Hiếu</td>
                        <td></td>
                        <td></td>
                        <td class="center">
                            <a href="#"><i class="fa fa-pencil fa-fw"></i> </a>
                            <a href="#"><i class="fa fa-trash-o  fa-fw"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

@endsection
