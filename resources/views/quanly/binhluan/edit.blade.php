@extends('quanly.layout.layout')
@section('head')
    <title>Trả lời</title>
@endsection
@section('content')
    {{-- @if (count($errors)>0)
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
    @foreach ($errors->all() as $err)
        {{ $err }}<br>
    @endforeach
    </div>
    @endif
    @if (session('thongbao'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            {{ session('thongbao') }}
        </div>
    @endif --}}

    <div class="row">
        <div class="col-lg-12">
            <p>
                <a class="btn btn-primary" href="{{ route('binhluan.index') }}"> <i class="fas fa-arrow-left"></i>
                    Quay lại danh sách</a>
            <p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Phản hồi của khách hàng</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ route('binhluan.postSua', ['id' => $comments->id]) }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <textarea class="form-control" disabled rows="3">{{ $comments->noi_dung }}</textarea> <br>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control"  name="noi_dung" rows="3"></textarea> <br>
                    </div>
                    <button type="submit" class="btn btn-default">Trả lời</button>
                    <button type="reset" class="btn btn-default">Nhập lại</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

@endsection
