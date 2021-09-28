@extends('quanly.layout.layout')
@section('head')
    <title>Sửa</title>
@endsection
@section('content')
    @if (count($errors)>0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $err)
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
                <h1 class="page-header">Sửa</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ route('marketing.postSua', ['id'=>$marketing->id]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea class="form-control" rows="3" name="noidung" value="{{ $marketing->ten }}"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Người tạo</label>
                        <select name="nguoitao" id="" class="form-control">
                        <option value="" disabled selected>---Người tạo---</option>
                        @if (isset($nv))
                        @foreach ($nv as $item)
                            <option value="{{ $item->id }}"
                            @if ($item->id == $marketing->nguoi_tao)
                                selected
                            @endif
                            >{{ $item->ten }}</option>
                        @endforeach
                            
                        @endif
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Người phụ trách</label>
                        <input class="form-control" name="nguoiphutrach" value="{{ $marketing->nguoi_phu_trach }}" placeholder="Nhập họ tên" />
                    </div>
                    <div class="form-group">
                        <label>Ngày bắt đầu</label>
                        <input type="date" class="form-control" name="ngaybatdau" value="{{ $marketing->ngay_bat_dau }}" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Ngày kết thúc</label>
                        <input type="date" class="form-control" name="ngayketthuc" value="{{ $marketing->ngay_ket_thuc }}" placeholder="" />
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