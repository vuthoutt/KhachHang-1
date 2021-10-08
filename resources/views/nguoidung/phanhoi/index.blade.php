@extends('nguoidung.layout')
@section('head')
    <title>Lịch sử đặt hàng</title>
@endsection
@section('content')
@if (count($errors)>0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $err)
            {{ $err }}
        @endforeach
    </div>
@endif
@if (session('thongbao'))
    <div class="alert alert-success">
        {{ session('thongbao') }}
    </div>
@endif
<div class="well" style="margin-top: 50px">
    <h1>Viết bình luận... <span class="glyphicon glyphicon-pencil"></span></h1>
    <form role="form" action="{{ route('thekhachhang.postPhanhoi') }}" method="POST">
        @csrf
        <div class="form-group">
            <textarea name="noi_dung" id="" rows="10" cols="100"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
</div>
<hr>
<div class="well">
@foreach ($phanhoi as $ph)
    
    <div class="media">
        <div class="media-body">
            <h4 class="media-heading">{{$ph->user->email}} <small>{{$ph->created_at}}</small> </h4>
            {{$ph->noi_dung}} <br>
        </div>
    </div>
    <hr>
    @endforeach
</div>
@endsection