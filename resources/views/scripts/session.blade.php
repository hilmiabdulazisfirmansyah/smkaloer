@if(session('sukses_tambah_data'))
<script type="text/javascript">
alertify.set('notifier','position', 'top-center');
alertify.success('Data Berhasil Di Tambahkan');
</script>
@endif

@if(session('sukses_ubah_data'))
<script type="text/javascript">
alertify.set('notifier','position', 'top-center');
alertify.success('Data Berhasil di perbaharui');
</script>
@endif

@if(session('email_sudah_terdaftar'))
<script type="text/javascript">	
alertify.set('notifier','position', 'top-center');
alertify.error('Email yang anda gunakan Sudah Terdaftar');
</script>
@endif

@if(session('email_belum_terdaftar'))
<script type="text/javascript">	
alertify.set('notifier','position', 'top-center');
alertify.error('Email yang anda masukkan belum Terdaftar di SmartApp');
</script>
@endif

@if(session('nik_tidak_terdaftar'))
<script type="text/javascript">	
alertify.set('notifier','position', 'top-center');
alertify.error('NIK yang anda masukkan tidak terdaftar di Dapodik jika terjadi kesalahan data segera hubungi operator sekolah');
</script>
@endif

@if(session('password_salah'))
<script type="text/javascript">	
alertify.set('notifier','position', 'top-center');
alertify.error('Email atau Password yang anda masukkan Salah');
</script>
@endif

@if(session('email_salah'))
<script type="text/javascript">	
alertify.set('notifier','position', 'top-center');
alertify.error('Email yang anda masukkan Salah');
</script>
@endif

@if(session('berhasil_login'))
<script type="text/javascript">	
alertify.set('notifier','position', 'top-center');
alertify.success('Selamat Datang Di Sekolah Kami');
</script>
@endif