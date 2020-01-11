<div class="box">
	<div class="box-header">
		<h3 class="box-title">Table Detail Kehadiran Guru</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12">

			<table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
				<thead>

					<tr role="row">
						<th class="sorting_asc text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
						<th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Nama</th>
						<th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Tanggal</th>
						<th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Keterangan</th>
						<th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Status</th><th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th>
					</tr>
				</thead>
				<tbody>

					@foreach ($kehadiran_guru_mapel as $kehadiran)
					<tr role="row" class="odd">

						<td class="text-center">{{ $loop->iteration }}</td>

						@php
						$nama_guru = DB::table('users')->find($kehadiran->user_id)->name;
						@endphp
						<td class="text-center">{{ $nama_guru }}</td>
						<td class="text-center">{{ $kehadiran->created_at->toDateString() }}</td>
						<td class="text-center">
							@php
							$nama_kehadiran = DB::table('kehadiran')->find($kehadiran->kehadiran_id)->nama;
							kehadiran($kehadiran->user_id,$nama_kehadiran);
							@endphp
							{{-- <span class="badge bg-green">{{ $nama_kehadiran }}</span> --}}
						</td>

						<td class="text-center">

						@if ($job_title == 'Kepala Sekolah')
							@switch($kehadiran->verifikasi_ks)
						    @case('Belum Di Verifikasi')
						        <span id="guru-{{ $kehadiran->user_id }}" class="badge bg-red">Belum Di Verifikasi</span>
						    @break

						    @case('Sudah Di Verifikasi')
						        <span id="guru-{{ $kehadiran->user_id }}" class="badge bg-green">Sudah Di Verifikasi</span>
						    @break
						
						    @default
						           
						@endswitch
						@endif

						@if ($job_title == 'Guru Piket')
							@switch($kehadiran->verifikasi_guru_piket)
						    @case('Belum Di Verifikasi')
						        <span id="guru-{{ $kehadiran->user_id }}" class="badge bg-red">Belum Di Verifikasi</span>
						    @break

						    @case('Sudah Di Verifikasi')
						        <span id="guru-{{ $kehadiran->user_id }}" class="badge bg-green">Sudah Di Verifikasi</span>
						    @break
						
						    @default
						           
						@endswitch
						@endif
						
						
							
						</td>

						<td class="text-center">

							@if ($job_title == 'Kepala Sekolah')
								@switch($kehadiran->verifikasi_ks)
							    @case('Belum Di Verifikasi')
							        <button id="verifikasi_ks" class="btn bg-green" data-id="{{ $kehadiran->user_id }}"> <span class="glyphicon glyphicon-ok"> </span> Verifikasi</button>
							     @break

							      @case('Sudah Di Verifikasi')
							        <button id="verifikasi_ks" class="btn bg-red" data-id="{{ $kehadiran->user_id }}"> <span class="glyphicon glyphicon-remove"> </span> Batalkan</button>
							     @break
							
							    @default
							           
							@endswitch
							@endif

							@if ($job_title == 'Guru Piket')
								@switch($kehadiran->verifikasi_guru_piket)
							    @case('Belum Di Verifikasi')
							        <button id="verifikasi_guru_piket" class="btn bg-green" data-id="{{ $kehadiran->user_id }}"> <span class="glyphicon glyphicon-ok"> </span> Verifikasi</button>
							     @break

							      @case('Sudah Di Verifikasi')
							        <button id="verifikasi_guru_piket" class="btn bg-red" data-id="{{ $kehadiran->user_id }}"> <span class="glyphicon glyphicon-remove"> </span> Batalkan</button>
							     @break
							
							    @default				
							@endswitch
							@endif


							
							
							
							<button id="editKehadiran" class="btn bg-blue" data-id="{{ $kehadiran->user_id }}" data-toggle="modal" data-target="#editKehadiranGuru"> <span class="glyphicon glyphicon-edit"> </span> edit </button>
						</td>
					</tr>
					@endforeach



				</tbody>

			</table>
		</div>
	</div>
	@include('users.user.layouts.partials.paginations.pagination', 
	['pagination' => $kehadiran_guru_mapel, 'tabel' => 'Guru'])
</div>
<div class="callout callout-info text-center">
	Ketika Siswa Melakukan Finger, otomatis data akan masuk ke tabel ini dan tabel yang ada di halaman siswa
</div>
</div>

<!-- /.box-body -->
</div>