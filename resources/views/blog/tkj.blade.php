@extends('layouts.master')
@section('title','Teknik Komputer dan Jaringan')
@extends('layouts.header')
@extends('layouts.navbar')
@extends('layouts.carousel')
@extends('form.Siswa')
@section('content')
<div class="card-deck mt-5">
	<div class="card" style="background-color: #ddd;border-radius: 14px;">
		<div class="text-center mt-5">
			<img src="{{'img/logo.png'}}" class="card-img-top" style="width:13vw">
		</div>
		<div class="card-body">
			<h2 class="card-title text-success text-center" style="border-bottom: solid 0.3vw #ccc";>
				Teknik Komputer dan Jaringan
			</h2>
			<p class="card-text text-justify">
				<p>
					Teknik Komputer dan Jaringan merupakan ilmu berbasis Teknologi Informasi dan Komunikasi terkait kemampuan algoritma, pemrograman komputer, perakitan komputer, perakitan jaringan komputer, dan pengoperasian perangkat lunak, dan internet. Teknik komputer, dan jaringan juga membutuhkan pemahaman di bidang teknik listrik, dan ilmu komputer sehingga mampu mengembangkan, dan mengintegrasikan perangkat lunak, dan perangkat keras.
				</p>
				<p>
					Bidang pekerjaan yang dapat diisi oleh tamatan kompetensi keahlian teknik komputer dan jaringan antara lain:
				</p>
				<ol>	
					<li>Penyedia jasa layanan internet</li>
					<li>Jaringan Nirkabel / Wireless</li>
					<li>Administrator server</li>
					<li>Integrator VOIP</li>
					<li>Administrator Linux</li>
					<li>Integrator, dan administrator Jaringan</li>
					<li>Administrator web</li>
				</ol>>
			</p>
		</div>
		<div class="card-footer">
			<div style="background-image: url({{'img/vm.png'}});height: 276px;background-size: cover;background-repeat: no-repeat;background-position-x: right;"></div>
		</div>
	</div>
</div>
@endsection
@extends('layouts.footer')
@extends('scripts.script')