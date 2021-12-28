
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  @section('title','Aplikasi Pembelajaran')
  <title> @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('template/') }}/dist/css/adminlte.min.css">

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <link rel="shortcut icon" href="{{ url('smk.png') }}" type="image/x-icon"/>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>
    <!-- Right navbar links -->

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{ url('logo.png') }}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://w7.pngwing.com/pngs/306/70/png-transparent-computer-icons-management-admin-silhouette-black-and-white-neck.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">{{ request()->session('nama') }}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt active"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ route('admin') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Admin
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ route('kelas') }}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Kelas
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ route('dosen') }}" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Dosen
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ route('mahasiswa') }}" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Mahasiswa
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ route('materi') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Materi
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ route('kelompok') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Kelompok
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ route('tugas') }}" class="nav-link">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Tugas
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ route('absensi') }}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Absensi
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ route ('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-undo-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  @yield('content')

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    {{-- <strong> &copy;MEDIATAMA WEB INDONESIA</a></strong> --}}
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('template/') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/') }}/dist/js/demo.js"></script>


<script src="{{ asset('template/') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('template/') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('template/') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('template/') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@stack('js')

</body>
</html>
