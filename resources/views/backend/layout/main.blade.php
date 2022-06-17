<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SK | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <script src="https://kit.fontawesome.com/63b4fcb6d3.js" crossorigin="anonymous"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/bower_components/admin-lte/dist/css/adminlte.min.css') }}">
  <!-- CKEditor -->
  <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('backend/layout/navbar')

@include('backend/layout/sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-4">
          <h1 class="m-0">{{ $heading }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-4">
          @if(session('success'))
            <div class="alert alert-success" role="alert">
              {{ session('success') }}
            </div>
          @endif

          @include('sweetalert::alert')
        </div>
        <div class="col-sm-4">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

@yield('content')
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>
<!-- /.control-sidebar -->

  @include('backend/layout/footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('backend/bower_components/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/bower_components/admin-lte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
