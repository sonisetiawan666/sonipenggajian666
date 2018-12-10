@extends('_layouts.base')

@section('title', 'Event-Sistem')


@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-heading">
            Ubah Event
        </div>

        <div class="panel-body">
          <form action="{{ URL::to('event/' . $event->id) }}" method="POST" class="form-horizontal" name="masterForm" 
          class="form-validation">
            {{ csrf_field() }}
            {{method_field('PUT')}}

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Event</label>
              <div class="col-sm-9">
                <input class="form-control" name="nama_event" type="text" value="{{$event->nama_event}}" required/>
              </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Kategori </label>
                <div class="col-sm-9">
                   <select class="form-control" name="nm_kategori">
                   <option value=""></option>
                    @foreach ($list_kategori as $kategori)
                      <option value="{{$kategori->id}}"
                        @if($kategori->id == $event->id_kategori)
                          selected
                        @endif
                        >{{$kategori->kategori}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tempat Event</label>
              <div class="col-sm-9">
                <input class="form-control" name="tempat_event" type="text" value="{{$event->tempat_event}}" required/>
              </div>
            </div>

              <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Mulai </label>
              <div class="col-sm-9">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" id="tanggal_mulai" name="tanggal_mulai" value="{{$event->tanggal_mulai}}" 
                  class="tanggal_mulai form-control pull-right">
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
                  <input type="text" id="tanggal_selesai" name="tanggal_selesai" value="{{$event->tanggal_selesai}}" 
                  class="tanggal_selesai form-control pull-right">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Fee Per Hari</label>
              <div class="col-sm-9">
                <input class="form-control" name="fee_per_hari" type="number" value="{{$event->fee_per_hari}}" required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Deskripsi</label>
              <div class="col-sm-9">
                <textarea class="form-control" name="deskripsi" required/>{{$event->deskripsi}}</textarea>
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