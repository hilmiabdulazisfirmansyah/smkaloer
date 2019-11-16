<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
<!-- Sidebar user panel -->
<div class="user-panel">
<div class="pull-left image">
<img src="{{auth()->user()->avatar}}" class="img-circle" alt="User Image" style="height: 45px">
</div>
<div class="pull-left info">
<p>{{auth()->user()->name}}</p>
<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
</div>
</div>
<!-- search form -->
<form action="#" method="get" class="sidebar-form">
<div class="input-group">
<input type="text" name="q" class="form-control" placeholder="Cari data">
<span class="input-group-btn">
<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
</button>
</span>
</div>
</form>
<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
<li class="header">MAIN NAVIGATION</li>
<li>
<a href="{{ url('/dashboard') }}">
<i class="fa fa-dashboard"></i>
<span>Dashboard</span>
</a>
</li>



<li>
<a href="{{ url('/absensi') }}">
<i class="fa fa-book"></i>
<span>Absensi</span>
</a>
</li>
@if (auth()->user()->role == 'dev')
<li>
<a href="{{ url('/pembayaran') }}">
<i class="fa fa-money"></i>
<span>Pembayaran</span>
</a>
</li>

<li>
<a href="{{ url('/jadwal') }}">
<i class="fa fa-book"></i>
<span>Jadwal Pelajaran</span>
</a>
</li>

<li>
<a href="{{ url('/tugas') }}">
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
<a href="{{ url('/pengumuman') }}">
<i class="fa fa-book"></i>
<span>Papan Pengumuman</span>
</a>
</li>

<li>
<a href="{{ url('/mapel') }}">
<i class="fa fa-book"></i>
<span>Mata Pelajaran</span>
</a>
</li>

<li>
<a href="{{ url('/mapel') }}">
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