<!DOCTYPE html><html class="no-js" lang="zxx">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Best Responsive job portal template build on Latest Bootstrap.">
<meta name="keywords" content="job, nob board, job portal, job listing">
<meta name="robots" content="index,follow">
<title>Job Stock - Responsive Job Portal Bootstrap Template | ThemezHub</title>
<link rel="stylesheet" href="/site/css/bootstrap.min.css">
<link rel="stylesheet" href="/site/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="/site/css/bootstrap-select.min.css">
<link rel="stylesheet" type="text/css" href="/site/css/bootstrap-wysihtml5.css">
<link rel="stylesheet" type="text/css" href="/site/css/prettify.css">
<link rel="stylesheet" href="/site/css/owl.carousel.css">
<link rel="stylesheet" href="/site/css/owl.theme.css">
<link href="/site/css/font-awesome.css" rel="stylesheet">
<link href="/site/css/line-font.css" rel="stylesheet">
<link href="/site/css/animate.css" rel="stylesheet">
<link href="/site/css/bootsnav.css" rel="stylesheet">
<link href="/site/css/style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" id="jssDefault" href="/site/css/colors/green-style.css">
<link href="/site/css/responsiveness.css" rel="stylesheet">
<link href="/site/css/custom.css" rel="stylesheet">
<!--[if lt IE 9]> <script src="/site/js/html5shiv.min.js"></script> <script src="/site/js/respond.min.js"></script><![endif]-->
</head>
<body class="simple-bg-screen">
<div class="wrapper">
<section class="login-screen-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">ایجاد حساب کاربری</h3>
					</div>
					<div class="panel-body">
                        
						<img src="/site/img/logo.png" class="img-responsive"/>
						<form method="POST" action="{{ route('register') }}">
                        @csrf
							<fieldset>
							<input id="name" placeholder="نام و نام خانوادگی" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

								@if ($errors->has('name'))
									<span class="invalid-feedback">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif

								
                                <input id="email" placeholder="آدرس ایمیل" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							
                                <input id="password" placeholder="رمز عبور" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							
                                <input id="password-confirm" placeholder="تکرار رمز عبور" type="password" class="form-control" name="password_confirmation" required>
						
                                <button type="submit" class="btn btn-login"> ثبت نام </button>

							</fieldset>
						</form>
						<ul class="social-login">
							<li class="facebook-login"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
							<span>یا</span>
							<li class="google-plus-login"><a href="#"><i class="fa fa-google-plus"></i>Google</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
    

	<script type="text/javascript" src="/site/js/jquery.min.js"></script>
	<script src="/site/js/bootstrap.min.js"></script>
	<script src="/site/js/bootsnav.js"></script>
	<script src="/site/js/viewportchecker.js"></script>
	<script src="/site/js/bootstrap-select.min.js"></script>
	<script src="/site/js/wysihtml5-0.3.0.js"></script>
	<script src="/site/js/bootstrap-wysihtml5.js"></script>
	<script src="/site/js/jQuery.style.switcher.js"></script>
	<script type="text/javascript" src="/site/js/owl.carousel.min.js"></script>
	<script src="/site/js/custom.js"></script>
</div>
</body>
</html>