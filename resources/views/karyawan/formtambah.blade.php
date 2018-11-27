 @extends('_layouts.base')

@section('title', 'Karyawan-Sistem')


@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">
            Tambah Karyawan
        </div>

        <div class="panel-body">
          <form action="{{ URL::to('/karyawan')}}" method="POST" class="form-horizontal" name="masterForm" enctype="multipart/form-data" 
          class="form-validation">
            {{ csrf_field() }}

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Karyawan </label>
              <div class="col-sm-9">
                <input class="form-control" name="nama_karyawan" type="text" required/>
              </div>
            </div>

             <div class="form-group">
              <label class="col-sm-2 control-label">Jabatan </label>
              <div class="col-sm-9">
                <select class="form-control" name="nm_jabatan">
                  <option value=""></option>
                  @foreach ($list_jabatan as $jabatan)
                    <option value="{{$jabatan->id}}">{{$jabatan->jabatan}}</option>
                  @endforeach
                </select>
              </div>
            </div>

             
            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Kelamin</label>
              <div class="col-sm-9">
                <select class="form-control" name="jen_kel">
                  <option value=""></option>
                  <option value="laki-laki">Laki - Laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tempat Lahir </label>
              <div class="col-sm-9">
                <input class="form-control" id="tmp_lhr" name="tempatlahir" type="text" required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Lahir </label>
              <div class="col-sm-9">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" id="tgl_lahir" name="tgl_lahir" class="tanggal_lahir form-control pull-right">
                </div>
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
                <input class="form-control"  name="no_telp" type="number" required/>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">No Rekening </label>
              <div class="col-sm-9">
                <input class="form-control" name="no_rek" type="number" required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Gaji Pokok </label>
              <div class="col-sm-9">
                <input class="form-control" name="gaji" type="number"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Photo </label>
              <div class="col-sm-9">
                <input class="form-control" name="photo" type="file"/>
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-success" type="button">Save</button>
                <a href="{{ URL::to('/karyawan')}}" class="btn btn-warning" type="button">Cancel</a>
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