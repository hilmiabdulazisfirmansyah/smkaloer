@extends('layouts.master')
@section('title','Postingan SMK ALOER WARGAKUSUMAH')
@extends('layouts.header')
@extends('layouts.navbar')
@extends('form.Siswa')
@section('content')
<div class="container mt-5 mb-5 pb-5" style="background-color: #ddd;border-radius: 14px;">
	<div class="text-center">
		<img class="mt-5 mb-5" src="{{ asset('img/logo.png') }}" style="width:13vw">
	</div>
	<div class="mb-5" style="border-bottom: solid 0.3vw #ccc;">
		<h2 class="text-center text-success">{{$post->judul}} - {{$post->sub_judul}}</h2>
	</div>
	<div class="container text-justify">
		@php
		echo htmlspecialchars_decode($post->postingan);
		@endphp
	</div>
	<a href="{{ url('/') }}">Kembali ke Halaman Awal</a>
	<hr>
	<img src="{{ asset('img/vm.png') }}" style="width: 100%;height: max-content;">
</div>

@include('blog.posts.postingan')
@endsection
@extends('layouts.footer')
@extends('scripts.script')