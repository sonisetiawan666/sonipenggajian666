@extends('_layouts.base')

@section('title', 'Pengganjian - Sistem')

@section('content')
<section class="content">
      <div id="noprint" class="row">
        <div class="col-xs-12">
          <div class="box">      
            <div class="box-header">
              <h3 class="box-title">Detail Gaji</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Gaji Pokok</h3>
                            </div>  
                            <div class="box-body">
                                @foreach ($data_gaji as $gajipk)
                                    <h2>Rp {{ number_format($gajipk->user->karyawan->gaji, 3,".",".") }}</h2>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                            <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Fee Event</h3>
                                    </div>  
                                    <div class="box-body" id="bd-feeev">
                                        
                                               
                                    </div>
                                </div>
                    </div>
                    
                </div>

                <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Tambah Detail Gaji</h3>
                        </div>  
                        <div class="box-body">
                                <div class="bd-frm-gj">
                                        <form id="frm-det-gaji" method="POST" action="">
                                            {{ csrf_field() }} {{ method_field('POST') }}
                                            <input type="hidden" id="id_gaji" name="id_gaji" value="{{ Request::route('id') }}">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Daftar Gaji</label>
                                                    <input type="text" name="daftar_gaji" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Deskripsi</label>
                                                    <textarea style="height: 34px;" class="form-control" name="deskripsi_gaji"/></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Jumlah</label>
                                                    <input class="form-control" name="jumlah" type="number" />
                                                </div>
                                            </div>
                                            <div class="col-md-1 btn-sb-kr">
                                                <a onclick="generatedetGaji()" type="button" class="btn btn-primary">Tambah</a>
                                            </div>
                                        
                                        </form>
                                    </div>
                        </div>
                    </div>
  
            </div>
          </div>
        </div>
      </div>

    <div class="invoice inc-gaji">
    @foreach ($data_gaji as $gaji)
        <div class="row">
            <div class="col-xs-4">
                <h2 class="page-header">CV. Nura Bali Creative<br>
                <small>Jl. Trenggana No.161, Penatih, Denpasar Tim., 
                    Kota Denpasar, Bali 80238
                </small>
                <small>Telp : 0812-3746-4080</small>
                </h2>
            </div>
            <div class="col-xs-4">
                <h1 class="slp-t">SLIP GAJI</h1>
            </div>
            <div class="col-xs-4">
                <small class="pull-right">Tanggal: {{$gaji->created_at->format('Y/m/d')}}</small>
            </div>
        </div>

        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                
                    <table id="tb-detkar-gaji">
                        <tr>
                            <td class="th-dt">Nama</td>
                            <td class="tb-dt">:</td>
                            <td>{{$gaji->user->karyawan->nama_karyawan}}</td>
                        </tr>
                        <tr>
                            <td class="th-dt">Jabatan</td>
                            <td class="tb-dt">:</td>
                            <td>{{$gaji->user->karyawan->jabatan->jabatan}}</td>
                        </tr>
                        <tr>
                            <td class="th-dt">Telepon</td>
                            <td class="tb-dt">:</td>
                            <td>{{$gaji->user->karyawan->no_telepon}}</td>
                        </tr>
                        <tr>
                            <td class="th-dt">Alamat</td>
                            <td class="tb-dt">:</td>
                            <td>{{$gaji->user->karyawan->alamat}}</td>
                        </tr>
                    </table>      
            </div>


            <div class="col-sm-4 invoice-col">
                <table id="tb-prd-gji">
                    <tr>
                        <td class="th-dt">Periode Awal</td>
                        <td class="tb-dt">:</td>
                        <td>{{$gaji->periode_awal}}</td>
                    </tr>
                    <tr>
                        <td class="th-dt">Periode Akhir</td>
                        <td class="tb-dt">:</td>
                        <td>{{$gaji->periode_akhir}}</td>
                    </tr>
                </table>
            </div>
        </div>
        @endforeach

        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Keterangan</th>
                    <th>Detail</th>
                    <th>Subtotal</th>
                </tr>
                </thead>
                <tbody id="bd-det-gaji">

                </tbody>
                <tr id="bd-tl-gaji">

                </tr>
                </table>
            </div>
        </div>
            
        <div class="row no-print">
        <div class="col-xs-12">
            <a href="javascript:window.print()" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
        </div>
        </div>
    </div>
</section>


@endsection

@section('script')
<script>

function generatedetGaji()
  {
      $.ajax({
          url : "{{ url('detgajistore') }}",
          type : "POST",
          data: new FormData($("#frm-det-gaji")[0]),
          contentType: false,
          processData: false,
          success : function(data) {
            getdetGaji();
            $('#frm-det-gaji')[0].reset();
              swal({
                      title: 'Success',
                      text: data.message,
                      type: 'success',
                      showConfirmButton: false,
                      timer: '1000'
                  }).catch(swal.noop);
          },
          error : function(data){

          }
      });
  }


    $( document ).ready(function() {
        getdetGaji();
        getfeeeventGaji();
    });

  function getdetGaji()
  {
    var id = $('#frm-det-gaji #id_gaji').val();
    $.ajax({
      url : "{{ url('det-gaji') }}" + '/' + id,
      type : "GET",
      dataType: "JSON",
      success : function(data) {

        $('#bd-det-gaji tr').remove();
        $.each( data, function( key, value ) {
            var no = key+1;
            var jumlahug = 'Rp ' + (value.jumlah/1000).toFixed(3).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
            $('#bd-det-gaji').append('<tr><td>'+no+'</td><td>'+value.daftar_gaji+'</td><td>'+value.deskripsi_gaji+'</td><td>'+jumlahug+'</td></tr>');
        });
        gettotalGaji();
      },
      error : function(data){}
    });
  }

  function gettotalGaji()
  {
      var id = $('#frm-det-gaji #id_gaji').val();
      $.ajax({
          url:"{{ url('total_gaji') }}"+ '/' + id,
          type: "GET",
          dataType: "JSON",
          success : function(data){
              console.log(data);
            $('#bd-tl-gaji th').remove();
            var totalug = 'Rp ' + (data/1000).toFixed(3).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
            $('#bd-tl-gaji').append('<th></th><th></th><th>TOTAL</th><th>'+totalug+'</th>');
          },
          error : function(data){}
      });
  }

  function getfeeeventGaji()
  {
      $.ajax({
          url:"{{ url('feegajidet') }}",
          type: "GET",
          dataType: "JSON",
          success : function(data){
              console.log(data);
              var total = 0
              $.each( data, function( index, value ) {
               var view= '<ul><li>'+value.id+'</li>';
                total += value.fee_per_hari;
                $.each(value.det_absen_event, function(key,val) {
                    console.log(total);
                    view+='<li>'+val.fee_per_hari+'</li>'
                });
                $('#bd-feeev').append(view);
        });
        
          },
          error : function(data){}
      });
  }


</script>

@endsection