@php
if (strlen($nama) > 18) {
	$nama = substr($nama,0, 18);
}
@endphp

<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{auth()->user()->avatar}}" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>{{ $nama }}</p>

				<a href="#"><i class="fa fa-circle text-success"></i>Online</a> | <small> {{ auth()->user()->job_title }} </small>
			</div>
		</div>
		
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li>
				<a href="{{ url('dashboard') }}">
					<i class="fa fa-dashboard"></i>
					<span>Dashboard</span>
				</a>
			</li>

			<li>
				<a href="{{ url('postingan') }}">
					<i class="fa fa-pencil"></i>
					<span>Postingan</span>
				</a>
			</li>



			<li class="treeview" style="height:auto;">
				<a href="#">
					<i class="fa fa-book"> </i> <span>Absensi</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>

				<ul class="treeview-menu" style="display: none;">
					<li>
						<a href="{{ url('/absensi/'.strtolower(auth()->user()->role))}}">
							<i class="fa fa-calendar-check-o"></i>
							<span>Verifikasi</span>
						</a>
					</li>

					<li>
						<a href="{{ url('/absensi/kalender')}}">
							<i class="fa fa-calendar"></i>
							<span>Kalender Absensi</span>
						</a>
					</li>
				</ul>

			</li>

			@if (auth()->user()->job_title == 'Kurikulum')
			<li class="treeview" style="height:auto;">
				<a href="#">
					<i class="fa fa-institution"> </i> <span>Akademik</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>


				<ul class="treeview-menu" style="display: none;">
					<li>
						<a href="{{ url('rombel') }}">
							<i class="fa fa-book"></i>
							<span>Rombel</span>
						</a>
					</li>

					<li>
						<a href="{{ url('mapel') }}">
							<i class="fa fa-book"></i>
							<span>Mata Pelajaran</span>
						</a>
					</li>

					<li>
						<a href="{{ url('jadwal') }}">
							<i class="fa fa-book"></i>
							<span>Jadwal Pelajaran</span>
						</a>
					</li>
				</ul>
			</li>

			@endif

			@if (auth()->user()->job_title == 'Kepala Sekolah' || auth()->user()->job_title == 'Wali Kelas')
			<li class="treeview" style="height:auto;">
				<a href="#">
					<i class="fa fa-group"> </i> <span>HRM</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>

				@if (auth()->user()->job_title == 'Wali Kelas' )
				<ul class="treeview-menu" style="display: none;">
					<li>
						<a href="{{ url('jobSiswa') }}">
							<i class="fa fa-user"></i>
							<span>Siswa</span>
						</a>
					</li>
				</ul>
				@endif


				@if (auth()->user()->job_title == 'Kepala Sekolah')
				<ul class="treeview-menu" style="display: none;">
					<li>
						<a href="{{ url('jobGuru') }}">
							<i class="fa fa-user"></i>
							<span>Guru</span>
						</a>
					</li>
				</ul>
				@endif


			</li>

			@endif


			@if (auth()->user()->job_title == 'EDP' || auth()->user()->job_title == 'Toolsman' || auth()->user()->job_title == 'Teknisi Jaringan')
			<li class="treeview" style="height:auto;">
				<a href="#">
					<i class="glyphicon glyphicon-wrench"> </i> <span>Settings</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>


				<ul class="treeview-menu" style="display: none;">
					<li>
						<a href="{{ url('finger') }}">
							<i class="glyphicon glyphicon-hdd"></i>
							<span>Fingerprint</span>
						</a>
					</li>
				</ul>


			</li>

			@endif




			@if (auth()->user()->role == 'dev')
			<li>
				<a href="{{ url('pembayaran') }}">
					<i class="fa fa-money"></i>
					<span>Pembayaran</span>
				</a>
			</li>



			<li>
				<a href="{{ url('tugas') }}">
					<i class="fa fa-book"></i>
					<span>Daftar Tugas</span>
				</a>
			</li>

			<li class="treeview" style="height:auto;">
				<a href="#">
					<i class="fa fa-share"></i><span>Pusat Download</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu" style="display: none;">
					<li><a href="#"><i class="fa fa-circle-o"></i>Tugas</a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i>Materi Bidang Studi</a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i>Silabus</a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i>lain-lain</a></li>
				</ul>
			</li>

			<li class="treeview" style="height:auto;">
				<a href="#">
					<i class="fa fa-share"></i><span>Pemeriksaan Hasil Ujian</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu" style="display: none;">
					<li><a href="#"><i class="fa fa-circle-o"></i>Jadwal Ujian</a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i>Nilai Raport</a></li>
				</ul>
			</li>

			<li>
				<a href="{{ url('pengumuman') }}">
					<i class="fa fa-book"></i>
					<span>Papan Pengumuman</span>
				</a>
			</li>



			<li>
				<a href="{{ url('mapel') }}">
					<i class="fa fa-book"></i>
					<span>Kontak Guru</span>
				</a>
			</li>

			<li class="treeview" style="height:auto;">
				<a href="#">
					<i class="fa fa-share"></i><span>Perpustakaan</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu" style="display: none;">
					<li><a href="#"><i class="fa fa-circle-o"></i>Buku</a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i>Buku yang di pinjam</a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i>Buku yang di beli</a></li>
				</ul>
			</li>
			@endif


		</ul>
	</section>
	<!-- /.sidebar -->
</aside>