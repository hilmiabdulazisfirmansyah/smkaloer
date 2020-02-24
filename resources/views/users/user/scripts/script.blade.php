@section('script')

@include('users.user.scripts.cdn')
@include('scripts.ajaxSetup')
@include('scripts.ajaxEventSelect')
@include('scripts.session')

@include('users.user.scripts.imageUpload')
@include('users.user.scripts.sidebar')
@include('users.user.scripts.TinyMCE')
@include('users.user.scripts.scriptsJobGuru')
@include('users.user.scripts.scriptsKehadiran')
@include('users/user/scripts/scriptsMapel')
@include('users/user/scripts/scriptsRombel')
@include('users/user/scripts/scriptsJadwal')
@include('users/user/scripts/scriptsFinger')
@include('users/user/scripts/scriptsKalender')

@stop