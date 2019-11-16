<div class="box ui-sortable-handle" style="position: relative; left: 0px; top: 0px;">
  <div class="box-header">
    <h3 class="box-title">Data Siswa</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
      <thead>
        <tr role="row" style="
        "><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="
        text-align: center;
        padding: 2vw;
        ">No</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="
        text-align: center;
        padding: 1vw;
        ">Nama Lengkap</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="
        text-align: center;
        padding: 2vw;
        ">NIK</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="
        text-align: center;
        padding: 2vw;
        ">J/K</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="
        text-align: center;
        padding: 2vw;
        ">agama</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="
        text-align: center;
        padding: 1vw;
        ">Tempat Lahir</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="
        text-align: center;
        padding: 1vw;
        ">Tanggal Lahir</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="
        text-align: center;
        padding: 2vw;
        ">Alamat</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="
        text-align: center;
        padding: 2vw;
        ">Jurusan</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="
        text-align: center;
        padding: 1vw;
        ">Ibu Kandung</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="
        text-align: center;
        padding: 1vw;
        ">Asal Sekolah</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="
        text-align: center;
        padding: 1vw;
        ">Tanggal Pendaftaran</th></tr>
      </thead>
      <tbody>
        @foreach ($siswa_baru as $siswa)
        <tr role="row" class="odd">
          <td class="sorting_1">{{$loop->iteration}}</td>
          <td>{{$siswa->nama_lengkap}}</td>
          <td>{{$siswa->NIK}}</td>
          <td>{{$siswa->jenis_kelamin}}</td>
          <td>{{$siswa->agama}}</td>
          <td>{{$siswa->tempat_lahir}}</td>
          <td>{{$siswa->tanggal_lahir}}</td>
          <td>{{$siswa->alamat}}</td>
          <td>{{$siswa->jurusan}}</td>
          <td>{{$siswa->ibu_kandung}}</td>
          <td>{{$siswa->asal_sekolah}}</td>
          <td>{{$siswa->created_at}}</td>
        </tr>
        @endforeach
      </tbody>
    </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
  </div>
  <!-- /.box-body -->
</div>