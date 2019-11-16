<form id="form-registrasi-siswa" method="POST" action="{{ url('register') }}" style="padding:3vw">
	{{csrf_field()}}

	<div class="form-group row">
		<div class="col">
			<input name="nis" id="nis" type="text" class="form-control" required autocomplete="nis" placeholder="NIS">
		</div>
	</div>

	<div class="form-group row">
		<div class="col">
			<input name="email" id="email" type="email" class="form-control" required autocomplete="email" placeholder="Email">
		</div>
	</div>

	<div class="form-group row">
		<div class="col">
			<input name="password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Password">
		</div>
	</div>

	<div class="form-group row">
		<div class="col">
			<a href="{{ url('/') }}" style="color: #17a2b8">Sudah Punya Akun ?</a>
		</div>
	</div>

	<div class="modal-footer bg-dark text-light" style="border-top-color:#585858">
		<button type="button" class="btn btn-secondary" id="btn-login-cancel-siswa">Cancel</button>
		<button type="submit" class="btn btn-primary">Registrasi</button>
	</div>
</form>