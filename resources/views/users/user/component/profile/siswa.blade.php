<ul class="list-group list-group-bordered">
	<li class="list-group-item">
		<b>NIK</b>
		<a class="pull-right text-aqua">{{auth()->user()->siswa->nik}}</a>
	</li>
	<li class="list-group-item">
		<b>NIS</b>
		<a class="pull-right text-aqua">{{auth()->user()->siswa->nis}}</a>
	</li>
	<li class="list-group-item">
		<b>NISN</b>
		<a class="pull-right text-aqua">{{auth()->user()->siswa->nisn}}</a>
	</li>
	<li class="list-group-item">
		<b>Kelas</b>
		<a class="pull-right text-aqua">{{auth()->user()->siswa->id_kelas}}</a>
	</li>
	<li class="list-group-item">
		<b>Jurusan</b>
		<a class="pull-right text-aqua">{{auth()->user()->siswa->id_jurusan}}</a>
	</li>
	<li class="list-group-item">
		<b>Rombel</b>
		<a class="pull-right text-aqua">{{auth()->user()->siswa->id_rombel}}</a>
	</li>
</ul>