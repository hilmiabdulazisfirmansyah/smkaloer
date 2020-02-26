<style type="text/css">
	body {
		background-color: ghostwhite;
	}

	.blog-main, .rounded{
		background-color: white;
		border-radius:20px;
	}

</style>

<main role="main" class="mt-5 mb-5 p-5">
	{{-- margin-top: 16vh;margin-bottom: 5vh;padding: 16px --}}
	<div class="row">
		<div class="col-md-8 blog-main">
			<div class="row pb-5">
				<div class="col-2 p-2 m-auto text-center">
				<img src="{{ asset('img/logo.png') }}" style="width: 100px"> 
				</div>
				<div class="col mt-5 m-auto text-center">
					<h1 class="blog-post-title">SMK ALOER WARGAKUSUMAH</h1>
				</div>
			</div>
			

			<div class="blog-post">
				<h2 class="blog-post-title">{{$post->judul}}</h2>
				<h3 class="blog-post-title">{{$post->sub_judul}}</h3>
				<p class="blog-post-meta">{{$post->created_at->locale('ID')->isoFormat('LLLL')}} oleh <a href="#"> @php
				$writer = App\User::find($post->user_id);
				@endphp
				{{$writer->name}}</a></p>
				@php
				echo htmlspecialchars_decode($post->postingan);
				@endphp
				{{-- max width for image = 43vw && max-height = 70vh --}}
			</div><!-- /.blog-post -->

		</div><!-- /.blog-main -->

		<aside class="col-md-4 blog-sidebar">
			<div class="p-3 mb-3 bg-light rounded">
				<img src="{{ asset('img/logo_smk.png') }}">
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
					<li><a href="https://www.facebook.com/smkaloerwk">Facebook</a></li>
				</ol>
			</div>
		</aside><!-- /.blog-sidebar -->

	</div><!-- /.row -->

</main>