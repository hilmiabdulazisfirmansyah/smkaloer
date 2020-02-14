@extends('layouts.master')
@section('title','Mikrotik Academy')
@section('content')
<div class="card-deck mt-5">
	<div class="card" style="background-color: #ddd;border-radius: 14px;">
		<div class="text-center mt-5">
			<img src="{{'img/mikrotikacademy.jpg'}}" class="card-img-top" style="width:100%">
		</div>
		<div class="card-body">
			<h2 class="card-title text-success text-center" style="border-bottom: solid 0.3vw #ccc";>
				Mikrotik Academy
			</h2>
			<p class="card-text text-justify">
				<p>
					Mikrotik Academy SMK ALOER WARGAKUSUMAH adalah Program pendidikan training dan sertifikasi mikrotik tingkat MTCNA (MikroTik Certified Network Associate) hasil kerjasama dengan Mikrotik Pusat di Latvia (Eropa). Program ini dikelola oleh Program Keahliah Teknik Komputer dan Jaringan, dengan adanya program MikroTik Academy memberikan kesempatan bagi siswa SMK ALOER WARGAKUSUMAH yang berminat untuk dapat mengikuti training dan akan mendapatkan sertifikat RESMI dari Mikrotik pusat bagi yang telah dinyatakan lulus.
				</p>
				<p><b>
					Adapun syarat-syarat mengikuti training MTCNA :
				</b></p>
				<ol>
					<li>Siswa SMK ALOER WARGAKUSUMAH.</li>
					<li>Mengenal Dasar-dasar jaringan dan TCP/IP.</li>
					<li>Materi yang akan diberikan pada pelatihan ini meliputi :</li>
				</ol>
				<p>
					Introduction to Mikrotik
				</p>
				<ul>
					<li>Instalasi dan pengoperasian Mikrotik (console dan Winbox)</li>
					<li>Firewall dasar</li>
					<li>Bridge System</li>
					<li>Static Routing</li>
					<li>Quality of Service (simple)</li>
					<li>Wireless Concept</li>
					<li>Wireless Interface : PTP & PTMP</li>
					<li>Praktikum jaringan dasar</li>
					<li>Fasilitas yang akan didapatkan oleh peserta :</li>
				</ul>
				<p>
					Ujian Resmi dari Mikrotik.com
				</p>
				<ol>
					<li>Sertifikat (jika lulus ujian) (Sertifikat Internasional langsung dari Mikrotik pusat Di Latvia Eropa)
					</li>
					<li>Sertifikat diakui secara INTERNATIONAL</li>
					<li>Modul Materi pelatihan</li>
					<li>Router Mikrotik untuk latihan</li>
					<li>Komputer bagi siswa yang tidak memiliki laptop</li>
				</ol>
			</p>
		</div>
		<div class="card-footer">
			<div style="background-image: url({{'img/vm.png'}});height: 276px;background-size: cover;background-repeat: no-repeat;background-position-x: right;"></div>
		</div>
	</div>
</div>
@endsection
