<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Siswa</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{url('assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/dist/css/custom.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/bower_components/morris.js/morris.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{url('assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SWA</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>S</b>iswa</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <div class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active treeview">
          <li><a href="/"><i class="fa fa-table"></i><span>Siswa</span></a></li>
          <li><a href="/jurusan"><i class="fa fa-table"></i><span>Jurusan</span></a></li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  
  @yield('content')

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script src="{{url('assets/adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{url('assets/adminlte/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{url('assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/adminlte/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{url('assets/adminlte/bower_components/morris.js/morris.min.js')}}"></script>
<script src="{{url('assets/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<script src="{{url('assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{url('assets/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{url('assets/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<script src="{{url('assets/adminlte/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{url('assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{url('assets/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{url('assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{url('assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{url('assets/adminlte/bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{url('assets/adminlte/dist/js/adminlte.min.js')}}"></script>
<script src="{{url('assets/adminlte/dist/js/pages/dashboard.js')}}"></script>
<script src="{{url('assets/adminlte/dist/js/demo.js')}}"></script>
</body>
</html>
