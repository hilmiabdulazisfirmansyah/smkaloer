<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page">Persiapan Foto Kartu Ujian</li>
			</ol>
		</nav>
		
		<div class="list-group">
			<a href="{{ url('ujian/tav') }}" class="list-group-item list-group-item-action active bg-primary">
				XII TAV
			</a>
			<a href="{{ url('ujian/tkj1') }}" class="list-group-item list-group-item-action bg-warning">XII TKJ 1</a>
			<a href="{{ url('ujian/tkj2') }}" class="list-group-item list-group-item-action bg-warning">XII TKJ 2</a>
			<a href="{{ url('ujian/tkj3') }}" class="list-group-item list-group-item-action bg-warning">XII TKJ 3</a>
			<a href="{{ url('ujian/tkj4') }}" class="list-group-item list-group-item-action bg-warning">XII TKJ 4</a>
			<a href="{{ url('ujian/tkr') }}" class="list-group-item list-group-item-action bg-danger text-light">XII TKR</a>
		</div>
	</div>
	

	
</body>
</html> 
