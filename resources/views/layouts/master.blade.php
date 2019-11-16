<!DOCTYPE html>
<html>

<head>
	<title>@yield('title')</title>
	@yield('header')
</head>



<body style="padding-top:50px">
	<!-- navbar -->
	{{-- <img src="{{('img/logo.jpg')}}" class="card-img-top" style="margin-top:60px"> --}}
@yield('navbar')
	<!-- end of navbar -->

	<!-- Carousel -->
	@yield('carousel')
	<!-- end carousel -->
	@yield('formsiswa')

	<!-- container -->
	<div class="container" id="content">
		{{-- card info Pendaftaran --}}
		@include('notif.success')
		@include('notif.gagal')
		@yield('content')
		{{-- end card info Pendaftaran --}}
	</div>
	@yield('footer')

	{{-- library JS --}}
	{{-- JQuery --}}
	@yield('script')
</body>

</html>