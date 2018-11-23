@extends('_layouts.base')

@section('title', 'Dashboard - Sistem')

@section('content_title')
@endsection

@section('content')

@endsection

@section('script')
<script>
 $('#datakaryawan').dataTable( {
  "ordering": false
} );
</script>

@endsection