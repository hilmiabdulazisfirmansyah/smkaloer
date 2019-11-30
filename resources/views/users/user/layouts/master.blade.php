<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard | {{$users}}</title>
  <!-- Tell the browser to be responsive to screen width -->
  @yield('css')

</head>

<body class="hold-transition skin-blue sidebar-mini fixed">
  <!-- Site wrapper -->
  <div class="wrapper">

    @include('users/user/layouts/header')
    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    @include('users/user/layouts/sidebar')

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      @include('notif.success')
      @include('notif.gagal')
      @include('users/user/layouts/content')
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('users/user/layouts/footer')

    <!-- ./wrapper -->
    @yield('script')
    
  </body>
  </html>
