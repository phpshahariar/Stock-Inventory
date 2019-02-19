<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Apr 2018 04:52:46 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Color Admin | Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta content="{{ csrf_token() }}" name="csrf-token" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{!! asset('/dashboard/') !!}/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="{!! asset('/dashboard/') !!}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{!! asset('/dashboard/') !!}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{!! asset('/dashboard/') !!}/assets/css/animate.min.css" rel="stylesheet" />
    <link href="{!! asset('/dashboard/') !!}/assets/css/style.min.css" rel="stylesheet" />
    <link href="{!! asset('/dashboard/') !!}/assets/css/style-responsive.min.css" rel="stylesheet" />
    <link href="{!! asset('/dashboard/') !!}/assets/css/theme/default.css" rel="stylesheet" id="theme" />

    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="{!! asset('/dashboard/') !!}/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
    <link href="{!! asset('/dashboard/') !!}/assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
    <link href="{!! asset('/dashboard/') !!}/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
    <link href="{!! asset('/dashboard/') !!}/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="{!! asset('/dashboard/') !!}/public/dashboard/assets/js/jquery.datetimepicker.min.css" rel="stylesheet"/>
    <!-- ================== END PAGE LEVEL STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{!! asset('/dashboard/') !!}/assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body>
<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
    <!-- begin #header -->
    @include('dashboard.includes.header')
    <!-- end #header -->

    <!-- begin #sidebar -->
    @include('dashboard.includes.sidebar')
    <!-- end #sidebar -->

    <!-- begin #content -->
    @yield('content')
    <!-- end #content -->

    <!-- begin theme-panel -->
    <div class="theme-panel">
        <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
        <div class="theme-panel-content">
            <h5 class="m-t-0">Color Theme</h5>
            <ul class="theme-list clearfix">
                <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
            </ul>
            <div class="divider"></div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Header Styling</div>
                <div class="col-md-7">
                    <select name="header-styling" class="form-control input-sm">
                        <option value="1">default</option>
                        <option value="2">inverse</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label">Header</div>
                <div class="col-md-7">
                    <select name="header-fixed" class="form-control input-sm">
                        <option value="1">fixed</option>
                        <option value="2">default</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                <div class="col-md-7">
                    <select name="sidebar-styling" class="form-control input-sm">
                        <option value="1">default</option>
                        <option value="2">grid</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label">Sidebar</div>
                <div class="col-md-7">
                    <select name="sidebar-fixed" class="form-control input-sm">
                        <option value="1">fixed</option>
                        <option value="2">default</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                <div class="col-md-7">
                    <select name="content-gradient" class="form-control input-sm">
                        <option value="1">disabled</option>
                        <option value="2">enabled</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Content Styling</div>
                <div class="col-md-7">
                    <select name="content-styling" class="form-control input-sm">
                        <option value="1">default</option>
                        <option value="2">black</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-12">
                    <a href="#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i class="fa fa-refresh m-r-3"></i> Reset Local Storage</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end theme-panel -->

    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="{!! asset('/dashboard/') !!}/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
<script src="{!! asset('/dashboard/') !!}/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
<script src="{!! asset('/dashboard/') !!}/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
<script src="{!! asset('/dashboard/') !!}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="{!! asset('/dashboard/') !!}/assets/crossbrowserjs/html5shiv.js"></script>
<script src="{!! asset('/dashboard/') !!}/assets/crossbrowserjs/respond.min.js"></script>
<script src="{!! asset('/dashboard/') !!}/assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="{!! asset('/dashboard/') !!}/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="{!! asset('/dashboard/') !!}/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{!! asset('/dashboard/') !!}/assets/plugins/gritter/js/jquery.gritter.js"></script>
<script src="{!! asset('/dashboard/') !!}/assets/plugins/flot/jquery.flot.min.js"></script>
<script src="{!! asset('/dashboard/') !!}/assets/plugins/flot/jquery.flot.time.min.js"></script>
<script src="{!! asset('/dashboard/') !!}/assets/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="{!! asset('/dashboard/') !!}/assets/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="{!! asset('/dashboard/') !!}/assets/plugins/sparkline/jquery.sparkline.js"></script>
<script src="{!! asset('/dashboard/') !!}/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{!! asset('/dashboard/') !!}/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{!! asset('/dashboard/') !!}/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="{!! asset('/dashboard/') !!}/assets/js/dashboard.min.js"></script>
<script src="{!! asset('/dashboard/') !!}/assets/js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
@yield('page_js')
<script>
    $(document).ready(function() {
        App.init();
        Dashboard.init();
    });
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-53034621-1', 'auto');
    ga('send', 'pageview');
</script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Apr 2018 04:53:38 GMT -->
</html>

