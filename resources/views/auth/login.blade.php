@include("layout.admin.header")
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        
        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <strong>Whoops! </strong> There were some problems with your input. <br> <br>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }} </li>
              @endforeach
            </ul>
          </div>
        @endif

        {!! Form::open(["url" => "auth/login", "method" => "post"]) !!}
          <div class="form-group has-feedback">
          	{!! Form::email("email", null, ["class" => "form-control", "placeholder" => "Email"]) !!}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
          	{!! Form::password("password", ["class" => "form-control", "placeholder" => "Password"]) !!}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              {!! Form::submit("Sign In", ["class" => "btn btn-primary btn-block btn-flat"]) !!}
            </div><!-- /.col -->
          </div>
        {!! Form::close() !!}

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->
  
        <a href="{{ url('password/email') }}">I forgot my password</a><br>
        <a href="{{ url('auth/register') }}" class="text-center">Register a new membership</a>
      </div><!-- /.login-box-body -->
    </div>
@include("layout.admin.footer-bottom")