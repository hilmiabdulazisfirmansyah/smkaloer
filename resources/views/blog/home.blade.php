@extends('layouts.master')
@section('title','SMK ALOER WARGAKUSUMAH')
@extends('layouts.header')
@extends('layouts.navbar')
@extends('layouts.carousel')
@extends('form.Siswa')

@section('content')

@include('blog.posts.postingan')


<div class="card-deck">
  <div class="card">
    <div class="mx-auto mt-5">
        <div class="rounded-circle" style="background-color:#ccc;background-image: url('{{('img/alur.png')}}');height: 8vw;width: 8vw;background-position: center;background-repeat: no-repeat;background-size: 3vw;">
        </div>
    </div>
    <div class="card-body text-wrap text-justify">
        <h5 class="card-title text-center">Alur Pendaftaran</h5>
        <h6 class="card-title text-center">Informasi Mengenai Alur pendaftaran Sistem PPDB online Silahkan pelajari terlebih dahulu</h6>
        <ol class="collapse" id="more0">
            <li>Calon Siswa melakukan entri pengajuan PENDAFTARAN secara online melalui situs PPDB Online</li>
            <li>Cetak Tanda Bukti PENDAFTARAN</li>
            <li>Mempersiapkan kelengkapan berkas sesuai dengan ketentuan</li>
            <li>Calon siswa datang ke sekolah tujuan untuk melakukan VERIFIKASI PENDAFTARAN dengan membawa tanda </li>
            <li>bukti pengajuan pendaftaran dan kelengkapan berkas</li>
            <li>Panitia menerima dan melakukan VERIFIKASI BERKAS siswa</li>
            <li>Operator melakukan VERIFIKASI PENDAFTARAN</li>
            <li>Calon siswa menerima tanda bukti VERIFIKASI PENDAFTARAN</li>
            <li>Calon siswa melihat pengumuman HASIL AKHIR secara online di situs</li>
        </ol>
        <div class="btn btn-dark btn-lg btn-block" data-toggle="collapse" href="#more0" role="button" aria-expanded="false" aria-controls="more0" style="cursor:pointer">
          <small class="text-muted">Lihat Selengkapnya</small>
      </div>
  </div>
</div>
<div class="card">
    <div class="mx-auto mt-5">
        <div class="rounded-circle" style="background-color:#ccc;background-image: url('{{('img/syarat.png')}}');height: 8vw;width: 8vw;background-position: center;background-repeat: no-repeat;background-size: 3vw;">
        </div>
    </div>
    <div class="card-body text-wrap text-justify">
        <h5 class="card-title text-center">Syarat Pendaftaran</h5>
        <h6 class="card-title text-center">Berikut ini adalah syarat dan ketentuan yang harus dipenuhi oleh calon pendaftar</h6>
        <div class="card-text collapse" id="more1">
            <ol>
                <li>Fotocopy Ijazah</li>
                <li>Fotocopy SKHUN</li>
                <li>Pas Photo</li>
                <li>Fotocopy KK</li>
            </ol>
            <ul class="font-italic">
                <li>Catatan : Untuk Jalur Bantuan Lampirkan Fotocopy Kartu Bantuan yang digunakan (KIP, KPS, SKTM, dll)</li>
                <li>Untuk jalur beasiswa lampirkan sertifikat atau piagam yang dimiliki baik akademis maupun non-akademis</li>
            </ul>
        </div>
        <div class="btn btn-dark btn-lg btn-block" data-toggle="collapse" href="#more1" role="button" aria-expanded="false" aria-controls="more1" style="cursor:pointer">
          <small class="text-muted">Lihat Selengkapnya</small>
      </div>
  </div>
</div>
<div class="card">
    <div class="mx-auto mt-5 ">
        <div class="rounded-circle" style="background-color:#ccc;background-image: url('{{('img/panduan.png')}}');height: 8vw;width: 8vw;background-position: center;background-repeat: no-repeat;background-size: 3vw;">
        </div>
    </div>
    <div class="card-body text-wrap text-justify">
        <h5 class="card-title text-center">Panduan Pendaftaran</h5>
        <h6 class="card-title text-center">Untuk mendapat informasi yang lebih lengkap panduan penggunaan PPDB Online</h6>
        <div class="card-text collapse" id="more2">
            <ol>
                <li>Siswa Membuka Web</li>
                <li>Calon Siswa Terlebih dahulu melihat ataupun mendownload pengumuman bagaimana alur proses pendaftaran dan syarat yang harus di penuhi yang berada pada menu pengumuman atau di Halaman paling bawah</li>
                <li>Calon Siswa melakukan pendaftaran dan memilih jalur pendaftaran yang akan dipilih sesuai kriteria sekolah yaitu jalur beasiswa (akademik/non-akademik) jalur regular, jalur anak yatim, dan jalur bantuan</li>
                <li>Setelah itu calon siswa menginput data serta upload persyaratan yang harus dipenuhi</li>
                <li>Calon siswa mencetak formulir pendaftaran sebagai bukti untuk melakukan test offline</li>
                <li>Calon siswa dapat mencari data untuk memastikan telah melakukan pendaftaran dengan keterangan belum dikonfirmasi</li>
            </ol>
        </div>
        <div class="btn btn-dark btn-lg btn-block" data-toggle="collapse" href="#more2" role="button" aria-expanded="false" aria-controls="more2" style="cursor:pointer">
          <small class="text-muted">Lihat Selengkapnya</small>
      </div>
  </div>
</div>
</div>
    

@endsection
@extends('layouts.footer')
@extends('scripts.script')