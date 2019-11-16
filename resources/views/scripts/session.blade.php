@if(session('sukses'))
$(document).ready(function(){
	$("#notif-success").modal("show");
});
@endif

@if(session('gagal'))
$(document).ready(function(){
	$("#notif-gagal").modal("show");
});
@endif