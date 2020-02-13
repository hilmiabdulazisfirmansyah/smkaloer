@extends('layouts.master')
@section('title','Bursa Kerja Khusus')
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
			<h2 class="card-title text-success text-center" style="border-bottom: solid 0.3vw #ccc";>
				Bursa Kerja Khusus
			</h2>
			<p class="card-text text-justify">
				<h3>Pengertian</h3>
				<p>
					Bursa Kerja Khusus (BKK) adalah sebuah lembaga yang dibentuk di Sekolah Menengah Kejuruan Negeri dan Swasta, sebagai unit pelaksana yang memberikan pelayanan dan informasi lowongan kerja, pelaksana pemasaran, penyaluran dan penempatan tenaga kerja, merupakan mitra Dinas Tenaga Kerja dan Transmigrasi.
				</p>

				<h3>Latar Belakang</h3>
				<p>
					Sekolah Menengah Kejuruan (SMK) sebagai sub sistem pendidikan nasional yang bertanggungjawab dalam penyiapan SDM tingkat menengah yang handal, berorientasi kepada kebutuhan pasar harus mampu mengembangkan inovasi untuk mempengaruhi perubahan kebutuhan pasar sehingga dapat mewujudkan kepuasan pencari kerja. BKK SMK merupakan salah satu komponen penting dalam mengukur keberhasilan pendidikan di SMK, karena BKK menjadi lembaga yang berperan mengoptimalkan penyaluran tamatan SMK dan sumber informasi untuk pencari kerja. Pemberdayaan BKK SMK merupakan salah satu fungsi dalam manajemen sekolah yaitu sebagai bagian pembinaan terhadap proses pelaksanaan kegiatan BKK SMK yang telah direncanakan dalam upaya mencapai tujuan pendidikan SMK. BKK SMK merupakan salah satu komponen pelaksanaan pendidikan sistem ganda, karena tidak mungkin bisa dilaksanakan proses pembelajaran yang mengarah kepada kompetensi jika tidak ada pasangan industri/usaha kerja, sebagai lingkungan kerja dimana siswa belajar keahlian dan profesional serta etos kerja sesuai dengan tuntutan dunia kerja.
				</p>

				<h3>Tujuan</h3>
				<ol>
					<li>Sebagai wadah dalam mempertemukan tamatan dengan pencari kerja.</li>
					<li>Memberikan layanan kepada tamatan sesuai dengan tugas dan fungsi masing-masing seksi yang ada dalam BKK.
					</li>
					<li>Sebagai wadah dalam pelatihan tamatan yang sesuai dengan permintaan pencari kerja</li>
					<li>Sebagai wadah untuk menanamkan jiwa wirausaha bagi tamatan melalui pelatihan.</li>
				</ol>

				<h3>Ruang Lingkup Kegiatan</h3>
				<ol>
					<li>Penyusunan database siswa lulusan SMK pencari kerja dan perusahaan pencari tenaga kerja dan penelusuran tamatan siswa SMK.
					</li>
					<li>Menjaring informasi tentang pasar kerja melalui iklan di media massa, internet, kunjunagn ke dunia usaha (industri) maupun kerjasama dengan lembaga penyalur tenaga kerja dan Depnakertrans.
						Membuat leaflet informasi dan pemasaran lulusan SMK yang dikirim kedunia usaha/industri yang terkait Depnakertrans.
					</li>
					<li>Penyaluran calon tenaga kerja lulusan SMK ke dunia usaha dan industri.
						Melakukan proses tindak lanjut hasil pengiriman dan penempatan tenaga kerja melalui kegiatan penjajakan dan verifikasi.
					</li>
					<li>Mengadakan program pelatihan ketrampilan tambahan/khusus bagi siswa dan lulusan SMK disesuaikan dengan bidang keahlian yang diperlukan.
					</li>
					<li>Mengadakan program bimbingan menghadapi tahapan proses penerimaan siswa dalam suatu pekerjaan (wawancara, psikotest).
					</li>
					<li>Memberikan informasi kepada para ALUMNI ataupun para lulusan SMK lain yang membutuhkan informasi tentang lowongan kerja.
					</li>
				</ol>

				<h3>Penyaluran Dan Penempatan Tamatan</h3>
				<p>
					Adapun pelaksanaan penyaluran dan penempatan tamatan yang dapat dilakukan BKK SMK adalah sebagai berikut :
				</p>
				<ol>
					<li>Menindaklanjuti kerjasama dengan industri pasangan yang telah menjadi mitra kerja dengan BKK sekolah.</li>
					<li>Melakukan penelusuran alumni dan dimasukkan ke dalam database sekolah.</li>
					<li>Merangkul pengurus Majelis Sekolah yang peduli dengan penempatan tenaga kerja dari alumni.</li>
					<li>
						Membuat website khusus BKK yang selalu up to date yang dapat di link dengan situs-situs JOB CARRIER.
					</li>
					<li>
						Menanamkan jiwa enterpreunership kepada siswa melalui pelatihan ketrampilan untuk menjadi seorang wirausaha (enterpreuneur).
					</li>
				</ol>
				<h3>Kegiatan Bursa Kerja Khusus</h3>
				<ol>
					<li>Merencanakan program kerja hubungan industri setiap program studi.</li>
					<ul>
						<li>Mengadakan pertemuan dengan Kajur tentang penempatan siswa-siswi prakerin.</li>
						<li>Mengadakan koordinasi dengan panitia PSG tentang penempatan siswa-siswi prakerin.</li>
						<li>Mengadakan koordinasi dengan panitia PSG tentang guru monitoring.</li>
					</ul>
					<li>Melakukan proses negosiasi dengan DU/DI dan pemerintah sebagai mitra dalam
						penempatan siswa-siswi prakerin.
					</li>
					<li>Menjalin kerjasama (MOU) dengan DU/DI dalam :
						<ul>
							<li>Sinkronisasi Kurikulum</li>
							<li>Pelatihan</li>
							<li>Penempatan tamatan</li>
						</ul>
						<li>emetaan DU/DI</li>
						<li>enjalin kerjasama dengan Depnakertrans tentang pelatihan (Magang) dan penempatan tamatan.</li>
						<li>embentuk Majelis Sekolah.</li>
						<li>embuat database penelusuran tamatan baik yang sudah bekerja maupun belum bekerja.</li>
						<li>embentuk Ikatan alumni.</li>
						<li>embuat mading informasi lowongan kerja.</li>
						<li>embuat website khusus BKK</li>
						<li>embuat Laporan Kegiatan</li>
						<li>onitoring dan Evaluasi</li>
					</div>
					<div class="card-footer">
						<div style="background-image: url({{'img/vm.png'}});height: 276px;background-size: cover;background-repeat: no-repeat;background-position-x: right;"></div>
					</div>
				</div>
			</div>
			@endsection
			@extends('layouts.footer')
			@extends('scripts.script')