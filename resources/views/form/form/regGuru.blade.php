<form id="form-registrasi-guru" method="POST" action="{{ url('register/guru') }}" style="padding:3vw">
	{{csrf_field()}}

	<div class="form-group row">
		<div class="col">
			<input name="nik" type="text" class="form-control" required autocomplete="nik" placeholder="NIK">
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
		<button type="button" class="btn btn-secondary" id="btn-login-cancel-guru">Cancel</button>
		<button type="submit" class="btn btn-primary">Registrasi</button>
	</div>
</form>