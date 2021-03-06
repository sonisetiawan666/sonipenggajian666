 @extends('_layouts.base')

@section('title', 'Jabatan')


@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-heading">
            Tambah Jabatan
        </div>

        <div class="panel-body">
          <form action="{{ URL::to('/jabatan')}}" method="POST" autocomplete="off" class="form-horizontal" name="masterForm" 
          class="form-validation">
            {{ csrf_field() }}

            <div class="form-group">
              <label class="col-sm-2 control-label">Jabatan *</label>
              <div class="col-sm-9">
                <input class="form-control" name="jabatan" type="text"/>
                @if ($errors->has('jabatan'))        
                  <span class="label label-danger">{{ $errors->first('jabatan') }}</span> 
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-success" type="button">Simpan</button>
                <a href="{{ URL::to('/jabatan')}}" class="btn btn-warning" type="button">Batal</a>
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