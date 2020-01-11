 @include('users.user.css.css')
 <meta name="csrf-token" content="{{ csrf_token() }}">
 @yield('css')

<div id="chats">
<chats :user="{{ auth()->user() }}"></chats>
</div>

<div id="test">
	<test></test>
</div>

<script src="{{ asset('js/app.js') }}"></script>
@include('users.user.scripts.cdn')
