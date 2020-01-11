<script type="text/javascript">
	$(document).on('click', '#cekFinger', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		$('#jmlUserFinger').html('<i class="fa fa-spin fa-refresh"></i> <i>sedang mengambil data device . . .</i>');

		$.ajax({
			url: '{{ url('finger/getDevice') }}',
			type: 'POST',
			data: {id:id},
			dataType: 'json',
			success: function(data){
				if (data.Result == true) {
					var user = data.DEVINFO.User;
					$('#jmlUserFinger').children("i").remove();
					$('#jmlUserFinger').html('<span class="label label-success">Success</span> <span class="label label-info"><i class="fa fa-fw fa-user"></i> '+user+'</span>');
				}else{
					$('#jmlUserFinger').html('<span class="label label-danger">Error</span>');
				}
			}
		});
	})

	$(document).on('click', '#hapusDataFinger', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var ip = $(this).data('ip');
		var port = $(this).data('port');
		var sn = $(this).data('sn');
		$('#storeDelFinger').html('<i class="fa fa-spin fa-refresh"></i>  <i>sedang menghapus data . . .</i>');

		$.ajax({
			url: '{{ url('/finger/delUser') }}',
			type: 'POST',
			data: {id:id,ip:ip,port:port,sn:sn},
			dataType: 'json',
			success: function(data){
				if (data.Result == true) {
					$('#storeDelFinger').children("i").remove();
					$('#storeDelFinger').html('<span class="label label-success">Success</span> <span class="label label-danger"> Data Berhasil Di Hapus </span>');
				}else{
					$('#storeDelFinger').html('<span class="label label-danger">Error</span>');
				}
			}
		});
	})

	$(document).on('click', '#tambahDataFinger', function(e){
		e.preventDefault();
		$('#storeDataFinger').html('<i class="fa fa-spin fa-refresh"></i>  <i>sedang Menambahkan data . . .</i>');

		var id = $(this).data('id');

		$.ajax({
			url: '{{ url('finger/setUser') }}',
			type: 'POST',
			data:{id:id},
			success: function(data){
				console.log(data);
			}
		});
	})

	$(document).on('change', '#selectCekUserFinger', function(e){
		e.preventDefault();
		var nilai = $(this).val();
		if (nilai == 0) {
			$('#cekUserFinger').attr("disabled", true);
		}else{
			
			$('#cekUserFinger').removeAttr("disabled");
		}

	})

	$(document).on('click', '#cekUserFinger', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		$('#jmlUserFinger2').html('<i class="fa fa-spin fa-refresh"></i> <i>sedang mengambil data User . . .</i>');

		$.ajax({
			url: '{{ url('finger/getUser') }}',
			type: 'POST',
			data: {id:id},
			dataType: 'json',
			success: function(data){
				console.log(data);
			}
		});
	})

	$(document).on('click', '#syncFinger', function(e){
		e.preventDefault();
		$.ajax({
			url: '{{ url('sync/fingerprint') }}',
			type: 'GET',
			success: function(data){
				$('.progress-bar').attr('aria-valuemax', data.max);
				for (var i = 0; i < data.percent; i++) {
					$('.progress-bar').css('width', i+'%');
				}
			}
		});
	});
</script>