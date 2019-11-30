<style type="text/css">
  .modal-header{
    text-align: center;
    background-color: cadetblue;
    color: white;
  }
</style>

<div class="modal fade" id="modalTambahJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Jadwal Pelajaran</h4>
      </div>
      <div class="modal-body">
        <div class="modal-content-body">
          <form id="tambahJadwal" action="{{ url('/tambahJadwal') }}" method="POST">
            @csrf

            <div class="form-group">
             <label>Nama Guru</label>
             <select class="form-control select2 select2-hidden-accessible jadwalnamaguru" style="width: 100%;"  tabindex="-1" aria-hidden="true" placeholder="Pilih Nama Guru">
              @php
              $guru = DB::table('guru')->get();
              @endphp
              @foreach ($guru as $daftarGuru)
              <option value="{{$daftarGuru->id}}">{{$daftarGuru->nama}}</option>
              @endforeach
            </select>
          </div>

          <div class="callout callout-info callout-guru" style="display: none">
            <p>Guru Mapel : <span id="get_guru"></span></p>
          </div>

          <div class="form-group">
            <label>Mata Pelajaran</label>
            <select class="form-control select2 select2-hidden-accessible jadwalmapel" style="width: 100%;"  tabindex="-1" aria-hidden="true" name="mapel_id" id="mapel_id" multiple="multiple">
              <option value="default">Pilih Mapel :</option>
              @php
              $mapel = DB::table('mapel')->get();
              @endphp
              @foreach ($mapel as $daftarMapel)
              <option value="{{$daftarMapel->id}}">{{$daftarMapel->kode_mapel}}</option>
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

