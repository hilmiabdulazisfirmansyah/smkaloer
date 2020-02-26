<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include('layouts.header')
</head>
<body>
	
	<div class="preloader" style="display: none;">
		<div class="rounder"></div>
	</div>

	@include('layouts.navbar')
	@include('form.Siswa')

	@yield('content')

	@include('layouts.footer')
	@include('scripts.script')
</body>
</html>