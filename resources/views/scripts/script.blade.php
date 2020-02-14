@include('scripts.cdn')

<script>
	$(document).ready(function () {
		$("#form-registrasi-siswa").hide();
		$("#form-registrasi-ortu").hide();
		$("#form-registrasi-guru").hide();
		$("#form-registrasi-alumni").hide();
		$("#users").hide();
	});
</script>

@include('scripts.ajaxSetup')
@include('scripts.modal')
@include('scripts.ajaxEventSelect')
@include('scripts.ajaxEventSearch')
@include('scripts.session')