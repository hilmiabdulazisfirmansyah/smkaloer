<div class="box">
	<div class="box-header">
		<h3 class="box-title">Table Detail Kehadiran Anda</h3>
<<<<<<< HEAD
=======
		<h5 class="box-title" style="float:right;">Pin Anda : {{ $pin }}</h5>
>>>>>>> 67f4089ac00f9a0a874c5c888387493d215ec299
	</div>
	
	<!-- /.box-header -->
	<div class="box-body">
		<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
			<thead>

				<tr role="row">
					<th class="sorting_asc text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
					<th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Tanggal</th>
					<th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Kehadiran</th>
					
					@php
					switch ($users) {
						case 'Siswa':
						$x = 'Guru';
						break;

						case 'Guru':
						$x = 'Kepala Sekolah';
						break;

						default:
						$x = 'error';
						break;
					}
					@endphp
					

					<th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Verifikasi {{$x}}</th>


					<th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Verifikasi Guru Piket</th>
				</tr>
			</thead>
			<tbody>

				@if ($users == 'Siswa')
				@include('users.user.data.absensi.siswa')
				@endif
				
				@if ($users == 'Guru')
				@include('users.user.data.absensi.guru')
				@endif

			</tbody>

		</table></div></div>
		@php
			$kehadiran_user = DB::table('kehadiran_user')->where('user_id', '=', auth()->user()->id)->paginate(10);
		@endphp
		@include('users.user.layouts.partials.paginations.pagination', 
		['pagination' => $kehadiran_user, 'tabel' => $users])
	</div>
	<div class="callout callout-info text-center">
		Ketika Users Melakukan Finger, otomatis data akan masuk ke tabel ini dan tabel yang ada di halaman Users
	</div>
</div>
<!-- /.box-body -->
</div>

@if ($users == 'Guru' && $job_title == '')
@include('users.user.data.absensi.daftarHadirSiswa')
@endif

@if ($users == 'Guru' && $job_title == 'Kepala Sekolah')
@include('users.user.data.absensi.daftarHadirGuru')
@endif

@if ($users == 'Guru' && $job_title == 'Guru Piket')
@include('users.user.data.absensi.daftarHadirGuru')
@include('users.user.data.absensi.daftarHadirSiswa')
@endif