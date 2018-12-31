@extends('_layouts.base')

@section('title', 'User-Sistem')


@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-heading">
            Tambah User
        </div>

        <div class="panel-body">
          <form action="{{ URL::to('/user')}}" method="POST" autocomplete="off" class="form-horizontal" name="masterForm" class="form-validation">
            {{ csrf_field() }}

             <div class="form-group">
              <label class="col-sm-2 control-label">Name</label>
              <div class="col-sm-9">
                <input class="form-control" name="name" type="text" required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Roles</label>
              <div class="col-sm-9">
                <select class="form-control" name="roles">
                  <option value=""></option>
                  @foreach ($list_roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Karyawan</label>
              <div class="col-sm-9">
                <select class="form-control" name="karyawan">
                  <option value=""></option>
                  @foreach ($list_karyawan as $karyawan)
                    <option value="{{$karyawan->id}}">{{$karyawan->nama_karyawan}}</option>
                  @endforeach
                </select>
              </div>
            </div>

             <div class="form-group">
              <label class="col-sm-2 control-label">Username</label>
              <div class="col-sm-9">
                <input class="form-control" name="username" type="text" required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Password</label>
              <div class="col-sm-9">
                <input class="form-control" name="password" type="password" required/>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-success" type="button">Simpan</button>
                <a href="{{ URL::to('/user')}}" class="btn btn-warning" type="button">Batal</a>
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