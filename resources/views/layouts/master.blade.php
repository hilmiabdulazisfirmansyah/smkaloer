<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include('layouts.header')
</head>
<body>
	@include('layouts.navbar')
	@include('form.Siswa')

	<div class="container">
		@yield('content')
	</div>
	

	@include('layouts.footer')
	@include('scripts.script')
</body>
</html>