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
          <form action="{{ URL::to('pelanggan/' . $pelanggan->id) }}" method="POST" class="form-horizontal" name="masterForm" class="form-validation">
            {{ csrf_field() }}
            {{method_field('PUT')}}

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Pelanggan</label>
              <div class="col-sm-9">
                <input class="form-control" name="nama_pelanggan" type="text" value="{{$pelanggan->nama_pelanggan}}" required/>
              </div>
            </div>


        <div class="form-group">
                      <label class="col-sm-2 control-label">Perusahaan</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="perusahaan" type="text" value="{{$pelanggan->perusahaan}}" required/>
                      </div>
                    </div>

      <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-9">
                    <input class="form-control" name="alamat" type="text" value="{{$pelanggan->alamat}}" required/>
                  </div>
                </div>

      <div class="form-group">
                    <label class="col-sm-2 control-label">No Telepon</label>
                    <div class="col-sm-9">
                      <input class="form-control" name="no_telepon" type="number" value="{{$pelanggan->no_telepon}}" required/>
                    </div>
                  </div>

          <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
              <div class="col-sm-9">
                <input class="form-control" name="email" type="email" value="{{$pelanggan->email}}" required/>
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