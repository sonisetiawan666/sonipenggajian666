@extends('_layouts.base')

@section('title', 'kategori - Sistem')

@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">

          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
            </div>
          @endif

          <div class="box">      
            <div class="box-header">
              <h3 class="box-title">Data Kategori</h3>
              <div style="float:right;">
                <a href="{{ URL::to('kategori/create') }}" class="btn btn-primary" type="button">
                 Tambah
                </a>
              </div>
            </div>
            <div class="box-body">
            <table id="datakategori" class="table table-bordered table-striped">
                  <thead>
                    <tr style="border-color:blue;">
                      <th style="width: 100px" class="actionth">Aksi</th>
                      <th>Kategori</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($list_kategori as $kategori)
                        <tr class="karyawan-list">
                            <td class="action">
                              <div class="btn-group btn-ac">
                                <a href="{{ URL::to('kategori/' . $kategori->id . '/edit') }}"  class="btn btn-flat btn-warning" type="button"><i class="fa fa-pencil"></i></a>
                                <a href="#" type="button" onclick="Deletedata({{$kategori->id}})" data-toggle="modal" data-target="#hapuskategori" 
                                class="btn btn-flat btn-danger"><i class="fa fa-times"></i></a> 
                              </div>
                            </td>
                            <td>{{$kategori->kategori}}</td>
                          </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>

        <div class="modal fade" id="hapuskategori">
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
                      @if(!empty($kategori))
                        <form action="{{URL('kategori/'. $kategori->id) }}" id="deleteac" method="POST">
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
 $('#datakategori').dataTable({});

 function Deletedata(id){
   var url = '{{URL('kategori') }}' + '/' + id
   $("#deleteac").attr("action", url);
  }
</script>

@endsection