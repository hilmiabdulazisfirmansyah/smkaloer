<style type="text/css">
  .modal-header{
    text-align: center;
    background-color: cadetblue;
    color: white;
  }
</style>

<div class="modal fade" id="modalTambahMapel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Mata Pelajaran</h4>
      </div>
      <div class="modal-body">
        <div class="modal-content-body">
          <form action="{{ url('/tambahMapel') }}" method="POST">
            @csrf
            <div class="form-group">
              <label>Kode Mata Pelajaran</label>
              <input id="kode_mapel" type="text" name="kode_mapel" class="form-control" placeholder="Kode Mapel">
            </div>

            <div class="form-group">
              <label>Nama Mata Pelajaran</label>
              <input id="nama_mapel" type="text" name="nama_mapel" class="form-control" placeholder="Nama Mapel">
            </div>

            <div class="form-group">
              <label>Kelas</label>
              <select class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true" name="kelas_id" id="kelas_id">
                <option selected="selected" value="">Pilih Kelas :</option>
                @php
                $rombel = DB::table('kelas')->get();
                @endphp
                @foreach ($rombel as $kelas)
                <option value="{{$kelas->id}}">{{$kelas->nama}}</option>
                @endforeach
              </select>
            </div>
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

