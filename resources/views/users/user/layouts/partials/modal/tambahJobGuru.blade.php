<style type="text/css">
  .modal-header{
    text-align: center;
    background-color: cadetblue;
    color: white;
  }
</style>

<div class="modal fade" id="modalTambahJobGuru" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalCenterTitle">Tambah JobGuru Pelajaran</h4>
      </div>
      <div class="modal-body">
        <div class="modal-content-body">
          <form action="{{ url('/tambahJobGuru') }}" method="POST">
            @csrf

          <div class="form-group">
           <label>Nama Guru</label>
           <select class="form-control select2 JobGuruNama" style="width: 100%;"  tabindex="-1" aria-hidden="true" placeholder="Pilih Nama Guru" name="nama" id="jobGuruNama">
            <option value="default">Pilih Nama Guru :</option>
            @php
            $guru = DB::table('guru')->orderBy('nama', 'asc')->get();
            @endphp
            @foreach ($guru as $daftarGuru)
            <option value="{{$daftarGuru->nama}}">{{$daftarGuru->nama}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Tugas Tambahan</label>
          <select class="form-control select2 JobGuru" style="width: 100%;"  tabindex="-1" aria-hidden="true" placeholder="Pilih Tugas Tambahan" name="title" id="jobGuruTitle">
            <option value="default">Pilih Tugas Tambahan :</option>
            @php
            $daftarjob = DB::table('job_title')->orderBy('nama', 'asc')->get();
            @endphp
            @foreach ($daftarjob as $job)
            <option value="{{$job->nama}}">{{$job->nama}}</option>
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

