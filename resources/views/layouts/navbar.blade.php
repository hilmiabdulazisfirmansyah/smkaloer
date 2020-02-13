@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		<a class="navbar-brand" href="/" style="border-right: 1px solid grey"><img src="{{ asset('img/favicon.ico') }}" alt="brand-aloer" style="width: 40px;margin-right:14px;"></a>
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Profile Sekolah
					</a>
					<div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
						@include('layouts.dropdown/profilesekolah')
					</div>
				</li>
			</li>
			<li class="nav-item">
				<li class="nav-item">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Jurusan
						</a>
						<div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
							@include('layouts.dropdown/jurusan')
						</div>
					</li>
				</li>
			</li>
			<li class="nav-item">
				<li class="nav-item">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Program Sekolah
						</a>
						<div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
							@include('layouts.dropdown/programsekolah')
						</div>
					</li>
				</li>
			</li>
			<li class="nav-item">
				<li class="nav-item">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Ekstrakulikuler
						</a>
						<div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
							@include('layouts.dropdown/ekskul')
						</div>
					</li>
				</li>
			</li>
			<li class="nav-item">
				<li class="nav-item">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Informasi
						</a>
						<div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
							@include('layouts.dropdown/informasi')
						</div>
					</li>
				</li>
			</li>
			<li class="nav-item">
				<li class="nav-item">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Smart School
						</a>
						<div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
							@include('layouts.dropdown/smartschool')
						</div>
					</li>
				</li>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Kontak</a>
			</li>
		</ul>
		<!-- Button Login -->
		<div class="btn-group">
			
			<button {{$link}} type="button" class="btn btn-dark">
				<img src="{{$avatar}}" class="user-image" alt="User Image" style="width: 20px;border-radius: 20px;margin-right: 10px;margin-top: -2px;height: 20px;">{{$users}}
			</button>

			<div class="input-group-btn {{$logout}}">

				<a href="{{ url("logout") }}" class="btn btn-dark text-light">Logout</a>
			</div>
		</div>
	</div>
</nav>
@endsection