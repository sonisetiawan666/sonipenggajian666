@extends('_layouts.base')

@section('title', 'Karyawan - Sistem')

@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">      
            <div class="box-header">
              <h3 class="box-title">Data Karyawan</h3>
              <div style="float:right;">
                <a href="{{ URL::to('karyawan/create') }}" class="btn btn-primary" type="button">
                 Tambah
                </a>
              </div>
            </div>
            <div class="box-body">
            <table id="datakaryawan" class="table table-bordered table-striped">
                  <thead>
                    <tr style="border-color:blue;">
                      <th style="width: 100px" class="actionth">Aksi</th>
                      <th>Nama</th>
                      <th>Jabatan</th>
                       <th>Alamat</th>
                      <th>No.Telp</th>
                      <th>No.Rekening</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($list_karyawan as $karyawan)
                        <tr class="karyawan-list">
                            <td class="action">
                              <div class="btn-group btn-ac">
                                <a href="{{ URL::to('karyawan/' . $karyawan->id . '/edit') }}" class="btn btn-flat btn-warning" type="button"><i class="fa fa-pencil"></i></a>
                                <a href="#" type="button" onclick="Deletedata({{$karyawan->id}})" data-toggle="modal" data-target="#hapuskaryawan" class="btn btn-flat btn-danger"><i class="fa fa-times"></i></a> 
                              </div>
                            </td>
                            <td>{{$karyawan->nama_karyawan}}</td>
                            <td>{{$karyawan->jabatan->jabatan}}</td>
                             <td>{{$karyawan->alamat}}</td>
                            <td>{{$karyawan->no_telepon}}</td>
                            <td>{{$karyawan->no_rekening}}</td>
                           
                          </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>

        <div class="modal fade" id="hapuskaryawan">
            <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-body">
                      <div class="icon-warning">
                          <i class="icon fa fa-warning"></i>
                      </div>
                      <div class="error-text">
                          <h2>Yakin Hapus Data</h2>
                      </div>
                  </div>
                      
                <div class="modal-footer modal-footer-center">
                  <div class="btn-group btn-ac-d">
                    @if(!empty($karyawan))
                    <form id="deleteac" action="" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <a href=""><button type="submit" class="btn btn-flat btn-danger">Yakin</i></button></a>
                    </form>
                    @endif
                    <button type="submit" class="btn btn-primary btn-save" data-dismiss="modal">Batal</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>
</section>

@endsection

@section('script')
<script>
 $('#datakaryawan').dataTable({});

 function Deletedata(id){
   var url = '{{URL('karyawan') }}' + '/' + id
   $("#deleteac").attr("action", url);
 }
</script>

@endsection