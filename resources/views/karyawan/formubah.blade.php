 @extends('_layouts.base')

@section('title', 'Karyawan-Sistem')


@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">
            Ubah Karyawan
        </div>

        <div class="panel-body">
          <form action="{{ URL::to('karyawan/' . $karyawan->id) }}"" method="POST" autocomplete="off" class="form-horizontal" name="masterForm" enctype="multipart/form-data" 
          class="form-validation">
            {{ csrf_field() }}
            {{method_field('PUT')}}

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Karyawan</label>
              <div class="col-sm-9">
                <input class="form-control" name="nama_karyawan" type="text" value="{{$karyawan->nama_karyawan}}"/>
              @if ($errors->has('nama_karyawan'))        
                  <span class="label label-danger">{{ $errors->first('nama_karyawan') }}</span> 
              @endif
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Jabatan </label>
              <div class="col-sm-9">
                 <select class="form-control" name="nm_jabatan">
                 <option value=""></option>
                  @foreach ($list_jabatan as $jabatan)
                    <option value="{{$jabatan->id}}"
                      @if($jabatan->id == $karyawan->id_jabatan)
                        selected
                      @endif
                      >{{$jabatan->jabatan}}</option>
                  @endforeach
                </select>
                @if ($errors->has('nm_jabatan'))        
                  <span class="label label-danger">{{ $errors->first('nm_jabatan') }}</span> 
                @endif
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Kelamin</label>
              <div class="col-sm-9">
                 <select class="form-control" name="jen_kel">
                  <option value=""></option>
                  <option value="laki-laki"
                  @if($karyawan->jenis_kelamin === 'laki-laki')
                    selected
                  @endif
                  >Laki - Laki</option>
                  <option value="perempuan"
                  @if($karyawan->jenis_kelamin === 'perempuan')
                    selected
                  @endif
                  >Perempuan</option>
                </select>
                @if ($errors->has('jen_kel'))        
                  <span class="label label-danger">{{ $errors->first('jen_kel') }}</span> 
                @endif
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tempat Lahir </label>
              <div class="col-sm-9">
                 <input class="form-control" name="tempatlahir" type="text" value="{{$karyawan->tempat_lahir}}"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Lahir </label>
              <div class="col-sm-9">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" id="tgl_lahir" name="tgl_lahir" value="{{$karyawan->tanggal_lahir}}" class="tanggal lahir form-control pull-right">
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-9">
                <input class="form-control"  name="alamat" value="{{$karyawan->alamat}}" type="text"/>
              @if ($errors->has('alamat'))        
                  <span class="label label-danger">{{ $errors->first('alamat') }}</span> 
                @endif
                </div>
            </div>  
            
            <div class="form-group">
              <label class="col-sm-2 control-label">No Telepon </label>
              <div class="col-sm-9">
                <input class="form-control"  name="no_telp" value="{{$karyawan->no_telepon}}" type="number"/>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">No Rekening </label>
              <div class="col-sm-9">
                <input class="form-control" name="no_rek" value="{{$karyawan->no_rekening}}" type="number"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Gaji Pokok </label>
              <div class="col-sm-9">
                <input class="form-control" name="gaji" value="{{$karyawan->gaji}}" type="number" />
                @if ($errors->has('gaji'))        
                  <span class="label label-danger">{{ $errors->first('gaji') }}</span> 
                @endif
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Foto </label>
              <div class="col-sm-9">
                <input class="form-control" id="photo" name="photo" type="file"/>
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-success" type="button">Simpan</button>
                <a href="{{ URL::to('/karyawan')}}" class="btn btn-warning" type="button">Batal</a>
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
 $('#tgl_lahir').datepicker({});
</script>

@endsection