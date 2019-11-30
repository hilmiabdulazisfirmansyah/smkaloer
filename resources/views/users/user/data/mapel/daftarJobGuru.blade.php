<div class="box">
<div class="box-header">
<h3 class="box-title">Daftar Tugas Guru</h3>
<div style="float:right;"><button id="tambahJobGuru" type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalTambahJobGuru">Tambah</button></div class="float-right">
</div>
<!-- /.box-header -->
<div class="box-body">
<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable text-center" role="grid" aria-describedby="example2_info">
<thead>
<tr role="row">
	<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Nama Guru</th>
	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tugas Tambahan</th>
	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th>
</tr>
</thead>
<tbody>

<tr id="JobGuru-id" role="row" class="odd">

@php
	$daftarGuru = DB::table('jobguru');
	$jumlahGuru = $daftarGuru->count();
	$page = $_GET['page'] ?? 0;
	if (isset($page)) {
		$x = $page-1;
	}
	// hitung jumlah guru
	// jika lebih dari 1 maka buat paginate
	// jika kurang paginate menghilang
	// paginate akan mengubah fungsi take menjadi
@endphp


@foreach ($daftarGuru->take($jumlahGuru)->offset($x)->limit(10)->get() as $guru)
<td class="sorting_1">{{$loop->iteration}}</td>
<td>{{$guru->nama}}</td>
<td>{{$guru->title}}</td>

<td>
<button id="editJobGuru" type="button" class="btn btn-info" data-toggle="modal" data-target="#modalTambahJobGuru" data-id="{{$guru->id}}">edit</button>
<button id="deleteJobGuru" type="button" class="btn btn-danger" data-id="{{$guru->id}}" data-nama="{{$guru->nama}}">Hapus</button>
</td>
</tr>
@endforeach


</tbody>

@php
	$paginate = DB::table('jobguru')->paginate(10);
@endphp

</table></div></div><div class="row"><div class="col-sm-5">
	<div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
		Halaman {{$paginate->onFirstPage()}} dari {{$paginate->lastpage()}} Halaman | Jumlah Data : <span id="jmlGuru">{{$jumlahGuru}}</span>
	</div>
</div>
{{$paginate->links()}}


</div></div>



</div>

<!-- /.box-body -->
</div>