@if ($users == 'Siswa')
@php
$provinsi = Storage::disk('local')->get('provinsi.json');
$kabupaten = Storage::disk('local')->get('kabupaten.json');
$desa = Storage::disk('local')->get('desa.json');

$provinsi = json_decode($provinsi, true);
$kabupaten = json_decode($kabupaten, true);
$desa = json_decode($desa, true);
@endphp

<style type="text/css">
  #listKecamatan{position: absolute;z-index: 100;margin-top: 4vh;}
</style>

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
  
  <div class="input-group">

    <span class="input-group-addon" style="background-color: #ddd">Provinsi </span>
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

  </div>
  
  <div class="input-group"> 
    <span class="input-group-addon" style="background-color: #ddd">Kabupaten </span>
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
  </div>
  
  <div class="input-group">
    <span class="input-group-addon" style="background-color: #ddd">Kecamatan </span>
    
    <input type="text" id="kecamatan" class="form-control" placeholder="Masukkan Nama Kecamatan">
    <input type="hidden" name="kode_wilayah" value="" id="id_kecamatan">
    <ul class="list-group" id="listKecamatan"></ul>

  </div>
  
  <div class="input-group">
    <span class="input-group-addon" style="background-color: #ddd">Desa </span>
    
    <input type="text" name="desa_kelurahan" id="desa" class="form-control" placeholder="Masukkan Nama desa">

  </div>


<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
  <button type="submit" class="btn btn-primary simpanAlamat">Simpan</button>
</div>

</form>
@endif
