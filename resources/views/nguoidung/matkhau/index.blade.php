@extends('nguoidung.layout')
@section('head')
    <title>{{ Auth::user()->khach_hang->ten }}</title>
@endsection
@section('content')
    

    <div class="card">
        <h1 class="card-header">Thay đổi mật khẩu </h1>
        <br>
        @if (count($errors)>0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $err)
                    {{$err}}
                @endforeach
            </div>
        @endif
        @if (session('loi1'))
            <div class="alert alert-danger">
                {{session('loi1')}}
            </div>
        @endif
        @if (session('loi2'))
            <div class="alert alert-danger">
                {{session('loi2')}}
            </div>
        @endif
        @if (session('loi3'))
        <div class="alert alert-danger">
            {{session('loi3')}}
        </div>
    @endif
        @if (session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
        @endif
        <div class="card-body">
            <form action="{{ route('thekhachhang.postMatkhau') }}" method="POST">
              @csrf
                <div class="form-group">
                    <label for="oldPassword">Mật khẩu cũ</label>
                    <input type="password" class="form-control" id="oldPassword" name="oldPassword">
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu mới</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                  <label for="confirmPassword">Xác nhận mật khẩu mới</label>
                  <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
              </div>
                <button type="submit" class="btn btn-primary">Thay đổi</button>
            </form>
        </div>
    </div>

@endsection