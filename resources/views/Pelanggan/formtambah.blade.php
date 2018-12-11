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
                <input class="form-control" name="nama_pelanggan" type="text" required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Perusahaan </label>
              <div class="col-sm-9">
                <input class="form-control" name="perusahaan"  type="text" required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-9">
                <input class="form-control"  name="alamat" type="text" required />
              </div>
            </div>  
            
            <div class="form-group">
              <label class="col-sm-2 control-label">No Telepon </label>
              <div class="col-sm-9">
                <input class="form-control"  name="no_telepon" type="number" required/>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Email </label>
              <div class="col-sm-9">
                <input class="form-control" name="email" type="email" required/>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-success" type="button">Save</button>
                <a href="{{ URL::to('/pelanggan')}}" class="btn btn-warning" type="button">Cancel</a>
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
