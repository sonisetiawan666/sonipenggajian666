@extends('_layouts.base')

@section('title', 'Event-Sistem')


@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-heading">
            Tambah Event
        </div>

        <div class="panel-body">
          <form action="{{ URL::to('/event')}}" method="POST" autocomplete="off" class="form-horizontal" name="masterForm" 
          class="form-validation">
            {{ csrf_field() }}

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Event</label>
              <div class="col-sm-9">
                <input class="form-control" name="nama_event" type="text"/>
                @if ($errors->has('nama_event'))        
                  <span class="label label-danger">{{ $errors->first('nama_event') }}</span> 
                @endif
              </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Kategori </label>
                <div class="col-sm-9">
                  <select class="form-control" name="nm_kategori">
                    <option value=""></option>
                    @foreach ($list_kategori as $kategori)
                      <option value="{{$kategori->id}}">{{$kategori->kategori}}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('nm_kategori'))        
                      <span class="label label-danger">{{ $errors->first('nm_kategori') }}</span> 
                  @endif
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Pelanggan </label>
                <div class="col-sm-9">
                  <select class="form-control" name="nm_pelanggan">
                    <option value=""></option>
                    @foreach ($list_pelanggan as $pelanggan)
                      <option value="{{$pelanggan->id}}">{{$pelanggan->nama_pelanggan}}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('nm_pelanggan'))        
                      <span class="label label-danger">{{ $errors->first('nm_pelanggan') }}</span> 
                  @endif
                </div>
              </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tempat Event</label>
              <div class="col-sm-9">
                <input class="form-control" name="tempat_event" type="text"/>
                @if ($errors->has('tempat_event'))        
                     <span class="label label-danger">{{ $errors->first('tempat_event') }}</span> 
                @endif
              </div>
            </div>

             <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Mulai </label>
              <div class="col-sm-9">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" id="tanggal_mulai" name="tanggal_mulai" class="tanggal_mulai form-control pull-right">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Selesai </label>
              <div class="col-sm-9">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" id="tanggal_selesai" name="tanggal_selesai" class="tanggal_selesai form-control pull-right">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Fee Per Hari</label>
              <div class="col-sm-9">
                <input class="form-control" name="fee_per_hari" type="number"/>
                @if ($errors->has('fee_per_hari'))        
                      <span class="label label-danger">{{ $errors->first('fee_per_hari') }}</span> 
                  @endif
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Deskripsi</label>
              <div class="col-sm-9">
                <textarea class="form-control" name="deskripsi"/></textarea>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-success" type="button">Simpan</button>
                <a href="{{ URL::to('/event')}}" class="btn btn-warning" type="button">Batal</a>
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
@section('script')
<script>
$('#tanggal_mulai').datepicker({});
$('#tanggal_selesai').datepicker({});

</script>
@endsection
~