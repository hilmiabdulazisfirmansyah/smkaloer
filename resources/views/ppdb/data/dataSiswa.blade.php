{{-- // di halaman ini sistem akan menampilkan data-data siswa yang mendaftar (online/offline)
// data akan ditampilkan secara minimal atau data mini
// berikut adalah data mini --}}
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">INFO SISWA BARU</h3>

				<div class="box-tools">
					<div class="input-group input-group-sm hidden-xs" style="width: 150px;">
						<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

						<div class="input-group-btn">
							<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive no-padding">
				<table class="table table-hover">
					<tbody><tr>
						<th>NO</th>
						<th>Nama Lengkap</th>
						<th>Tanggal Pendaftaran</th>
						<th>Status</th>
						<th>Keterangan</th>
					</tr>
					@foreach ($siswa_baru as $siswa)			
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$siswa->nama_lengkap}}</td>
						<td>{{$siswa->created_at}}</td>
						<td><span class="label label-success">{{$siswa->status}}</span></td>
						<td>{{$siswa->keterangan}}</td>
					</tr>
					@endforeach
				</tbody></table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
</div>

{{-- // namun ADMIN bisa melihat data penuh dari siswa dengan cara meng-KLIK nama SISWA tersebut
	// berikut adalah data penuh --}}
	{{-- @foreach ($siswa_baru as $siswa)
	{{$siswa->nama_lengkap}}
	{{$siswa->email}}
	{{$siswa->NIK}}
	{{$siswa->NIS}}
	{{$siswa->NISN}}
	{{$siswa->jenis_kelamin}}
	{{$siswa->agama}}
	{{$siswa->tempat_lahir}}
	{{$siswa->tanggal_lahir}}
	{{$siswa->alamat}}
	{{$siswa->rt}}
	{{$siswa->rw}}
	{{$siswa->provinsi}}
	{{$siswa->kabupaten}}
	{{$siswa->kecamatan}}
	{{$siswa->desa}}
	{{$siswa->jurusan}}
	{{$siswa->ibu_kandung}}
	{{$siswa->alamat_ibu}}
	{{$siswa->asal_sekolah}}
	{{$siswa->created_at}}
	@endforeach --}}
{{-- //adapun fitur yang disediakan untuk halaman ini adalah 
	//TERIMA dan TOLAK --}}

	{{-- TERIMA --}}
{{-- // admin ppdb bertugas untuk memverifikasi siswa baru
// jika siswa tersebut di TERIMA maka ADMIN harus memberikan nomor NIS untuk Siswa Tersebut
// kemudian SISTEM akan memasukkan ke database
// setelah itu SISTEM akan mengirimkan email kepada siswa yang mendaftar
// maka pendaftaran pun berhasil dilakukan --}}

{{-- TOLAK --}}
{{-- // jika siswa di TOLAK
// maka sistem akan menampilkan form alasan mengapa siswa tersebut ditolak, form tersebut di isi oleh ADMIN
// setelah di isi oleh admin,
// kemudian sistem akan menghapus data siswa yang bersangkutan
// kemudian sistem akan mengirimkan email beserta alasan siswa tersebut ditolak --}}