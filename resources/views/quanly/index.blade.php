@extends('quanly.layout.layout')
@section('head')
<title>Admin</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <div class="row">
                    <div class="col-lg-10">
                        Trang chủ
                    </div>
                    <div class="col-lg-2" style="">
                        <a class="btn btn-success btn-lg" id="btnDiemDanh" data-url={{route('ngaycong.add')}} {{$isChamCong ? 'disabled' : ''}} > <i class="fa fa-edit"></i> Chấm công</a>
                    </div>
                </div>

            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-paste fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge" style="font-size: 20px">CSKH</div>
                        </div>
                    </div>
                </div>
                <a href="{{Route('cskh.index')}}">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-paste fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge" style="font-size: 20px">Marketing</div>
                        </div>
                    </div>
                </div>
                <a href="{{Route('marketing.index')}}">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-paste fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge" style="font-size: 20px">Bình luận</div>
                        </div>
                    </div>
                </div>
                <a href="{{Route('binhluan.index')}}">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-group fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge" style="font-size: 20px">Thông tin khách hàng</div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <a href="{{Route('khachhang.index')}}">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>


        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-group fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge" style="font-size: 20px">Phân loại khách hàng</div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('khachthuong.index') }}">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-cubes fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge" style="font-size: 20px">Thống kê</div>
                        </div>
                    </div>
                </div>
                <a href="{{Route('thongke.index')}}">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

    </div>

@endsection
@section('js')

    <script>
        $("#btnDiemDanh").click(function(e){
            e.preventDefault()
            var type = "GET"
            var url = $(this).attr('data-url')
            $.ajax({
                type: type,
                url: url,
                success: function (response) {
                    const {success} = response
                    if (success) {
                        Swal.fire({
                            title: "Điểm danh thành công!",
                            icon: "success",
                            showConfirmButton: true,
                        })
                    } else {
                        Swal.fire({
                            title: "Bạn đã điểm danh rồi!",
                            icon: "error",
                            showConfirmButton: true,
                        })
                    }

                    $("#btnDiemDanh").attr('disabled', true)
                },
                error: function (response) {
                    Swal.fire({
                        title: "Lỗi!",
                        icon: "error",
                        showConfirmButton: true,
                    })
                }
            })
        })
    </script>

@endsection
