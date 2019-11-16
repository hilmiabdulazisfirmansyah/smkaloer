<script type="text/javascript">
$("#btn-reg-siswa").click(function() {
$("#ModalSiswaLabel").html("Silahkan Pilih User yang akan anda buat");
$("#users").show();
$("#form-login-siswa").hide();
});

$("#btn-login-cancel-siswa").click(function(){
$("#ModalSiswaLabel").html("Form Login");
$("#form-login-siswa").show();
$("#form-registrasi-siswa").hide();
$("#users").hide();
});

$("#btn-login-cancel-guru").click(function(){
$("#ModalSiswaLabel").html("Form Login");
$("#form-login-siswa").show();
$("#form-registrasi-guru").hide();
$("#users").hide();
});

$("#btn-login-cancel-ortu").click(function(){
$("#ModalSiswaLabel").html("Form Login");
$("#form-login-siswa").show();
$("#form-registrasi-ortu").hide();
$("#users").hide();
});

$("#btn-login-cancel-alumni").click(function(){
$("#ModalSiswaLabel").html("Form Login");
$("#form-login-siswa").show();
$("#form-registrasi-alumni").hide();
$("#users").hide();
});

$("#uSiswa").click(function(){
$("#form-registrasi-siswa").show();
$("#form-registrasi-ortu").hide();
$("#form-registrasi-guru").hide();
$("#form-registrasi-alumni").hide();
$("#ModalSiswaLabel").html("Formulir Registrasi Siswa");
});

$("#uOrtu").click(function(){
$("#form-registrasi-ortu").show();
$("#form-registrasi-guru").hide();
$("#form-registrasi-siswa").hide();
$("#form-registrasi-alumni").hide();
$("#ModalSiswaLabel").html("Formulir Registrasi Orang Tua Siswa");
});

$("#uGuru").click(function(){
$("#form-registrasi-guru").show();
$("#form-registrasi-ortu").hide();
$("#form-registrasi-siswa").hide();
$("#form-registrasi-alumni").hide();
$("#ModalSiswaLabel").html("Formulir Registrasi Guru");
});

$("#uAlumni").click(function(){
$("#form-registrasi-alumni").show();
$("#form-registrasi-guru").hide();
$("#form-registrasi-ortu").hide();
$("#form-registrasi-siswa").hide();
$("#ModalSiswaLabel").html("Formulir Registrasi Alumni");
});

$(document).on('keydown', function(event) {
if (event.key == "Escape") {
$("#ModalSiswaLabel").html("Login User");
$("#form-registrasi-siswa").hide();
$("#form-login-siswa").show();
$("#users").hide();
$("#btn-login-siswa").html("Login");
$("#btn-regist-siswa").attr("id", "btn-login-siswa");
}
});
</script>