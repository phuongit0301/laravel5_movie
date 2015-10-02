@include("layout.admin.header")

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="../../index2.html"><b>Admin</b>LTE</a>
		</div><!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Forgot Password</p>

			@if (session('status'))
				<div class="alert alert-success">
				     {{ session('status') }}
				</div>
			@endif

			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
					   @foreach ($errors->all() as $error)
					            <li>{{ $error }}</li>
					   @endforeach
					</ul>
				</div>
			@endif

			{!! Form::open(["url" => "forgot/password", "method" => "post"]) !!}
				<div class="form-group has-feedback">
					{!! Form::email("email", null, ["class" => "form-control", "placeholder" => "Email"]) !!}
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>

			  <div class="row">
			    <div class="col-xs-7 col-xs-offset-5">
			      {!! Form::submit("Send Password Reset Link", ["class" => "btn btn-primary btn-block btn-flat"]) !!}
			    </div><!-- /.col -->
			  </div>

			{!! Form::close() !!}

		</div><!-- /.login-box-body -->
	</div>

@include("layout.admin.footer-bottom")