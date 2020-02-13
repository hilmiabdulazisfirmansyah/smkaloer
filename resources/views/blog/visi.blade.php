@extends('layouts.master')
@section('title','Visi & Misi')
@extends('layouts.header')
@extends('layouts.navbar')
@extends('form.Siswa')
@section('content')
<div class="card-deck mt-5">
	<div class="card" style="background-color: #ddd;border-radius: 14px;">
		<div class="text-center mt-5">
			<img src="{{'img/logo.png'}}" class="card-img-top" style="width:13vw">
		</div>
		<div class="card-body">
			<h5 class="card-title text-success" style="border-bottom: solid 0.3vw #ccc";>
				VISI
			</h5>
			<p class="card-text text-center">
				<b><i>
					“Menjadikan sekolah menengah kejuruan prestatif di tingkat nasional tahun 2020, serta mencetak lulusan yang kompetitif, berprilaku agamis, beretika & berbudaya”
				</i></b>
			</p>
		</div>
		<div class="card-footer">
			<div style="background-image: url({{'img/vm.png'}});height: 276px;background-size: cover;background-repeat: no-repeat;background-position-x: right;"></div>
		</div>
	</div>
	<div class="card" style="background-color: #ddd;border-radius: 14px;">
		<div class="text-center mt-5">
			<img src="{{'img/logo.png'}}" class="card-img-top" style="width:13vw">
		</div>
		<div class="card-body">
			<h5 class="card-title text-success" style="border-bottom: solid 0.3vw #ccc";>
				MISI
			</h5>
			<p class="card-text">
				<ol>
					<li>
						Meningkatkan kualitas organisasi dan manajemen sekolah dalam menumbuhkan semangat prestatif dan kompetitif
					</li>
					<li>
						Meningkatkan kualitas KBM dalam mencapai kompetensi siswa berstandar
						nasional maupun internasional
					</li>
					<li>
						Meningkatkan kualitas kompetensi guru & pegawai dalam mewujudkan Standar Pelayanan Minimal (SPM)
					</li>
					<li>
						Meningkatkan kualitas dan kuantitas sarana dan prasarana pendidikan dalam mendukung penguasaan IPTEK
					</li>
					<li>
						Meningkatkan kualitas SDM dan kualitas pembinaan kesiswaan dalam mewujudkan imtaq dan sikap kemandirian
					</li>
					<li>
						Meningkatkan kemitraan dengan DU/DI sesuai prinsip demand driven
					</li>
					<li>
						Meningkatkan kualitas pengelolaan unit produksi dalam menunjang kualitas SDM
					</li>
					<li>
						Memberdayakan lingkungan sekolah dalam mewujudkan wawasan wiyatamandala.
					</li>
				</ol>
			</div>
		</p>
		<div class="card-footer">
			<div style="background-image: url({{'img/vm.png'}});height: 276px;background-size: cover;background-repeat: no-repeat;background-position-x: right;"></div>
		</div>
	</div>
</div>
@endsection
@extends('layouts.footer')
@extends('scripts.script')