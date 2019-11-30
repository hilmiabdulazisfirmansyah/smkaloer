<script type="text/javascript">	
	$(document).on('click', '#tambahJobGuru', function(e){
		e.preventDefault();
		$('.modal-title').html('Tambah JobGuru Pelajaran');
		$('#kode_JobGuru').val('');
		$('#nama_JobGuru').val('');
		$('#kelas_id').val('');
		$('#guru_id').val('');
		$('form').attr('action', 'tambahJobGuru/');
	})

	$(document).on('click', '#editJobGuru', function(e){
		e.preventDefault();
		$('.modal-title').html('Edit JobGuru Pelajaran');
		var id = $(this).data('id');

		$.ajax({
			url: "{{ url('editJobGuru') }}/"+id,
			data: {id:id},
			dataType: 'json',
			success: function (data){
				$('#jobGuruNama').val(data.nama);
				$('#jobGuruTitle').val(data.title);
				$('form').attr('action', 'updateJobGuru/'+data.id);
			}
		})
	})

	$(document).on('click', '#deleteJobGuru', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var nama = $(this).data('nama');

		$(this).closest('tr')
		.children('td')
		.animate({ padding: 0 })
		.wrapInner('<div />')
		.children()
		.slideUp(function() { $(this).closest('tr').remove() });

		alertify.set('notifier','position', 'top-center');
		alertify.success('Data Berhasil di Dihapus');

		$.ajax({
			url: "{{ url('deleteJobGuru') }}/"+id,
			data: {id:id, nama:nama},
			dataType: 'json',
			success: function (data){
				$('#jmlGuru').html(data);
			}
		})
	})

</script>