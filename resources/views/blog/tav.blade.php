@extends('layouts.master')
@section('title','Teknik Audio Video')
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
				Teknik Audio Video
			</h2>
			<p class="card-text text-justify">
				Teknik Audio Video merupakan Standar kompetensi yang digunakan sebagai acuan pengembangan kurikulum ini adalah Standar Kompetensi Kerja Nasional Indonesia (SKKNI) pada Keahlian Teknik Audio Video . Standar kompetensi dan level kualifikasi keahlian Teknik Audio Video dapat digambarkan sebagai berikut :
				<ol>
					<li>Keterampilan Dasar Perbengkelan</li>
					<li>Memperbaiki atau Reparasi Power Suplay Kecil (Adaptor Dinding)</li>
					<li>Menguasai Dasar Elektronika Terapan</li>
					<li>Mengoperasikan Peralatan Audio Video</li>
					<li>Menguasai Elektro Digital Dan Komputer</li>
					<li>Merawat Peralatan Audio Video</li>
					<li>Menginstalasi Sistem Audio Video</li>
					<li>Memperbaiki / Reparasi Power Suplay pada Produk Elektronika</li>
					<li>Memperbaiki / Reparasi Amplifier / Sistem Penguat Suara / Radio / Sensor</li>
					<li>Penerapan Dasar Pembangkit Tenaga Surya Transduser / Sensor</li>
					<li>Penerapan Sistem Audio Video dan Alat Komunikasi</li>
				</ol>
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