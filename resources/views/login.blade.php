<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistem</title>

    <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/fonts/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/fonts/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/iCheck/square/blue.css') }}">
</head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="index2.html"><b>Sistem</b></a>
            </div>

            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} has-feedback">
                        <input id="username" type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}" required autofocus>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">

                             </div>
                        </div>
        
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>               
    </div>
    <script src="{{ asset('js/app.js') }}"></script>

      
</body>
</html>


