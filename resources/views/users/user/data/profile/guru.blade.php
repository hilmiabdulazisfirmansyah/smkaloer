<div class="tshadow mb25 bozero">
<h3 class="pagetitleh2">Data Diri</h3>
<div class="table-responsive around10 pt0">
<tr>
<td class="col-md-4">Tanggal Pendaftaran</td>
<td class="col-md-5">{{auth()->user()->created_at->toDateString()}}</td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td>{{auth()->user()->guru->tanggal_lahir}}</td>
</tr>
<tr>
<td>Nomor Handphone</td>
<td contenteditable="true">{{auth()->user()->guru->no_hp}}</td>
</tr>
<tr>
<td>Agama</td>
<td>{{auth()->user()->guru->agama}}</td>
</tr>
<tr>
<td>Email</td>
<td>{{auth()->user()->email}}</td>
</tr>
</tbody>
</table>
</div></div>

<div class="tshadow mb25 bozero">
<h3 class="pagetitleh2">Alamat </h3>
<div class="table-responsive around10 pt0">
<table class="table table-hover table-striped"><tbody>
<tr>
<td>Alamat</td>
<td>{{strtoupper(auth()->user()->guru->alamat_jalan)}} RT 0{{auth()->user()->guru->rt}} RW 0{{auth()->user()->guru->rw}}</td>
</tr>
<tr>
<td>Desa</td>
<td>{{auth()->user()->guru->desa}}</td>
</tr>
<tr>
<td>Kecamatan</td>
<td>{{auth()->user()->guru->kecamatan}}</td>
</tr>
<tr>
<td>Kabupaten</td>
<td>{{auth()->user()->guru->kabupaten}}</td>
</tr>
<tr>
<td>Provinsi</td>
<td>{{auth()->user()->guru->provinsi}}</td>
</tr>
</tbody>
</table>