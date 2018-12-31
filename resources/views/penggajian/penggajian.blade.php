@extends('_layouts.base')

@section('title', 'Pengganjian - Sistem')

@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">      
            <div class="box-header">
              <h3 class="box-title">Data Gaji</h3>
              {{-- <div style="float:right;">
                <a href="{{ URL::to('penggajian/create') }}" class="btn btn-primary" type="button">
                 Tambah
                </a>
              </div> --}}
            </div>
            <div class="box-body">
              <div class="bd-frm-gj">
                <form id="frm-gaji" method="POST" action="">
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nama Karyawan</label>
                            <select class="form-control" id="kry-gji" name="nm_karyawan">
                                <option value=""></option>
                                @foreach ($listuser as $user)
                                    <option value="{{$user->id}}">{{$user->karyawan->nama_karyawan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Periode Awal</label>
                
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" name="prd_awl" id="prd-awal">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Periode Akhir</label>
                
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" name="prd_akhr" id="prd-akhir">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 btn-sb-kr">
                        <a onclick="generateGaji()" type="button" class="btn btn-success">Generate</a>
                    </div>
                
                </form>
              </div>
            <table id="datagaji" class="table table-bordered table-striped">
                  <thead>
                    <tr style="border-color:blue;">
                      <th>Nama Karyawan</th>
                      <th>Periode Awal</th>
                      <th>Periode Akhir</th>
                      <th>Total Gaji</th>
                      <th style="width: 100px" class="actionth">Aksi</th>
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
 $('#dataevent').dataTable({});
 $('#prd-awal').datepicker({});
  $('#prd-akhir').datepicker({});

     var tableagaji = $('#datagaji').DataTable({
                      ordering  : false,  
                      processing: false,
                      serverSide: true,
                      ajax: "{{ route('gaji-data') }}",
                      columns: [
                        {data: 'nm_karyawan', name:'tgl_absensi'},
                        {data:'periode_awal', name:'periode-awl'},
                        {data:'periode_akhir', name:'periode-akr'},
                        {data:'total_gaji', name:'total_gaji'},
                        {data: 'action', class:'td-c action-align', name: 'action', orderable: false, searchable: false}
                      ]
                    });

  function generateGaji()
  {
      $.ajax({
      url : "{{ url('gajistore') }}",
      type : "POST",
      dataType: "JSON",
      data: new FormData($("#frm-gaji")[0]),
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
                tableagaji.ajax.reload();
        },
        error : function(data){

        }
      });
    
  }
</script>

@endsection