@extends('_layouts.base')

@section('title', 'Pelanggan-Sistem')


@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">
            Tambah Pelanggan
        </div>

        <div class="panel-body">
          <form action="{{ URL::to('/pelanggan')}}" method="POST" autocomplete="off" class="form-horizontal" name="masterForm" enctype="multipart/form-data" 
          class="form-validation">
            {{ csrf_field() }}

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Pelanggan </label>
              <div class="col-sm-9">
                <input class="form-control" name="nama_pelanggan" type="text"/>
                @if ($errors->has('nama_pelanggan'))        
                  <span class="label label-danger">{{ $errors->first('nama_pelanggan') }}</span> 
                @endif
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Perusahaan </label>
              <div class="col-sm-9">
                <input class="form-control" name="perusahaan"  type="text"/>
                @if ($errors->has('perusahaan'))        
                  <span class="label label-danger">{{ $errors->first('perusahaan') }}</span> 
                @endif
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-9">
                <input class="form-control"  name="alamat" type="text"/>
                @if ($errors->has('alamat'))        
                  <span class="label label-danger">{{ $errors->first('alamat') }}</span> 
                @endif
              </div>
            </div>  
            
            <div class="form-group">
              <label class="col-sm-2 control-label">No Telepon </label>
              <div class="col-sm-9">
                <input class="form-control"  name="no_telepon" type="number"/>
                @if ($errors->has('no_telepon'))        
                  <span class="label label-danger">{{ $errors->first('no_telepon') }}</span> 
                @endif
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Email </label>
              <div class="col-sm-9">
                <input class="form-control" name="email" type="email"/>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-success" type="button">Simpan</button>
                <a href="{{ URL::to('/pelanggan')}}" class="btn btn-warning" type="button">Batal</a>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>  
</div>
</section>

@endsection
