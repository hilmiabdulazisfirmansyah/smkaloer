<form id="form-registrasi-alumni" method="POST" action="{{ url('register/alumni') }}" style="padding:3vw">
	{{csrf_field()}}
	<div class="form-group row">
		<div class="col">
			<input name="nama_lengkap" type="text" class="form-control" required autocomplete="nama_lengkap" placeholder="Nama Lengkap">
		</div>
	</div>

	<div class="form-group row">
		<div class="col">
			<input name="email" type="email" class="form-control" required autocomplete="email" placeholder="Email">
		</div>
	</div>

	<div class="form-group row">
		<div class="col">
			<input name="password" type="password" class="form-control" required autocomplete="password" placeholder="Password">
		</div>
	</div>

	<div class="form-group row">
		<div class="col">
			<a href="{{ url('/') }}" style="color: #17a2b8">Sudah Punya Akun ?</a>
		</div>
	</div>

	<div class="modal-footer bg-dark text-light" style="border-top-color:#585858">
		<button type="button" class="btn btn-secondary" id="btn-login-cancel-alumni">Cancel</button>
		<button type="submit" class="btn btn-primary">Registrasi</button>
	</div>
</form>