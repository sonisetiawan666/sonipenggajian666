@extends('_layouts.base')

@section('title', 'Dashboard - Sistem')

@section('content_title')
@endsection

@section('content')
<section class="content">
  <div class="row">
        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Absensi</h3>
                </div>

                <div id="bd-absen">
                  
                <div>
            </div>
        </div>
  </div>
</section>
@endsection
  
@section('script')
<script>
    $( document ).ready(function() {
        gettglAbsen();
    });

    function gettglAbsen()
    {
      $.ajax({
          url:"{{ url('tglabsensi') }}",
          type: "GET",
          dataType: "JSON",
          success : function(data){
            var dtchk
            $.each( data, function( key, value ) {
              dtchk = value.det_absensi[0];
            });
            if(data.length == 0){
              $('#bd-absen').append('<div class="no-absen"><h2 class="date-absen label label-warning">Tidak Ada Absensi<labe></div>');
            }else{
              $('#bd-absen div').remove();
              
              if( dtchk == undefined){
                $('#bd-absen').append('<div class="box-body absen-k"><input type="hidden" id="id_absensi" name="id_absensi" value="'+data[0].id+'"><div class="row"><div class="col-md-12">'+
                                      '<div class=""><h2 class="date-absen label label-success"><i class="fa fa-clock-o"></i>'+data[0].tanggal_absensi+'</h2>'+
                                      '</div></div></div></div><div class="box-footer no-padding"><ul class="nav nav-pills nav-stacked nav-stacked-k">'+
                                      '<li><span class="time-a">Jam Mulai Kerja : </span><span class="pull-right"><a onclick="checkjammulaiab()" type="button" class="btn btn-flat btn-success" id="btn_deta"><i class="fa fa-calendar"></i></a></span>'+
                                      '</li><li><span class="time-a">Jam Selesai Kerja : </span><span class="pull-right"></span> </li>'+
                                      '<li class="time-a">Total : </li></ul></div>');
              }else{
                $.each( data, function( key, value ) {
                var jm = new Date(value.det_absensi[0].jam_mulai);
                var js = new Date(value.det_absensi[0].jam_selesai);
         

                var hours = Math.floor(js - jm)  / 3600000;
                var h_fx = hours.toFixed(0);
                console.log(h_fx);

                
                

                if(value.det_absensi[0].jam_selesai == null){
                  h_fx = 0;
                  $('#bd-absen').append('<div class="box-body absen-k"><input type="hidden" id="id_absensi" name="id_absensi" value="'+value.id+'"><input type="hidden" id="id_det_absensi" name="id_det_absensi" value="'+value.det_absensi[0].id+'"><div class="row"><div class="col-md-12">'+
                                      '<div class=""><h2 class="date-absen label label-success"><i class="fa fa-clock-o"></i>'+value.tanggal_absensi+'</h2>'+
                                      '</div></div></div></div><div class="box-footer no-padding"><ul class="nav nav-pills nav-stacked nav-stacked-k">'+
                                      '<li><span class="time-a">Jam Mulai Kerja : '+value.det_absensi[0].jam_mulai+'</span><span class="pull-right"></span>'+
                                      '</li><li><span class="time-a">Jam Selesai Kerja : </span><span class="pull-right"><a onclick="checkjamselesaiab()" type="button" class="btn btn-flat btn-success" id="btn_deta"><i class="fa fa-calendar"></i></a></span> </li>'+
                                      '<li class="time-a">Total : '+h_fx+' Jam</li></ul></div>');
                }else{
                  $('#bd-absen').append('<div class="box-body absen-k"><input type="hidden" id="id_absensi" name="id_absensi" value="'+value.id+'"><input type="hidden" id="id_det_absensi" name="id_det_absensi" value="'+value.det_absensi[0].id+'"><div class="row"><div class="col-md-12">'+
                                      '<div class=""><h2 class="date-absen label label-success"><i class="fa fa-clock-o"></i>'+value.tanggal_absensi+'</h2>'+
                                      '</div></div></div></div><div class="box-footer no-padding"><ul class="nav nav-pills nav-stacked nav-stacked-k">'+
                                      '<li><span class="time-a">Jam Mulai Kerja : '+value.det_absensi[0].jam_mulai+'</span><span class="pull-right"></span>'+
                                      '</li><li><span class="time-a">Jam Selesai Kerja : '+value.det_absensi[0].jam_selesai+'</span></span> </li>'+
                                      '<li class="time-a">Total : '+h_fx+' Jam</li></ul></div>');
                }

                });

              }
            }
          },
          error : function(data){}
      });
    }

    function checkjammulaiab()
    {
      var id = $('#id_absensi').val();
      var idd = 0;
      var type = "mulai";
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      
      $.ajax({
          url:"{{ url('storedetabsensi') }}" + '/' + id + '/' + type + '/' + idd,
          type: "POST",
          dataType: "JSON",
          success : function(data){
            gettglAbsen();
            swal({
                      title: 'Success',
                      text: data.message,
                      type: 'success',
                      showConfirmButton: false,
                      timer: '1000'
                  }).catch(swal.noop);
          },
          error : function(data){}
      })
    }

    function checkjamselesaiab()
    {
      var id = $('#id_absensi').val();
      var idd = $('#id_det_absensi').val();
      var type = "selesai";
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      
      $.ajax({
          url:"{{ url('storedetabsensi') }}" + '/' + id + '/' + type + '/' + idd,
          type: "POST",
          dataType: "JSON",
          success : function(data){
            gettglAbsen();
            swal({
                      title: 'Success',
                      text: data.message,
                      type: 'success',
                      showConfirmButton: false,
                      timer: '1000'
                  }).catch(swal.noop);
          },
          error : function(data){}
      })
    }
</script>

@endsection