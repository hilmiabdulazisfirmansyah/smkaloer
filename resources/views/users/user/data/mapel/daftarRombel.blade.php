<div class="box">
<div class="box-header">
<h3 class="box-title">Daftar Rombel</h3>
<div style="float:right;"><button id="tambahRombel" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalTambahRombel">Tambah</button></div class="float-right">
</div>
<!-- /.box-header -->
<div class="box-body text-center">
<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable text-center" role="grid" aria-describedby="example2_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Kelas</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Jurusan</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Bagian</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th>
</tr>
</thead>
<tbody>

@php
	$rombel = DB::table('rombel')->get();
@endphp

@foreach ($rombel as $r)
<tr role="row" class="odd">
<td class="sorting_1">{{$loop->iteration}}</td>
<td>{{$r->nama_kelas}}</td>
<td>{{$r->nama_jurusan}}</td>
<td>{{$r->nama_bagian}}</td>
<td style="text-align: center;">
  <button id="editRombel" type="button" class="btn btn-info" data-toggle="modal" data-target="#modalTambahRombel" data-id="{{$r->id}}">edit</button>
  <button id="deleteRombel" type="button" class="btn btn-danger" data-id={{$r->id}}>Hapus</button>
</td>
</tr>
@endforeach



</tbody>

</table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Halaman 1 dari 0 Halaman</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Sebelumnya</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Selanjutnya</a></li></ul></div></div></div></div>
</div>
<!-- /.box-body -->
</div>