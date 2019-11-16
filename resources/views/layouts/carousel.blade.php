@section('carousel')
<div class="bd-example">
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{('img/TAV.jpg')}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block text-light bg-danger">
					<h5>Teknik Audio Video</h5>
					<p>Metode Pembelajaran yang membahas tentang Elektronik Audio dan Video</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{('img/TKR.jpg')}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block text-light bg-primary">
					<h5>Teknik Kendaraan Ringan</h5>
					<p>Metode Pembelajaran yang membahas tentang Mesin Kendaraan Ringan</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{('img/TKJ.jpg')}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block text-dark bg-warning">
					<h5>Teknik Komputer dan Jaringan</h5>
					<p>Metode Pembelajaran yang membahas tentang Komputer dan Jaringan</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
@endsection