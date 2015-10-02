@include("layout.admin.header")

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="../../index2.html"><b>Admin</b>LTE</a>
		</div><!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Reset Password</p>

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

			{!! Form::open(["url" => "password/reset", "method" => "post"]) !!}

				<div class="form-group has-feedback">
					{!! Form::email("email", null, ["class" => "form-control", "placeholder" => "Email"]) !!}
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					{!! Form::password("password", ["class" => "form-control", "placeholder" => "Password"]) !!}
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					{!! Form::password("password_confirmation", ["class" => "form-control", "placeholder" => "Password"]) !!}
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>

				<div class="row">
					<div class="col-xs-5 col-xs-offset-7">
						{!! Form::submit("Reset Password", ["class" => "btn btn-primary btn-block btn-flat"]) !!}
					</div><!-- /.col -->
				</div>

			{!! Form::close() !!}

		</div><!-- /.login-box-body -->
	</div>
@include("layout.admin.footer-bottom")