<script type="text/javascript">

//verifikasi absensi Guru
$(document).on('click', '#verifikasi', function(e){
	e.preventDefault();

	var id = $(this).data('id');
	var text = $('#siswa-'+id).html();

	switch(text){

		case "Belum Di Verifikasi":
		$(this).toggleClass('bg-green');
		$(this).toggleClass('bg-red');
		$(this).html(function(i, btnText){
		return btnText === '<span class="glyphicon glyphicon-remove"> </span> Batalkan' ? '<span class="glyphicon glyphicon-ok"> </span> Verifikasi' : '<span class="glyphicon glyphicon-remove"> </span> Batalkan';
		});
		$('#siswa-'+id).html('Sudah Di Verifikasi');
		$('#siswa-'+id).toggleClass('bg-red');
		$('#siswa-'+id).toggleClass('bg-green');
		v = '{{ url('/verifikasi') }}';
		ajaxVerify(v, id);
		break;

		case "Sudah Di Verifikasi":
		$(this).toggleClass('bg-red');
		$(this).toggleClass('bg-green');
		$(this).html(function(i, html){
		return html === '<span class="glyphicon glyphicon-ok"> </span> Verifikasi' ? '<span class="glyphicon glyphicon-remove"> </span> Batalkan' : '<span class="glyphicon glyphicon-ok"> </span> Verifikasi';
		});
		$('#siswa-'+id).html('Belum Di Verifikasi');
		$('#siswa-'+id).toggleClass('bg-green');
		$('#siswa-'+id).toggleClass('bg-red');
		v = '{{ url('/batalVerif') }}';
		ajaxVerify(v, id);
		break;

		default:
			console.log(text);
		break; 
	}

})

//verifikasi absensi Kepala Sekolah
$(document).on('click', '#verifikasi_ks', function(e){
	e.preventDefault();

	var id = $(this).data('id');
	var text = $('#guru-'+id).html();

	switch(text){

		case "Belum Di Verifikasi":
		$(this).toggleClass('bg-green');
		$(this).toggleClass('bg-red');
		$(this).html(function(i, btnText){
		return btnText === '<span class="glyphicon glyphicon-remove"> </span> Batalkan' ? '<span class="glyphicon glyphicon-ok"> </span> Verifikasi' : '<span class="glyphicon glyphicon-remove"> </span> Batalkan';
		});
		$('#guru-'+id).html('Sudah Di Verifikasi');
		$('#guru-'+id).toggleClass('bg-red');
		$('#guru-'+id).toggleClass('bg-green');
		v = '{{ url('/verifikasi/KS') }}';
		ajaxVerify(v, id);
		break;

		case "Sudah Di Verifikasi":
		$(this).toggleClass('bg-red');
		$(this).toggleClass('bg-green');
		$(this).html(function(i, html){
		return html === '<span class="glyphicon glyphicon-ok"> </span> Verifikasi' ? '<span class="glyphicon glyphicon-remove"> </span> Batalkan' : '<span class="glyphicon glyphicon-ok"> </span> Verifikasi';
		});
		$('#guru-'+id).html('Belum Di Verifikasi');
		$('#guru-'+id).toggleClass('bg-green');
		$('#guru-'+id).toggleClass('bg-red');
		v = '{{ url('/batalVerif/KS') }}';
		ajaxVerify(v, id);
		break;

		default:
			console.log(text);
		break; 
	}

})

//verifikasi absensi Guru Piket
$(document).on('click', '#verifikasi_guru_piket', function(e){
	e.preventDefault();

	var id = $(this).data('id');
	var text = $('#guru-'+id).html();

	switch(text){

		case "Belum Di Verifikasi":
		$(this).toggleClass('bg-green');
		$(this).toggleClass('bg-red');
		$(this).html(function(i, btnText){
		return btnText === '<span class="glyphicon glyphicon-remove"> </span> Batalkan' ? '<span class="glyphicon glyphicon-ok"> </span> Verifikasi' : '<span class="glyphicon glyphicon-remove"> </span> Batalkan';
		});
		$('#guru-'+id).html('Sudah Di Verifikasi');
		$('#guru-'+id).toggleClass('bg-red');
		$('#guru-'+id).toggleClass('bg-green');
		v = '{{ url('/verifikasi/Piket') }}';
		ajaxVerify(v, id);
		break;

		case "Sudah Di Verifikasi":
		$(this).toggleClass('bg-red');
		$(this).toggleClass('bg-green');
		$(this).html(function(i, html){
		return html === '<span class="glyphicon glyphicon-ok"> </span> Verifikasi' ? '<span class="glyphicon glyphicon-remove"> </span> Batalkan' : '<span class="glyphicon glyphicon-ok"> </span> Verifikasi';
		});
		$('#guru-'+id).html('Belum Di Verifikasi');
		$('#guru-'+id).toggleClass('bg-green');
		$('#guru-'+id).toggleClass('bg-red');
		v = '{{ url('/batalVerif/Piket') }}';
		ajaxVerify(v, id);
		break;

		default:
			console.log(text);
		break; 
	}

})

//verifikasi absensi Guru Piket untuk siswa
$(document).on('click', '#verifikasi_guru_piket_siswa', function(e){
	e.preventDefault();

	var id = $(this).data('id');
	var text = $('#siswa-'+id).html();

	switch(text){

		case "Belum Di Verifikasi":
		$(this).toggleClass('bg-green');
		$(this).toggleClass('bg-red');
		$(this).html(function(i, btnText){
		return btnText === '<span class="glyphicon glyphicon-remove"> </span> Batalkan' ? '<span class="glyphicon glyphicon-ok"> </span> Verifikasi' : '<span class="glyphicon glyphicon-remove"> </span> Batalkan';
		});
		$('#siswa-'+id).html('Sudah Di Verifikasi');
		$('#siswa-'+id).toggleClass('bg-red');
		$('#siswa-'+id).toggleClass('bg-green');
		v = '{{ url('/verifikasi/Piket') }}';
		ajaxVerify(v, id);
		break;

		case "Sudah Di Verifikasi":
		$(this).toggleClass('bg-red');
		$(this).toggleClass('bg-green');
		$(this).html(function(i, html){
		return html === '<span class="glyphicon glyphicon-ok"> </span> Verifikasi' ? '<span class="glyphicon glyphicon-remove"> </span> Batalkan' : '<span class="glyphicon glyphicon-ok"> </span> Verifikasi';
		});
		$('#siswa-'+id).html('Belum Di Verifikasi');
		$('#siswa-'+id).toggleClass('bg-green');
		$('#siswa-'+id).toggleClass('bg-red');
		v = '{{ url('/batalVerif/Piket') }}';
		ajaxVerify(v, id);
		break;

		default:
			console.log(text);
		break; 
	}

})

$(document).on('click', '#editKehadiran', function(e){
	e.preventDefault();
	var id = $(this).data('id');
	$.ajax({
		url: "{{ url('/edit') }}/"+id,
		data: {id:id},
		dataType: 'json',
		success: function (data){
			$('.widget-user-username').html(data.name);
			$('.widget-user-desc').html(data.job_title);
			$('.img-circle').attr('src',data.avatar);
			$('#user_id').val(data.id);
		}
	})
})


function ajaxVerify(v,id){
	$.ajax({
		url: v,
		data: {id:id},
		dataType: 'json',
		success: function (){}
	})
}

</script>