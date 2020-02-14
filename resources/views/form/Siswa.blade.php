<div class="modal fade" id="ModalSiswa" tabindex="-1" role="dialog" aria-labelledby="ModalSiswaLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content bg-info text-light" style="border-radius: 1.3rem">
			<div class="modal-header bg-dark text-light text-center" style="border-bottom-color:#585858">
				<img class="navbar-brand" src="{{ asset('img/logo.png') }}" style="width:5rem;margin:auto;">
			</div>
			<h5 class="modal-title text-center" id="ModalSiswaLabel" style="padding: 1rem;margin-top: -18px;">Login User</h5>
			<span class="text-info text-center text-light" style="font-size:small;
			margin-top: -21px;
			">Tekan <i>Esc</i> untuk keluar atau <i>Klik diluar Form</i></span>
			<div class="modal-body bg-dark text-light">
				{{-- Form Login --}}
				<form id="form-login-siswa" action="{{ url('users') }}" method="POST">
					@include('form.form.login')
				</form>
				{{-- end of Form Login --}}
				<!-- Form Registrasi Siswa -->
					@include('form.form.reg')
				{{-- end of Form Registrasi --}}
			</div>
		</div>
	</div>
</div>
