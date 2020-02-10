<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	@php
	$files1 = '/Project_Laravel/smkaloer/public/img/ujian/'.$dir;
	$scanned_directory = array_diff(scandir($files1), array('..', '.'));
	@endphp

	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page">Foto Untuk Kartu Peserta Ujian</li>
				<li class="breadcrumb-item active" aria-current="page">{{$k}}</li>
			</ol>
		</nav>

		<div class="row row-cols-1 row-cols-md-3">
			@foreach ($scanned_directory as $file)
			<div class="col mb-4">
				<div class="card h-100">
					<img src="/img/ujian/{{$dir}}/{{$file}}" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Nama Lengkap</h5>
						<form action="{{ url('rename/') }}/{{$file}}" method="POST">
							@csrf
							<div class="form-group">
								<p><span class="badge badge-primary" style="padding: 5px;">{{$file}}</span></p>
								<input type="text" class="form-control" id="nama" name="nama">
								<input type="hidden" name="dir" value="/img/ujian/{{$dir}}">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary" style="width:100%">Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	
	@if (session('sukses_ubah_data'))
		<script type="text/javascript">
			alert('Data Berhasil Di Rubah')
		</script>
	@endif

</body>
</html> 
