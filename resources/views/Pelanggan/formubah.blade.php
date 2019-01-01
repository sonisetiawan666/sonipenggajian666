@extends('_layouts.base')

@section('title', 'Pelanggan')


@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-heading">
            Ubah Pelanggan
        </div>

        <div class="panel-body">
          <form action="{{ URL::to('pelanggan/' . $pelanggan->id) }}" method="POST" autocomplete="off" class="form-horizontal" name="masterForm" class="form-validation">
            {{ csrf_field() }}
            {{method_field('PUT')}}

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Pelanggan</label>
              <div class="col-sm-9">
                <input class="form-control" name="nama_pelanggan" type="text" value="{{$pelanggan->nama_pelanggan}}"/>
                @if ($errors->has('nama_pelanggan'))        
                  <span class="label label-danger">{{ $errors->first('nama_pelanggan') }}</span> 
                @endif
              </div>
            </div>


        <div class="form-group">
                      <label class="col-sm-2 control-label">Perusahaan</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="perusahaan" type="text" value="{{$pelanggan->perusahaan}}"/>
                        @if ($errors->has('perusahaan'))        
                          <span class="label label-danger">{{ $errors->first('perusahaan') }}</span> 
                        @endif
                      </div>
                    </div>

      <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-9">
                    <input class="form-control" name="alamat" type="text" value="{{$pelanggan->alamat}}"/>
                    @if ($errors->has('alamat'))        
                      <span class="label label-danger">{{ $errors->first('alamat') }}</span> 
                    @endif
                  </div>
                </div>

      <div class="form-group">
                    <label class="col-sm-2 control-label">No Telepon</label>
                    <div class="col-sm-9">
                      <input class="form-control" name="no_telepon" type="number" value="{{$pelanggan->no_telepon}}"/>
                      @if ($errors->has('no_telepon'))        
                        <span class="label label-danger">{{ $errors->first('no_telepon') }}</span> 
                      @endif
                    </div>
                  </div>

          <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
              <div class="col-sm-9">
                <input class="form-control" name="email" type="email" value="{{$pelanggan->email}}"/>
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