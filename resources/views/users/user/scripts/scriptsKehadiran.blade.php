<script type="text/javascript">
	
//verifikasi absensi
$(document).on('click', '#verifikasi', function(e){
	e.preventDefault();

	var id = $(this).data('id');
	var text = $('#siswa-'+id).html();

	$(this).toggleClass('bg-red');
	$(this).html(function(i, html){
		return html === 'Verifikasi' ? 'Batalkan' : 'Verifikasi';
	});

	if (text === 'Belum Di Verifikasi') { text = 'Sudah Di Verifikasi'; v = '{{ url('/verifikasi') }}';}
	else{	text = 'Belum Di Verifikasi'; v = '{{ url('/batalVerif') }}'; }

	$('#siswa-'+id).html(text);
	$('#siswa-'+id).toggleClass('bg-green');

	ajaxVerify(v, id);
	
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