@foreach ($ortu_siswa as $ortu)
<div class="tshadow mb25 bozero">
	<h3 class="pagetitleh2">Data Orang Tua / Wali</h3>
	<div class="table-responsive around10 pt0">
		<table class="table table-hover table-striped">
			<tbody><tr>
				<td class="col-md-4">Nama Ayah</td>

				<td class="col-md-5">{{ $ortu->nama_ayah }}</td>
				<td rowspan="3"><img class="profile-user-img img-responsive img-circle" src="{{ url('auth()->user()->avatar') }}"></td>
			</tr>
			<tr>
				<td>Nomor HP Ayah</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Pekerjaan Ayah</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Nama Ibu</td>
				<td>{{ $ortu->nama_ibu_kandung }}</td>
				<td rowspan="3"><img class="profile-user-img img-responsive img-circle" src="{{ url('auth()->user()->avatar') }}"></td>
			</tr>
			<tr>
				<td>Nomor HP Ibu</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Pekerjaan Ibu</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Nama Wali</td>
				<td>{{ $ortu->nama_wali }}</td>
				<td rowspan="3"><img class="profile-user-img img-responsive img-circle" src="{{auth()->user()->avatar}}"></td>
			</tr>
			<tr>
				<td>Email Wali</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Hubungan dengan Wali</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Handhone Wali</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Pekerjaan Wali</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Alamat Wali</td>
				<td>-</td>
			</tr>
		</tbody>
	</table>
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editDataOrtu" style="float: right;">
	<i class="fa fa-edit"></i> Edit Data Orang Tua
</button>
</div>
@endforeach