@extends('_layouts.base')

@section('title', 'Panitia')


@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-heading">
            Ubah Panitia
        </div>

        <div class="panel-body">
          <form action="{{ URL::to('panitia/' . $panitia->id) }}" method="POST" autocomplete="off" class="form-horizontal" name="masterForm" class="form-validation">
            {{ csrf_field() }}
            {{method_field('PUT')}}

            <div class="form-group">
              <label class="col-sm-2 control-label">Posisi</label>
              <div class="col-sm-9">
                <input class="form-control" name="posisi" type="text" value="{{$panitia->posisi}}" required/>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-success" type="button">Simpan</button>
                <a href="{{ URL::to('/panitia')}}" class="btn btn-warning" type="button">Batal</a>
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