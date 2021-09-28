@extends('quanly.layout.layout')
@section('head')
    <title>Sửa</title>
@endsection
@section('content')
    @if (count($errors)>0)
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
    @endif

    <div class="row">
        <div class="col-lg-12">
            <p>
                <a class="btn btn-primary" href="{{ route('cskh.index') }}"> <i class="fas fa-arrow-left"></i>
                    Quay lại danh sách</a>
            <p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{route('cskh.postSua', ['id'=>$danhsach->id])}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea class="form-control" rows="3" id="noidung" name="noidung" value = "{{$danhsach->ten}}"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Người tạo</label>
                        <select class="form-control" style="width: 30%" name="nguoitao"
                                            id="nguoitao">
                                            <option value="" disabled selected>--- Người tạo ---</option>
                                            @if (isset($nv))
                                                @foreach ($nv as $item)
                                                    <option value="{{ $item->id }}"
                                                        @if ($item->id == $danhsach->nguoi_tao)
                                                            selected
                                                        @endif
                                                        >{{ $item->ten }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                    </div>
                    <div class="form-group">
                        <label>Người phụ trách</label>
                        <input class="form-control" id="phutrach" name="phutrach" value="{{$danhsach->nguoi_phu_trach}}" placeholder="Nhập họ tên" />
                    </div>
                    <div class="form-group">
                        <label>Ngày bắt đầu</label>
                        <input type="date" class="form-control" id="batdau" value="{{$danhsach->ngay_bat_dau}}" name="batdau" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Ngày kết thúc</label>
                        <input type="date" class="form-control" id="ketthuc" value="{{$danhsach->ngay_ket_thuc}}" name="ketthuc" placeholder="" />
                    </div>
                    <button type="submit" class="btn btn-default">Lưu</button>
                    <button type="reset" class="btn btn-default">Nhập lại</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

@endsection