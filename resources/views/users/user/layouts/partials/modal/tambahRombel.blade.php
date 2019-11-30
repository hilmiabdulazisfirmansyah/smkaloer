<style type="text/css">
  .modal-header{
    text-align: center;
    background-color: cadetblue;
    color: white;
  }
</style>

<div class="modal fade" id="modalTambahRombel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Rombongan Belajar</h4>
      </div>
      <div class="modal-body">
        <div class="modal-content-body">
          <form action="{{ url('tambahRombel') }}" method="POST">
            @csrf
            <div class="form-group">
              <label>Kelas</label>
              <input id="nama_kelas" type="text" name="nama_kelas" class="form-control" placeholder="Nama Kelas Contoh : X, XI, XII">
            </div>

            <div class="form-group">
              <label>Jurusan</label>
              <input id="nama_jurusan" type="text" name="nama_jurusan" class="form-control" placeholder="Nama Jurusan Contoh: TKJ, TAV, TKR">
            </div>

            <div class="form-group">
              <label>Bagian</label>
              <input id="nama_bagian" type="text" name="nama_bagian" class="form-control" placeholder="Nama Bagian Contoh : 1">
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

