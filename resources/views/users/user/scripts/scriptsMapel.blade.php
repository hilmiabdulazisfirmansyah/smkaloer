<script type="text/javascript">	
	$(document).on('click', '#tambahMapel', function(e){
		e.preventDefault();
		$('.modal-title').html('Tambah Mata Pelajaran');
		$('#kode_mapel').val('');
		$('#nama_mapel').val('');
		$('#kelas_id').val('');
		$('#guru_id').val('');
		$('form').attr('action', 'tambahMapel/');
	})

	$(document).on('click', '#editMapel', function(e){
		e.preventDefault();
		$('.modal-title').html('Edit Mata Pelajaran');
		var id = $(this).data('id');

		$.ajax({
			url: "{{ url('editMapel') }}/"+id,
			data: {id:id},
			dataType: 'json',
			success: function (data){
				$('#kode_mapel').val(data.kode_mapel);
				$('#nama_mapel').val(data.nama_mapel);
				$('#kelas_id').val(data.kelas_id);
				$('#guru_id').val(data.guru_id);
				$('form').attr('action', 'updateMapel/'+data.id);
			}
		})
	})

	$(document).on('click', '#deleteMapel', function(e){
		e.preventDefault();
		var id = $(this).data('id');

		$(this).closest('tr')
		.children('td')
		.animate({ padding: 0 })
		.wrapInner('<div />')
		.children()
		.slideUp(function() { $(this).closest('tr').remove() });

		alertify.set('notifier','position', 'top-center');
		alertify.success('Data Berhasil di Dihapus');

		$.ajax({
			url: "{{ url('deleteMapel') }}/"+id,
			data: {id:id},
			dataType: 'json',
			success: function (data){console.log(data)}
		})
	})
</script>