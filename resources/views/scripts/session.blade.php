@if(session('sukses'))
<script type="text/javascript">
$(document).ready(function(){
	$("#notif-success").modal("show");
});
</script>
@endif

@if(session('gagal'))
<script type="text/javascript">	
$(document).ready(function(){
	$("#notif-gagal").modal("show");
});
</script>
@endif