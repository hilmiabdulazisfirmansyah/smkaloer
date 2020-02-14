@extends('layouts.master')
@section('title','Postingan SMK ALOER WARGAKUSUMAH')
@section('content')
<main role="main" class="mt-5 mb-5 p-5">
	{{-- margin-top: 16vh;margin-bottom: 5vh;padding: 16px --}}
	<div class="row">
		<div class="col-md-8 blog-main">
			<h3 class="pb-3 mb-4 font-italic border-bottom">
				<img src="{{ asset('img/logo.png') }}" style="width: 5vw"> {{$post->judul}} - {{$post->sub_judul}}
			</h3>

			<div class="blog-post">
				{{-- <h2 class="blog-post-title">{{$post->judul}}</h2>
				<h3 class="blog-post-title">{{$post->sub_judul}}</h3> --}}
				<p class="blog-post-meta">{{$post->created_at->locale('ID')->isoFormat('LLLL')}} oleh <a href="#"> @php
				$writer = App\User::find($post->user_id);
				@endphp
				{{$writer->name}}</a></p>
				@php
				echo htmlspecialchars_decode($post->postingan);
				@endphp
				{{-- max width for image = 43vw && max-height = 70vh --}}
			</div><!-- /.blog-post -->

			<div class="blog-post">
				<h2 class="blog-post-title">Another blog post</h2>
				<p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

				<p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
				<blockquote>
					<p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</blockquote>
				<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
				<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
			</div><!-- /.blog-post -->

			<div class="blog-post">
				<h2 class="blog-post-title">New feature</h2>
				<p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

				<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				<ul>
					<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
					<li>Donec id elit non mi porta gravida at eget metus.</li>
					<li>Nulla vitae elit libero, a pharetra augue.</li>
				</ul>
				<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
				<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
			</div><!-- /.blog-post -->

			<nav class="blog-pagination">
				<a class="btn btn-outline-primary" href="#">Older</a>
				<a class="btn btn-outline-secondary disabled" href="#">Newer</a>
			</nav>

		</div><!-- /.blog-main -->

		<aside class="col-md-4 blog-sidebar">
			<div class="p-3 mb-3 bg-light rounded">
				<h4 class="font-italic">About</h4>
				<p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
			</div>

			<div class="p-3">
				<h4 class="font-italic">Archives</h4>
				<ol class="list-unstyled mb-0">
					<li><a href="#">March 2014</a></li>
					<li><a href="#">February 2014</a></li>
					<li><a href="#">January 2014</a></li>
					<li><a href="#">December 2013</a></li>
					<li><a href="#">November 2013</a></li>
					<li><a href="#">October 2013</a></li>
					<li><a href="#">September 2013</a></li>
					<li><a href="#">August 2013</a></li>
					<li><a href="#">July 2013</a></li>
					<li><a href="#">June 2013</a></li>
					<li><a href="#">May 2013</a></li>
					<li><a href="#">April 2013</a></li>
				</ol>
			</div>

			<div class="p-3">
				<h4 class="font-italic">Elsewhere</h4>
				<ol class="list-unstyled">
					<li><a href="#">GitHub</a></li>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Facebook</a></li>
				</ol>
			</div>
		</aside><!-- /.blog-sidebar -->

	</div><!-- /.row -->

</main>

{{-- <div class="container mt-5 mb-5 pb-5" style="background-color: #ddd;border-radius: 14px;">
	<div class="text-center">
		<img class="mt-5 mb-5" src="{{ asset('img/logo.png') }}" style="width:13vw">
	</div>
	<div class="mb-5" style="border-bottom: solid 0.3vw #ccc;">
		<h2 class="text-center text-success"> - </h2>
	</div>
	<div class="container text-justify">
		
	</div>
	<a href="{{ url('/') }}">Kembali ke Halaman Awal</a>
	<hr>
	<img src="{{ asset('img/vm.png') }}" style="width: 100%;height: max-content;">
</div> --}}

@include('blog.posts.postingan')
@endsection
