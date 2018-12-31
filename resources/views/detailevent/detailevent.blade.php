@extends('_layouts.base')

@section('title', 'Dashboard - Sistem')

@section('content_title')
@endsection

@section('content')
<section style="background:white;">
    <div class="container-det-tab">
        <div class="board">
            <div class="board-inner tb-det">
                <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                    <li class="active">
                        <a href="#home" data-toggle="tab" title="welcome">
                            <span class="round-tabs one">
                                <i class="glyphicon glyphicon-home"></i>
                                <span>Detail Event</span>
                            </span> 
                        </a>
                    </li>

                    <li>
                        <a href="#profile" data-toggle="tab" title="profile">
                            <span class="round-tabs two">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Panitia Event</span>
                            </span> 
                        </a>
                    </li>

                    <li>
                        <a href="#profile2" data-toggle="tab" title="bootsnipp goodies">
                            <span class="round-tabs three">
                                <i class="glyphicon glyphicon-gift"></i>
                                <span>Absesnsi Event</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 det-des">
                            <h2>{{$eventdata->nama_event}}</h2>
                            <p>{{$eventdata->deskripsi}}</p>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 det-event">
                            <div class="search-list">
                                <h3>Detail Event</h3>
                                <table class="table" id="detevent_tab">
                                    <tbody>
                                    <tr>
                                        <td>Tanggal Mulai</td>
                                        <td class="td-r">{{$eventdata->tanggal_mulai}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Selesai</td>
                                        <td class="td-r">{{$eventdata->tanggal_selesai}}</td>
                                    </tr>
                                    <tr>
                                        <td>ALamat Event</td>
                                        <td class="td-r">{{$eventdata->tempat_event}}</td>
                                    </tr>
                                    <tr>
                                        <td>Pelanggan</td>
                                        <td class="td-r">{{$eventdata->pelanggan->nama_pelanggan}}</td>
                                    </tr>
                                    <tr>
                                        <td>Perusahaan</td>
                                        <td class="td-r">{{$eventdata->pelanggan->perusahaan}}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td class="td-r">{{$eventdata->pelanggan->alamat}}</td>
                                    </tr>
                                    <tr>
                                        <td>No Telepon</td>
                                        <td class="td-r">{{$eventdata->pelanggan->no_telepon}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td class="td-r">{{$eventdata->pelanggan->email}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h2>Panitia Event</h2>
                                    <div class="panel-body">
                                            <a onclick="addFormPanitia()" type="button" class="btn btn-info">
                                                Tambah
                                            </a>
                                            <div class="table-container">
                                                <table id="panitiadata" class="table-users table">
                                                    <thead class="hd-tb">
                                                        <tr>
                                                            <th>Nama</th>
                                                            <th>Jabatan</th>
                                                            <th width="100px">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                      
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                
                <div class="tab-pane fade" id="profile2">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h2>Absensi Event</h2>
                            <div class="panel-body">
                            <form id="frm-absen" method="POST" action="">
                                {{ csrf_field() }} {{ method_field('POST') }}
                                <div class="bd-absen">
                                    <label class="col-sm-2 control-label">Absen Event</label>
                                    <div class="col-sm-5">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" id="absen_event" name="absen_event" class="form-control pull-right" required>
                                        </div>
                                        <span id="req_dateab" class="help-block red-error"></span>
                                    </div>
                                        <div class="col-sm-4">
                                                <input type="hidden" id="id_event_a" name="id_event" value="{{ Request::route('id_event') }}">
                                            <a onclick="getDataAbsensi()" type="button" class="btn btn-flat btn-success"><i class="fa fa-calendar"></i></a> 
                                        </div>
                                    </form>
                                </div>

                                <div class="table-container">
                                    <table id="absensidata" class="table-users table">
                                        <thead class="hd-tb">
                                            <tr>
                                                <th>Tanggal Absensi</th>
                                                <th>Status</th>
                                                <th width="100px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
        <div class="modal tm-m" id="modal-addpanitia" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog proyek-md">
                <div class="modal-content">
                    <form id="form-contact" class="form-horizontal" method="POST" action="" data-toggle="validator" enctype="multipart/form-data" autocomplete="off">
                        {{ csrf_field() }} {{ method_field('POST') }}
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Tambah Panitia</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="id" name="id">
                            <input type="hidden" id="id_event" name="id_event" value="{{ Request::route('id_event') }}">
                        <div class="table-container">
                                <table class="table-users table">
                                    <tbody id="addpanilist" class="pani-list">
                                        
                                    </tbody>
                                </table>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


            <div class="modal" id="modal-addpanitiaab" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog proyek-md">
                    <div class="modal-content">
                        <form id="form-absensi" class="form-horizontal" method="POST" action="" data-toggle="validator" enctype="multipart/form-data" autocomplete="off">
                            {{ csrf_field() }} {{ method_field('POST') }}
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Absen Panitia</h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="id" name="id">
                                <input type="hidden" id="id_event" name="id_event" value="{{ Request::route('id_event') }}">
                            <div class="table-container">
                                    <table class="table-users table">
                                        <tbody id="addpanilistab" class="pani-list">
                                            
                                        </tbody>
                                    </table>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal" id="modal-viewpanitiaab" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog mdl-vw-pn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">View Absensi Panitia</h4>
                    </div>
                    <div class="modal-content mdl-vm-pn-bd">
                        <table id="detabsensipani" class="table-users table">
                            <thead class="hd-tb">
                                <tr>
                                    <th>Nama Panitia</th>
                                    <th>Jabatan</th>
                                    <th width="100px">Status</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</section>






@endsection

@section('script')
<script>

function addFormPanitia(){
    $.ajax({
        url: "{{route('user-list')}}",
        type: "json",
        method: "get",
    }).done(function(data) {
        save_method = "add";
        
        $('input[name=_method]').val('POST');
        $('#modal-addpanitia').modal('show');
        $('#modal-addpanitia form')[0].reset();
        $('.modal-title').text('Add Team');
        $("#addpanilist").empty();

        $.each( data, function( key, value ) {
            $('#addpanilist').append(
                                    '<tr><td>'+value.name+'<br></td><td>'+value.karyawan.jabatan.jabatan+'</td>'+
                                    '<td align="center"><input type="checkbox" id="checkuser" value="'+value.id+'" name="userp[]"></td></tr>')
        });
    });
}

 var tablepanitia = $('#panitiadata').DataTable({
                      ordering  : false,  
                      processing: false,
                      retrieve: true,
                      serverSide: true,
                      ajax: "{{ route('panitia-list') }}",
                      columns: [
                        {data: 'panitia-nama', name:'nama_panitia'},
                        {data:'panitia-jabatan', nme:'jabatan_panitia'},
                        {data: 'action', class:'td-c action-align', name: 'action', orderable: false, searchable: false}
                      ]
                    });

$(function(){
    $('#modal-addpanitia form').on('submit', function (e) {
      if (!e.isDefaultPrevented()){
        $.ajax({
          url : "{{ url('panitiastore') }}",
          type : "POST",
          data: new FormData($("#modal-addpanitia form")[0]),
          contentType: false,
          processData: false,
          success : function(data) {
            $('#modal-addpanitia').modal('hide');

            tablepanitia.ajax.reload();
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
        return false;
      }
    });
  });

  function deletePanitia(id){
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    swal({
          title:'Are you sure remove this team',
          type: 'warning',
          showCancelButton: true,
          cancelButtonColor:'#d33',
          confirmButtonColor:'#3085d6',
          confirmButtonText:'Yes'
        }).then(function(){
            $.ajax({
              url : "{{ url('panitia') }}" + '/' + id,
              type : "POST",
              data : {'_method' : 'DELETE', '_token' : csrf_token},
              success : function(data) {
                swal({
                      title: 'Success',
                      text: data.message,
                      type: 'success',
                      showConfirmButton: false,
                      timer: '1000'
                    }).catch(swal.noop);
                    tablepanitia.ajax.reload();
              },
              error : function () {
              }
            });
          });
  }

  $(document).ready(function(){
    absendate();
  });

  function absendate()
  {
    $.ajax({
      url : "{{ url('date-event') }}",
      type : "GET",
      dataType: "JSON",
      success : function(data) {
        $("#absen_event").datepicker({
          format: "d-MM-yyyy",
          showOn: "button",
          forceParse: false,
          startDate: new Date(data.tanggal_mulai),
          endDate: new Date(data.tanggal_selesai),
          autoclose: true,
        }).attr('readonly', 'readonly').on('changeDate', function (selected) {
            var minDate = new Date(selected.date.valueOf());
            $('#end_date').datepicker('setStartDate', minDate);
        }); 
  
      },
      error : function(data){}
    });
  }


   var tableabsensi = $('#absensidata').DataTable({
                      ordering  : false,  
                      processing: false,
                      retrieve: true,
                      serverSide: true,
                      ajax: "{{ route('absensi-data') }}",
                      columns: [
                        {data: 'tanggal_absensi', name:'tglabsensi'},
                        {data:'status', name:'stsabsensi'},
                        {data: 'action', class:'td-c action-align', name: 'action', orderable: false, searchable: false}
                      ]
                    });

    
    function getDataAbsensi()
    {
    var tgl_absen = $('#absen_event').val();
    var id_event = $('#id_event_a').val();

        if(tgl_absen.SelectedDate !== null){
            $.ajax({
            url : "{{ url('absenstore') }}",
            type : "POST",
            dataType: "JSON",
            data: new FormData($("#frm-absen")[0]),
            contentType: false,
            processData: false,
                success : function(data) {
                    swal({
                            title: 'Success',
                            text: data.message,
                            type: 'success',
                            showConfirmButton: false,
                            timer: '1000'
                        }).catch(swal.noop);
                    tableabsensi.ajax.reload();
                },
                error : function(data){

                }
            });
        }else if(tgl_absen.SelectedDate == null){
            $('#req_dateab').text('Tanggal Wajib Diisi');
        }
    }

    function addFormPanitiaAb(){
        $.ajax({
            url: "{{route('panitia-absen')}}",
            type: "json",
            method: "get",
        }).done(function(data) {
            save_method = "add";
            
            $('input[name=_method]').val('POST');
            $('#modal-addpanitiaab').modal('show');
            $('#modal-addpanitiaab form')[0].reset();
            $('.modal-title').text('Absensi Panitia');
            $("#addpanilistab").empty();

            $.each( data, function( key, value ) {
                $('#addpanilistab').append(
                                        '<tr><td>'+value.user.name+'<br></td><td>'+value.user.karyawan.jabatan.jabatan+'</td>'+
                                        '<td align="center"><input type="checkbox" id="checkabsen" value="'+value.id+'" name="panitia[]"></td></tr>')
            });
        });
    }


$(function(){
    $('#modal-addpanitiaab form').on('submit', function (e) {
        var id = $('#btn_deta').attr('idab');
        console.log(id);
        if (!e.isDefaultPrevented()){
            $.ajax({
            url : "{{ url('detabsenstore') }}" + '/' + id,
            type : "POST",
            data: new FormData($("#modal-addpanitiaab form")[0]),
            contentType: false,
            processData: false,
            success : function(data) {
                $('#modal-addpanitiaab').modal('hide');
                swal({
                    title: 'Success',
                    text: data.message,
                    type: 'success',
                    showConfirmButton: false,
                    timer: '1000'
                    }).catch(swal.noop);
                    tableabsensi.ajax.reload();
            },
            error : function(data){
                
            }
            });
            return false;
        }
        });
  });

  function viewdetAbsensiPanitia(id)
  {
    $('#modal-viewpanitiaab').modal('show');
    var dettableabsensi = $('#detabsensipani').DataTable({
                      ordering  : false,  
                      processing: false,
                      retrieve: true,
                      "bInfo" : false,
                      serverSide: true,
                      ajax: "{{ url('det-panitiaabsen') }}" + '/' + id,
                      columns: [
                        {data: 'nama_panitia', name:'nama_panitia'},
                        {data:'jbt_panitia', name:'jbt_panitia'},
                        {data:'sts_abs', name:'sts_abs', class:'sts_abs'}
                      ],
                      "rowCallback": function( row, data ) {
                          if ( data.det_absen_event != 0 ) {
                            $('.sts_abs', row).text('').append('<span class="label label-success">Hadir</span>');
                          }else{
                            $('.sts_abs', row).text('').append('<span class="label label-success">Tidak Hadir</span>');
                          }
                        }
                    });
  }


</script>
@endsection