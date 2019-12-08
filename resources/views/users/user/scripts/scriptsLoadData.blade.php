<script type="text/javascript">
	// load data
$(document).ready(function(){

	var role = '{{auth()->user()->role}}';
	var uri = '';

	if (role == 'Guru') {
		var uri = '/getKehadiranGuru';
	}else{
		var uri = '/getKehadiranSiswa';
	}

	setTimeout(function(){
		location.reload();
	},1000);

	$.ajax({
		url: uri,
		type: 'GET',
		data: {role:role},
		success: function(data){
			console.log(data);
		}
	});
});
</script>