<script type="text/javascript">	
	$(document).on('click', '#tambahRombel', function(e){
		e.preventDefault();
		$('.modal-title').html('Tambah Rombongan Belajar');
		$('#nama_kelas').val('');
		$('#nama_jurusan').val('');
		$('#nama_bagian').val('');
		$('form').attr('action', 'tambahRombel/');
	})

	$(document).on('click', '#editRombel', function(e){
		e.preventDefault();
		$('.modal-title').html('Edit Rombongan Belajar');
		var id = $(this).data('id');

		$.ajax({
			url: "{{ url('editRombel') }}/"+id,
			data: {id:id},
			dataType: 'json',
			success: function (data){
				$('#nama_kelas').val(data.nama_kelas);
				$('#nama_jurusan').val(data.nama_jurusan);
				$('#nama_bagian').val(data.nama_bagian);
				$('form').attr('action', 'updateRombel/'+data.id);
			}
		})
	})

	$(document).on('click', '#deleteRombel', function(e){
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
			url: "{{ url('deleteRombel') }}/"+id,
			data: {id:id},
			dataType: 'json',
			success: function (data){console.log(data)}
		})
	})
</script>