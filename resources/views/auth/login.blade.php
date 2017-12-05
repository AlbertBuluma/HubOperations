<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>CPHL/UNHLS | Log in</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Bootstrap 3.3.7 -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
<!-- Ionicons -->
<link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
<!-- Theme style -->
<link href="{{ asset('css/AdminLTE.min.css') }}" rel="stylesheet">
<!-- iCheck -->
<link href="{{ asset('css/login/blue.css') }}" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo" style="margin-bottom:7px;"><img src="{{ asset('img/coat_of_arms.png') }}" class="img-responsive" width="150" height="150" style="display: block;  margin-left: auto;  margin-right: auto;"> </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <form class="" method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}
      <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span> 
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        </div>
      <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
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
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
              Remember Me </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col --> 
      </div>
      
    </form>
    <div class="social-auth-links text-center"> </div>
    <!-- /.social-auth-links --> 
    
    <a href="{{ route('password.request') }}">I forgot my password</a><br>
    <div class="row">
      	<div class="col-md-12"> 
        <h3>Test Login Credentials</h3>
        	<ul>
            	<li><strong>National Coordinator</strong>
                	<ul>
                    	<li>Username: officer@dev.com</li>
                        <li>Password: password</li>
                    </ul>
                </li>
                <li><strong>Hub In-charge</strong>
                <ul>
                    	<li>Username: incharge@dev.com</li>
                        <li>Password: password</li>
                    </ul>
                </li>
            </ul>
        </div>
      </div>
  </div>
  <!-- /.login-box-body --> 
</div>
<!-- /.login-box --> 

<!-- jQuery 3 --> 
<script src="{{ asset('js/jquery.min.js') }}"></script> 
<!-- Bootstrap 3.3.7 --> 
<script src="{{ asset('js/bootstrap.min.js') }}"></script> 
<!-- iCheck --> 
<script src="{{ asset('js/login/icheck.min.js') }}"></script> 
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
