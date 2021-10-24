<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('head')

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    <link href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('assets/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{ asset('assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('assets/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: rgb(197, 12, 12)">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color: white" href="index.html">Trang quản trị</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white">
                        Xin chào {{ Auth::user()->khach_hang->ten ?? ''}}  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ route('quanly.taikhoan') }}"><i class="fa fa-user fa-fw"></i> Thông tin tài khoản</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ route('quanly.dangxuat') }}"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sideba-image">
                            <img src="image/vinmart.jpg" width="250px" alt="vinmart">
                        </li>
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{Route('quanly.index')}}" style="color: red"><i class="fa fa-dashboard fa-fw" ></i> Trang chủ</a>
                        </li>
                        <li>
                            <a href="{{Route('cskh.index')}}" style="color: red"><i class="fa fa-dashboard fa-fw"></i> CSKH</a>
                        </li>
                        <li>
                            <a href="{{Route('marketing.index')}}" style="color: red"><i class="fa fa-dashboard fa-fw"></i> Marketing</a>
                        </li>
                        <li>
                            <a href="{{ Route('binhluan.index') }}" style="color: red"><i class="fa fa-dashboard fa-fw"></i> Bình luận</a>
                        </li>
                        <li>
                            <a href="#" style="color: red"><i class="fa fa-users fa-fw"></i> Khách hàng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{Route('khachhang.index')}}" style="color: red">Thông tin khách hàng</a>
                                </li>
                                <li>
                                    <a href="#" style="color: red">Phân loại khách hàng<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="{{ route('khachthuong.index') }}" style="color: red">Khách hàng bình thường</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('khachvip.index') }}" style="color: red">Khách hàng VIP</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('thongke.index') }}" style="color: red"><i class="fa fa-bar-chart-o fa-fw"></i> Thống kê</a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ route('thongke.index') }}" style="color: red"><i class="fa fa-bar-chart-o fa-fw"></i>Khách Hàng</a>
                                        <a href="{{ route('thongke.khachhang') }}" style="color: red"><i class="fa fa-bar-chart-o fa-fw"></i>Phân Loại Khách Hàng</a>
                                    </li>
                                </ul>

                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                @yield('content')
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('assets/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('assets/dist/js/sb-admin-2.js') }}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{ asset('assets/bower_components/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

    @yield('js')
</body>

</html>
