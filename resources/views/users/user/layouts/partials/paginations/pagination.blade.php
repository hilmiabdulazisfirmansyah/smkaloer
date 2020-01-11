<div class="row">
	<div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite"> 
		<p class="small">
		Data <b>{{ $pagination->firstItem() }}</b> Sampai <b>{{ $pagination->lastItem() }}</b> dari <b>{{ $pagination->total() }}</b> Data <b>{{ $tabel }}</b>
		</p>
		<p>
			Halaman <b>{{ $pagination->currentPage() }}</b> dari <b>{{ $pagination->lastPage() }}</b> Halaman
		</p>
	</div></div>

	
	<div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous">
		{{ $pagination->links() }}
	</li></ul></div></div>

</div>