<div class="table-responsive-sm" style="margin:auto;">
	<table class="table table-sm table-hover table-bordered" style="display: ruby;">
		<thead class="thead-dark text-center">
			<tr>
				<th scope="col">No</th>
				<th scope="col">NIK</th>
				<th scope="col">NIS</th>
				<th scope="col">NISN</th>
				<th scope="col">Nama Lengkap</th>
				<th scope="col">Jenis Kelamin</th>
				<th scope="col">Agama</th>
				<th scope="col">Tempat Lahir</th>
				<th scope="col">Tanggal Lahir</th>
				<th scope="col" hidden="true">Alamat Lengkap</th>
				<th scope="col">Rombel</th>
				<th scope="col" hidden="true">Ibu Kandung</th>
				<th scope="col" hidden="true">Alamat Ibu Kandung</th>
				<th scope="col">Asal Sekolah</th>
				<th scope="col" hidden="true">Waktu Pendaftaran</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data_siswa as $siswa)
			<tr>
				<td scope="row" class="text-center">{{$loop->iteration}}</td>
				<td>{{$siswa->NIK}}</td>
				<td>{{$siswa->NIS}}</td>
				<td>{{$siswa->NISN}}</td>
				<td>{{$siswa->nama_lengkap}}</td>
				<td class="text-center">{{$siswa->jenis_kelamin}}</td>
				<td>{{$siswa->agama}}</td>
				<td>{{$siswa->tempat_lahir}}</td>
				<td>{{$siswa->tanggal_lahir}}</td>
				<td hidden="true">{{$siswa->alamat}} {{$siswa->rt}} {{$siswa->rw}} {{$siswa->desa}} {{$siswa->kecamatan}} {{$siswa->kabupaten}} {{$siswa->provinsi}}</td>
				<td>{{$siswa->rombel}}</td>
				<td hidden="true">{{$siswa->ibu_kandung}}</td>
				<td hidden="true">{{$siswa->alamat_ibu_kandung}}</td>
				<td>{{$siswa->asal_sekolah}}</td>
				<td hidden="true">{{$siswa->created_at}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>