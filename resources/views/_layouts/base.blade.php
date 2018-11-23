<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>@yield('title')</title>


  <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/fonts/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/fonts/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">

  <link rel="stylesheet" href="{{ asset('/dist/css/skins/_all-skins.css') }}">
  <link rel="stylesheet" href="{{ asset('/plugins/datatables/dataTables.bootstrap.css') }}">

  <link rel="stylesheet" href="{{ asset('/plugins/bootstrap-daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/plugins/timepicker/bootstrap-timepicker.min.css') }}">

  <link rel="stylesheet" href="{{ asset('/plugins/iCheck/all.css') }}">
 
@yield('css')
</head>
<body id="bd-web" class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('_partials.header')
@include('_partials.sidebar_main')
@include('_partials.section')
@include('_partials.footer')

</div>
<script src="{{ asset('/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('/plugins/fastclick/fastclick.js') }}"></script>
<script src="{{ asset('/dist/js/app.min.js') }}"></script>
<script src="{{ asset('/dist/js/demo.js') }}"></script>

<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<script src="{{ asset('/plugins/daterangepicker/moment.js') }}"></script>
<script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('/plugins/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>

<script src="{{ asset('/plugins/iCheck/icheck.min.js') }}"></script>
<script type="text/javascript">
  $('#bd-web').removeClass('skin-black-light').addClass('skin-blue');
</script>

@yield('script')
</body>
</html>
