<!DOCTYPE html>
<html>
<head>
    @include('partials.head')
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 @include('partials.header')
 @include('partials.sidemenu')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('sectionheader')
    @yield('content')
    
    @yield('content')

    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('partials.footer')

</div>
<!-- ./wrapper -->
@include('partials.script')
</body>
</html>
