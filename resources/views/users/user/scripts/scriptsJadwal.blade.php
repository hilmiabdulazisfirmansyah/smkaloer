<script type="text/javascript">	
	$(document).on('click', '#tambahJadwal', function(e){
		e.preventDefault();
		$('.modal-title').html('Tambah Jadwal Pelajaran');
		$('#kode_Jadwal').val('');
		$('#nama_Jadwal').val('');
		$('#kelas_id').val('');
		$('#guru_id').val('');
		$('form').attr('action', 'tambahJadwal/');
	})

	$(document).on('click', '#editJadwal', function(e){
		e.preventDefault();
		$('.modal-title').html('Edit Jadwal Pelajaran');
		var id = $(this).data('id');

		$.ajax({
			url: "{{ url('editJadwal') }}/"+id,
			data: {id:id},
			dataType: 'json',
			success: function (data){
				$('#kode_Jadwal').val(data.kode_Jadwal);
				$('#nama_Jadwal').val(data.nama_Jadwal);
				$('#kelas_id').val(data.kelas_id);
				$('#guru_id').val(data.guru_id);
				$('form').attr('action', 'updateJadwal/'+data.id);
			}
		})
	})

	$(document).on('click', '#deleteJadwal', function(e){
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
			url: "{{ url('deleteJadwal') }}/"+id,
			data: {id:id},
			dataType: 'json',
			success: function (data){console.log(data)}
		})
	})

	$(function() {

		$('#mapel_id').on('change', function(){
			var id = $(this).val();
			if (id == 'default' ) {$('.callout').hide(300);}
			$.ajax({
				url: "{{ url('getJadwal') }}/"+id,
				data: {id:id},
				dataType: 'json',
				success: function (data){
					$('.callout-guru').show(300);
					$('#get_guru').text(data.nama);
				}
			})
		});

	});

	$(document).ready(function() {
		$('.jadwalmapel').select2();
	});

	$(document).ready(function() {
		$('.jadwalnamaguru').select2();
	});
</script>