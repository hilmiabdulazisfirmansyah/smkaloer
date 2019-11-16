	{{ csrf_field() }}
	<div class="form-group row">
		<label for="inputNIS" class="col-sm-2 col-form-label"><span class="oi oi-person ml-4"></span></label>
		<div class="col mr-4">
			<input name="email" type="email" class="form-control" id="inputNIS" placeholder="E-mail" required="">
		</div>
	</div>
	<div class="form-group row">
		<label for="inputPassword" class="col-sm-2 col-form-label"><span class="oi oi-lock-locked ml-4"></span></label>
		<div class="col mr-4">
			<input name="password" type="password" class="form-control" id="inputPasswordSiswa" placeholder="Password" required="">
		</div>
	</div>
	<div class="form-group row">
		<div class="col mr-4">
			<a id="btn-reg-siswa" style="color: #17a2b8" href="#">Belum punya akun ?</a> atau
			<a href="#" style="color: #17a2b8">Lupa Password ?</a>
		</div>
	</div>
	<div class="modal-footer bg-dark text-light" style="border-top-color:#585858">
		<button type="submit" class="btn btn-primary" style="background-color:#17a2b8">Login</button>
	</div>