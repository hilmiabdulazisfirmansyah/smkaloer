<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#424242" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>AloerSmartApp</title>
	<link href="{{ asset('/img/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/form-elements.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/customScrollbar.css') }}">
	<style type="text/css">
		.width100, .width50{font-size: 12px !important;}
		.discover{margin-top: -90px;position: relative;z-index: -1;}
		/*.form-bottom {box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.35);}*/
		.gradient{margin-top: 40px;text-align: right;padding: 10px;background: rgb(72,72,72);
			background: -moz-linear-gradient(left, rgba(72,72,72,1) 1%, rgba(73,73,73,1) 44%, rgba(73,73,73,1) 100%);
			background-image: linear-gradient(to right, rgba(72, 72, 72, 0.23) 1%, rgba(37, 37, 37, 0.64) 44%, rgba(73, 73, 73, 0) 100%);
			background-position-x: initial;
			background-position-y: initial;
			background-size: initial;
			background-repeat-x: initial;
			background-repeat-y: initial;
			background-attachment: initial;
			background-origin: initial;
			background-clip: initial;
			background-color: initial;
			background: -webkit-linear-gradient(left, rgba(72,72,72,1) 1%,rgb(73, 73, 73) 44%,rgba(73,73,73,1) 100%);
			background: linear-gradient(to right, rgba(72, 72, 72, 0.02) 1%,rgba(37, 37, 37, 0.67) 30%,rgba(73, 73, 73, 0) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#484848', endColorstr='#494949',GradientType=1 );}
			@media (min-width: 320px) and (max-width: 991px){
				.width100{width: 100% !important;display: block !important;
					float: left !important; margin-bottom: 5px !important;
					border-radius: 2px !important;}
					.width50{width: 50% !important;
						margin-bottom: 5px !important;
						display: block !important;
						border-radius:2px 0px 0px 2px !important;
						float: left !important;
						margin-left: 0px !important; }
						.widthright50{width: 50% !important;
							display: block !important;
							margin-bottom: 5px !important;
							border-radius: 0px 2px 2px 0px !important;
							float: left !important;margin-left: 0px !important;} }
							input[type="email"], input[type="password"], textarea, textarea.form-control {
								height: 40px;border: 1px solid #999;}

								input[type="email"]:focus, input[type="password"]:focus, textarea:focus, textarea.form-control:focus {border: 1px solid #424242;}

								button.btn {height: 40px;line-height: 40px;}

								@media(max-width:767px){
									.discover{margin-top: 10px}
									.gradient {text-align: center;}
									.logowidth{padding-right:0px;}
								}
								@media(min-width:768px) and (max-width:992px){
									.discover{margin-top: 10px}
									.logowidth{padding-right:0px;}
									.gradient {text-align: center;}
								}

/*.backstretch{position: relative;}
.backstretch:after {
position: absolute;
z-index: 2;
width: 100%;
height: 100%;
display: block;
left: 0;
top: 0;
content: "";
background-color: rgba(0, 0, 0, 0.16);
}*/
.col-md-offset-3 { margin-left: 29%;}

.loginbg {
	background: rgba(0, 0, 0, 0.81);
	max-height: 440px;
	box-shadow: 0px 7px 12px rgba(0, 0, 0, 0.29);
	border-radius: 4px;
}
.loginright {
	text-align: left;
	color: #fff;
	max-height: 385px;
	/* padding-right: 20px; */
	overflow: auto;
	position: relative;
	width: 100%;
	max-width: 100%;
	height: 385px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.logdivider {
	background: rgba(255, 253, 253, 0.7);
	clear: both;
	width: 100%;
	height: 1px;
	margin: 15px 0 15px;
}

.separatline {
	margin-left: 30px;
	width: 1px;
	height: 450px;
	background: rgba(255, 253, 253, 0.7);
}
.loginright h3 {
	font-size: 22px;
	color: #eae8e8;
	margin-top: 10px;
	line-height: normal;
	font-weight: 500;
	padding-bottom: 10px;
}
.col-md-offset-3 { margin-left: 29%;}
a.forgot {padding-top:0px;}
@media (max-width: 767px) {
	.separatline {
		margin-left: 0;
		width: 100%;
		height: 2px;
		margin: 35px auto 0px auto;
	}
	.col-md-offset-3 {margin-left: 0;}
}
</style>
</head>

<body>
	<!-- Top content -->

	<div class="top-content">
		<div class="inner-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-sm-5  form-box">
						<div class="loginbg">
							<div class="form-top">
								<div class="form-top-left">
									<img src="{{ asset('img/app_logo.png') }}" class="logowidth">

								</div>
								<div class="form-top-right"> <i class="fa fa-key"></i>
								</div>
							</div>
							<div class="form-bottom">
								<h3 class="font-white">User Login</h3>

								{{-- <div class="btn-group btn-group-justified" style="margin-top:10px;margin-bottom:10px;">
									<a href="#" class="btn btn-primary width50" onclick="copy('NIK Orang Tua / No Hp', 'Password')" data-toggle="tooltip" data-placement="top" title="" data-original-title="copy" style="background:#e91e63;"><i class="fa fa-users ispace"></i> Orang Tua</a>
									<a href="#" class="btn btn-primary width50" onclick="copy('NIK Siswa / Email', 'Password')" data-toggle="tooltip" data-placement="top" title="" data-original-title="copy" style="background:#0084B4;"><i class="fa fa-user ispace"></i> Siswa</a>
								</div> --}}

								<form action="{{ url('siswa') }}" method="post">
									@csrf
									{{-- <input type='hidden' name='ci_csrf_token' value=''/> --}}
									<div class="form-group">
										<label class="sr-only" for="form-email">
										Email</label>
										<input type="email" name="email" placeholder="Email" class="form-username form-control" id="email"> <span class="text-danger"></span>
									</div>
									<div class="form-group">
										<input type="password" name="password" placeholder="Password" class="form-password form-control" id="password"> <span class="text-danger"></span>
									</div>
									<button type="submit" class="btn">
									Masuk</button>
								</form>

								<span style="text-align:center;font-weight:normal;"><small class="text-info"><p> <i>catatan :Pilih Akses Login terlebih dahulu</i></p></small></span>
								<p style="margin-top: 20px;"><a style="color:#fff;padding-right: 20px;" href="{{ url('/') }}" target="_blank" class="forgot pull-right"> <i class="fa fa-empire"></i> Halaman Awal</a>
								</p>

								<p><a href="{{ url('/site/ufpassword') }}"  class="forgot"> <i class="fa fa-key"></i> Forgot Password</a> </p>
							</div>
						</div>
					</div>
					<div class="col-lg-1 col-sm-1"><div class="separatline"></div></div>
					<div class="col-lg-6 col-sm-6 col-sm-6">
						<div class="mCustomScrollbar loginright form-box">
							<div class="messages">
								<h3>Berita Terbaru</h3>
								<h4>Monitoring</h4>
								<p>Monitoring untuk CCTV</p>
								<div class="logdivider"></div>
								<h4>Pemberitahuan untuk Orang Tua</h4>

								<p>Dinyatakan dengan tegas bahwa orang tua harus datang ke Pertemuan Orangtua Guru secara teratur di setiap ...
									<a class=more href="#">Baca Selengkapnya</a></p><div class="logdivider"></div>
									<h4>Berita Ujian</h4>
									<p>Ujian Akan dilaksanakan pada tanggal...<a class=more href="#">Baca Selengkapnya</a></p>
									<div class="logdivider"></div>
								</div>
							</div>
						</div><!--./col-lg-6-->
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"></script>
		<script type="text/javascript" src="{{ asset('js/backstretch.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/customScrollbar.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/mousewheel.js') }}"></script>
	</body>
	</html>
	<script type="text/javascript">
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		(function($){
			$(window).on("load",function(){
				$(".loginright").mCustomScrollbar();
			});
		})(jQuery);
		$(document).ready(function () {
			var base_url = '{{ url('/') }}';
			$.backstretch([
				base_url + "/images/bg-02.jpg"
				], {duration: 3000, fade: 750});
			$('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function () {
				$(this).removeClass('input-error');
			});
			$('.login-form').on('submit', function (e) {
				$(this).find('input[type="text"], input[type="password"], textarea').each(function () {
					if ($(this).val() == "") {
						e.preventDefault();
						$(this).addClass('input-error');
					} else {
						$(this).removeClass('input-error');
					}
				});
			});
		});
		
	</script>

	<script>
		function copy(email, password)
		{
			document.getElementById("email").placeholder = email;
			document.getElementById("password").placeholder = password;
		}
	</script>