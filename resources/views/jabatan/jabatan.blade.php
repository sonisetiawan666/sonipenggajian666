@extends('_layouts.base')

@section('title', 'Jabatan - Sistem')

@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">      
            <div class="box-header">
              <h3 class="box-title">Data Jabatan</h3>
              <div style="float:right;">
                <a href="{{ URL::to('jabatan/create') }}" class="btn btn-primary" type="button">
                 Tambah
                </a>
              </div>
            </div>
            <div class="box-body">
            <table id="datajabatan" class="table table-bordered table-striped">
                  <thead>
                    <tr style="border-color:blue;">
                      <th style="width: 100px" class="actionth">Aksi</th>
                      <th>Jabatan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($list_jabatan as $jabatan)
                        <tr class="karyawan-list">
                            <td class="action">
                              <div class="btn-group btn-ac">
                                <a href="{{ URL::to('jabatan/' . $jabatan->id . '/edit') }}"  class="btn btn-flat btn-warning" type="button"><i class="fa fa-pencil"></i></a>
                                <a href="#" type="button" onclick="Deletedata({{$jabatan->id}})" data-toggle="modal" data-target="#hapusjabatan" 
                                class="btn btn-flat btn-danger"><i class="fa fa-times"></i></a> 
                              </div>
                            </td>
                            <td>{{$jabatan->jabatan}}</td>
                          </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>

        <div class="modal fade" id="hapusjabatan">
            <div class="modal-dialog md-l">
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
                    @if(!empty($jabatan))
                    <form action="{{URL('jabatan/'. $jabatan->id) }}" id="deleteac" method="POST">
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
 $('#datajabatan').dataTable({});

 function Deletedata(id){
   var url = '{{URL('jabatan') }}' + '/' + id
   $("#deleteac").attr("action", url);
 }

</script>

@endsection