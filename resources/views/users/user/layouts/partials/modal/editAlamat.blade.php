@php
$provinsi = Storage::disk('local')->get('provinsi.json');
$kabupaten = Storage::disk('local')->get('kabupaten.json');
$kecamatan = Storage::disk('local')->get('kecamatan.json');
$desa = Storage::disk('local')->get('desa.json');

$provinsi = json_decode($provinsi, true);
$kabupaten = json_decode($kabupaten, true);
$kecamatan = json_decode($kecamatan, true);
$desa = json_decode($desa, true);
@endphp

<style type="text/css">
  .modal-header{
    text-align: center;
    background-color: cadetblue;
    color: white;
  }

  .form-control, .input-group{
    margin-bottom: 3vh;
  }

</style>

<div class="modal fade" id="editAlamat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalCenterTitle">Edit Alamat</h4>
      </div>
      <div class="modal-body">
        <div class="modal-content-body">

          <form action="{{ url('/alamat') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{$user_id}}">
            <div class="input-group">
              <span class="input-group-addon" style="background-color: #ddd">Alamat</span>
              <input type="text" name="alamat_jalan" class="form-control" placeholder="Alamat" value="{{ $alamat_siswa }}">
            </div>

            <div class="input-group">
              <span class="input-group-addon" style="background-color: #ddd">RT</span>
              <input type="text" name="rt" class="form-control" value="{{ $rt_siswa }}">

              <span class="input-group-addon" style="background-color: #ddd">RW</span>
              <input type="text" name="rw" class="form-control" value="{{ $rw_siswa }}">
            </div>

            <select name="id_provinsi" id="provinsi" class="form-control form-control-sm">

              @if ($provinsi_siswa == null || $provinsi_siswa == 0)
                  <option value="{{0}}"> Pilih Provinsi : </option>
              @endif

              @foreach ($provinsi as $prov)
              
              @if ($prov['id'] == $provinsi_siswa)
                  <option value="{{ $prov['id'] }}">{{ $prov['nama_provinsi'] }}</option>
              @endif
              
              @endforeach

              @foreach ($provinsi as $prov)
              <option value="{{ $prov['id'] }}">{{ $prov['nama_provinsi'] }}</option>
              @endforeach

            </select>

            <select name="id_kabupaten" id="kabupaten" class="form-control form-control-sm">
              @if ($kabupaten_siswa == null || $kabupaten_siswa == 0)
                  <option value="{{0}}">Pilih Kabupaten :</option>
              @endif

              @foreach ($kabupaten as $kab)
              
              @if ($kab['id'] == $kabupaten_siswa)
                  <option value="{{ $kab['id'] }}">{{ $kab['nama_kabupaten'] }}</option>
              @endif
              
              @endforeach

            </select>

            <select name="id_kecamatan" id="kecamatan" class="form-control form-control-sm">
            

              @if ($kecamatan_siswa == null || $kecamatan_siswa == 0)
                    <option value="{{0}}">Pilih Kecamatan :</option>
              @endif

              @foreach ($kecamatan as $kec)
              
              @if ($kec['id'] == $kecamatan_siswa)
                  <option value="{{ $kec['id'] }}">{{ $kec['nama_kecamatan'] }}</option>
              @endif
              
              @endforeach


            </select>

            <select name="id_desa" id="desa" class="form-control form-control-sm">
              <option value="{{0}}">Pilih Desa :</option>
            </select>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary simpanAlamat">Simpan</button>
        </div>

      </form>
    </div>
  </div>
</div>

