<div class="box">
<div class="box-header">
<h3 class="box-title">Daftar Mata Pelajaran</h3>
<div style="float:right;"><button id="tambahMapel" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalTambahMapel">Tambah</button></div class="float-right">
</div>
<!-- /.box-header -->
<div class="box-body">
<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable text-center" role="grid" aria-describedby="example2_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Kode Mapel</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Nama Mapel</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Kelas</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th>
</tr>
</thead>
<tbody>

@php
  $mapel = DB::table('mapel')->get();
@endphp

@foreach ($mapel as $daftarMapel)

<tr id="mapel-{{$daftarMapel->id}}" role="row" class="odd">
<td class="sorting_1">{{$loop->iteration}}</td>
<td>{{$daftarMapel->kode_mapel}}</td>
<td>{{$daftarMapel->nama_mapel}}</td>

@php
  $kelas = DB::table('kelas')->where('id', '=', $daftarMapel->kelas_id)->get();
@endphp

@foreach ($kelas as $namaKelas)
<td>{{$namaKelas->nama}}</td>
@endforeach

<td>
  <button id="editMapel" type="button" class="btn btn-info" data-toggle="modal" data-target="#modalTambahMapel" data-id="{{$daftarMapel->id}}">edit</button>
  <button id="deleteMapel" type="button" class="btn btn-danger" data-id="{{$daftarMapel->id}}">Hapus</button>
</td>
</tr>
@endforeach

</tbody>

</table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Halaman 1 dari {{$mapel->count()}} Halaman</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Sebelumnya</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Selanjutnya</a></li></ul></div></div></div></div>
</div>
<!-- /.box-body -->
</div>