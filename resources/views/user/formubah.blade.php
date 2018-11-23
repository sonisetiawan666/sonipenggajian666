 @extends('_layouts.base')

@section('title', 'User-Sistem')


@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-heading">
            Ubah User
        </div>

        <div class="panel-body">
          <form action="{{ URL::to('user/' . $user->id) }}" method="POST" class="form-horizontal" name="masterForm" class="form-validation">
            {{ csrf_field() }}
            {{method_field('PUT')}}

             <div class="form-group">
              <label class="col-sm-2 control-label">Name</label>
              <div class="col-sm-9">
                <input class="form-control" name="name" type="text" value="{{$user->name}}" required/>
              </div>
            </div>

             <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
              <div class="col-sm-9">
                <input class="form-control" name="email" type="email" value="{{$user->email}}" required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Username</label>
              <div class="col-sm-9">
                <input class="form-control" name="username" type="text" value="{{$user->username}}" required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Password</label>
              <div class="col-sm-9">
                <input class="form-control" name="password" type="password" value="{{$user->password}}" required/>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-success" type="button">Save</button>
                <a href="{{ URL::to('/user')}}" class="btn btn-warning" type="button">Cancel</a>
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