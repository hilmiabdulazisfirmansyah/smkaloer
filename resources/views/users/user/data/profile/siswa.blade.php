@php
$provinsi = Storage::disk('local')->get('provinsi.json');
$kabupaten = Storage::disk('local')->get('kabupaten.json');
$kecamatan = Storage::disk('local')->get('kecamatan.json');
$desa = Storage::disk('local')->get('desa.json');

$provinsi = json_decode($provinsi, true);
$kabupaten = json_decode($kabupaten, true);
$kecamatan = json_decode($kecamatan, true);
$desa = json_decode($desa, true);


foreach ($provinsi as $prov) {
	if ($prov['id'] == $provinsi_siswa) {
		$provinsi_siswa = $prov['nama_provinsi'];
	}
}

foreach ($kabupaten as $kab) {
	if ($kab['id'] == $kabupaten_siswa) {
		$kabupaten_siswa = $kab['nama_kabupaten'];
	}
}

foreach ($kecamatan as $kec) {
	if ($kec['id'] == $kecamatan_siswa) {
		$kecamatan_siswa = $kec['nama_kecamatan'];
		$id_kec = $kec['id'];
	}
}

$desa = getListDesa($id_kec ?? '');

foreach ($desa as $des) {
	if ($des['id_desa'] == $desa_siswa) {
		$desa_siswa = $des['nama_desa'];
	}
}

@endphp

<tr>
	<td class="col-md-4">Tanggal Pendaftaran</td>
	<td class="col-md-5">{{ $tanggal_pendaftaran }}</td>
</tr>
<tr>
	<td>Tanggal Lahir</td>
	<td>{{ $tanggal_lahir_siswa }}</td>
</tr>
<tr>
	<td>Nomor Handphone</td>
	<td contenteditable="true">{{ $no_hp_siswa }}</td>
</tr>
<tr>
	<td>Agama</td>
	<td>{{ $agama_siswa }}</td>
</tr>
<tr>
	<td>Email</td>
	<td>{{ $email_siswa }}</td>
</tr>
</tbody>
</table>
</div></div>

<div class="tshadow mb25 bozero">

	

	<h3 class="pagetitleh2">Alamat</h3>

	

	<div class="table-responsive around10 pt0">
		<table class="table table-hover table-striped"><tbody>
			<tr>
				<td>Alamat</td>
				<td>{{ $alamat_siswa }} RT {{ $rt_siswa }} RW {{ $rw_siswa }}</td>
			</tr>

			<tr>
				<td>Provinsi</td>
				<td>
					{{ $provinsi_siswa }}
				</td>
			</tr>
			<tr>
			</form>

			<td>Kabupaten</td>
			<td>
				{{ $kabupaten_siswa }}
			</td>
		</tr>

		<tr>
			<td>Kecamatan</td>
			<td>
				{{ $kecamatan_siswa }}
			</td>
		</tr>


		<tr>
			<td>Desa</td>
			<td>
				{{ $desa_siswa }}
			</td>
		</tr>


	</tbody>
</table>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editAlamat" style="float: right;">
	<i class="fa fa-edit"></i> Edit Alamat
</button>

</div>
</div>

@include('users.user.data.profile.ortu')

<div class="tshadow mb25  bozero">
	<h3 class="pagetitleh2">Data Lainnya</h3>
	<div class="table-responsive around10 pt0">
		<table class="table table-hover table-striped">
			<tbody>
				<tr>
					<td class="col-md-4">Golongan Darah</td>
					<td class="col-md-5">-</td>
				</tr>
				<tr>
					<td class="col-md-4">Warna Rumah</td>
					<td class="col-md-5">-</td>
				</tr>
				<tr>
					<td class="col-md-4">Tinggi Badan</td>
					<td class="col-md-5">-</td>
				</tr>
				<tr>
					<td class="col-md-4">Berat Badan</td>
					<td class="col-md-5">-</td>
				</tr>
				<tr>
					<td class="col-md-4">Asal Sekolah</td>
					<td class="col-md-5">{{ $asal_sekolah }}</td>
				</tr>
				<tr>
					<td class="col-md-4">Nomor Induk Kependudukan</td>
					<td class="col-md-5">{{ $nik_siswa }}</td>
				</tr>
				<tr>
					<td>Nomor Rekening</td>
					<td>-</td>
				</tr>
				<tr>
					<td>Nama Bank</td>
					<td>-</td>
				</tr>
			</tbody>
			
