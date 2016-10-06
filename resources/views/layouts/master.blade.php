<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BNI-SKS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <!-- jQuery 2.1.4 -->
    <script src="{{asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('plugins/select2/select2.min.css')}}">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{asset('plugins/datepicker/datepicker3.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">



    <!--Javascript import-->
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('plugins/fastclick/fastclick.min.js')}}"></script>
    <!-- InputMask -->
    <script src="{{asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
    <script src="{{asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
    <script src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/app.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>
    <!-- Select2 -->
    <script src="{{asset('plugins/select2/select2.full.min.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <!-- bootstrap time picker -->
    <script src="{{asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <!-- DataTables -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('plugins/datatables/buttons.html5.min.js')}}"></script>
    <!--autonumeric-->
    <script src="{{asset('plugins/autonumeric/autoNumeric.js')}}"> </script>
    <!-- SlimScroll 1.3.0 -->
    <script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        td{
            word-wrap: normal;
        }
    </style>
</head>
<body class="hold-transition skin-green sidebar-mini">
    <!--warapper-->
    <div class="wrapper">
        <header class="main-header">
            <!--Logo-->
            <a href="#" class="logo">
                <!-- logo for regular state and mobile devices -->
              <span class="logo-mini"><b>SKS</b></span>
              <span class="logo-lg" style="color: orange;"><b>BNI-</b>SKS</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
              <nav class="navbar navbar-static-top" role="navigation">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>
               <span id="logo" class="logo-lg" style="color: orange; font-size: 30px;">Tulis<b> BA</b></span>
              </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!--sidebar user panel-->
                <div class="user-panel">
                    <!--Gambar User-->
                    <div class="pull-left image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Abcd Efgh IJK</p>
                        <a href="#">53159</a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header"><center style="font-size:24px; padding:15px 0 15px 0;">MENU UTAMA</center></li>
                    <li class="{{(Request::is('tulisba') ? 'active' : '')}} treetview">

                        <a href="{{url('tulisba')}}">
                            <i class="fa fa-edit"></i><span>Tulis BA</span>
                        </a>
                    </li>
                    <li class="{{(Request::is('laporan_uang_masuk') ? 'active' : '')}} treeview">
                    <a href="{{url('laporan_uang_masuk')}}">
                  <i class="fa fa-expand"></i><span>Uang Msuk/Keluar</span>
                </a>
              </li>
              <li class="{{(Request::is('laporansortir') ? 'active' : '')}} treetview">
                <a href="laporansortir">
                  <i class="fa fa-file"></i><span>Laporan Sortir</span>
                </a>
              </li>
              <li class="{{(Request::is('laporantemuan') ? 'active' : '')}} treetview">
                <a href="{{url('laporantemuan')}}">
                  <i class="fa fa-folder-open"></i><span>Laporan Temuan</span>
                </a>
              </li>
              <li class="{{(Request::is('Daftarpegawai') ? 'active' : '')}} treetview">
                <a href="Daftarpegawai">
                  <i class="fa fa-list"></i><span>Daftar Pegawai</span>
                </a>
              </li>
              </ul>
            </section>
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!--box content-->
            <section class="content">
                    @if(Session::has('informasi'))
                    <div class="alert alert-info">
                    <button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>INFO :</strong>{{Session::get('informasi')}}
                    </div>
                    @endif

                    <!--alert untuk danger-->
                    @if(Session::has('gagal'))
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>INFO :</strong>{{Session::get('gagal')}}
                    </div>
                    @endif

                  <!-- digunakan untuk yang lain-->
                  <p>{{ (Request::is('tulisba') ? 'active' : '')}} </p>
                  @yield('container')
            </section><!--box content-->
        </div><!--content wrapper-->

    </div><!--/warapper-->



    <!-- Page script  on each page-->

</body>
</html>