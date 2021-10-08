@extends('nguoidung.layout')
@section('head')
<title>Trang cá nhân</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <div class="row">
                    <div class="col-lg-10">
                        Voucher
                    </div>

                </div>

            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        @foreach ($vouchers as $voucher)
        <div class="col-lg-3 col-md-6" style="width:100%">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3" style="width:0%">
                            <i class="fa fa-paste fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge" style="font-size: 20px">{{ $voucher->ten }}</div>
                        </div>
                    </div>
                </div>
                <a href="">
                    <div class="panel-footer">
                        <span class="pull-left">Ngày Kết Thúc: {{ $voucher->ngay_ket_thuc }}</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
