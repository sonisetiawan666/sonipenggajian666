 @extends('_layouts.base')

@section('title', 'Kategori')


@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-heading">
            Ubah Kategori
        </div>

        <div class="panel-body">
          <form action="{{ URL::to('kategori/' . $kategori->id) }}" method="POST" class="form-horizontal" name="masterForm" class="form-validation">
            {{ csrf_field() }}
            {{method_field('PUT')}}

            <div class="form-group">
              <label class="col-sm-2 control-label">Kategori *</label>
              <div class="col-sm-9">
                <input class="form-control" name="kategori" type="text" value="{{$kategori->kategori}}" required/>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-success" type="button">Save</button>
                <a href="{{ URL::to('/kategori')}}" class="btn btn-warning" type="button">Cancel</a>
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