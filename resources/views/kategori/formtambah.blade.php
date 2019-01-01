 @extends('_layouts.base')

@section('title', 'Kategori')


@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-heading">
            Tambah Kategori
        </div>

        <div class="panel-body">
          <form action="{{ URL::to('/kategori')}}" method="POST" autocomplete="off" class="form-horizontal" name="masterForm" class="form-validation">
            {{ csrf_field() }}

            <div class="form-group">
              <label class="col-sm-2 control-label">Kategori *</label>
              <div class="col-sm-9">
                <input class="form-control" name="kategori" type="text"/>
                @if ($errors->has('kategori'))        
                  <span class="label label-danger">{{ $errors->first('kategori') }}</span> 
                @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-success" type="button">Simpan</button>
                <a href="{{ URL::to('/kategori')}}" class="btn btn-warning" type="button">Batal</a>
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