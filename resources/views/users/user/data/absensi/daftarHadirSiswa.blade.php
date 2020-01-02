<div class="box">
	<div class="box-header">
		<h3 class="box-title">Table Detail Kehadiran Siswa</h3>
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
					@foreach ($kehadiran_siswa as $kehadiran)
					<form>
						<tr role="row" class="odd">
							<td class="text-center">{{ $loop->iteration }}</td>

							@php
								$nama_siswa = DB::table('users')->find($kehadiran->user_id)->nama;
							@endphp
							<td class="text-center">{{ $nama_siswa }}</td>
							<td class="text-center">{{ $kehadiran->created_at }}</td>
							<td class="text-center">
								<span class="badge bg-green">{{ $kehadiran->kehadiran_id }}</span>
							</td>

							<td class="text-center">
								<span class="badge bg-red">{{ $kehadiran->verifikasi_guru }}</span>
							</td>

							<td class="text-center">
								<button class="btn bg-green"> Verifikasi </button>
							</td>
						</tr>
					</form>
					@endforeach


				</tbody>

			</table>

		</div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
		<div class="callout callout-info text-center">
			Ketika Siswa Melakukan Finger, otomatis data akan masuk ke tabel ini dan tabel yang ada di halaman siswa
		</div>
	</div>

	<!-- /.box-body -->
</div>