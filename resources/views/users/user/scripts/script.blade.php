@section('script')

@include('users.user.scripts.cdn')
@include('scripts.ajaxSetup')
@include('scripts.ajaxEventSelect')

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })

  $( function() {
    $( ".ui-sortable" ).sortable();
    $( ".ui-sortable" ).disableSelection();
  });
</script>
@stop