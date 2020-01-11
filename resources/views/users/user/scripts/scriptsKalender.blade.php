<!-- Page specific script -->
@php
	$id = auth()->user()->id;
@endphp

<script>
$(document).ready(function() {
    var calendar = $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },

      events: '{{ url('kalender/absensi/'.$id) }}',

    });
});
</script>