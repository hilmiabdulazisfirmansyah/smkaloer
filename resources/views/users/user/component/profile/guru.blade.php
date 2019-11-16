<ul class="list-group list-group-bordered">
	<li class="list-group-item">
		<b>NIK</b>
		<a class="pull-right text-aqua">{{auth()->user()->guru->nik}}</a>
	</li>
	<li class="list-group-item">
		<b>Nomor Handphone</b>
		<a class="pull-right text-aqua">{{auth()->user()->guru->no_hp}}</a>
	</li>
	<li class="list-group-item">
		<b>Status Perkawinan</b>
		<a class="pull-right text-aqua">{{status_perkawinan(auth()->user()->guru->status_perkawinan)}}</a>
	</li>
</ul>