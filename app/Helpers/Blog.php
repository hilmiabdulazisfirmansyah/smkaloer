<?php
// Menampilkan data user di navbar
function UserAuth(){
	$users = auth()->user()->name ?? 'Login';
	$avatar = auth()->user()->avatar ?? 'lte/img/logo-primary.png';

	if ($users == 'Login') {
		$logout = 'd-none';
		$link = 'data-toggle=modal data-target=#ModalSiswa';
	}else{
		$logout = 'd-block';
		$link = "onClick=window.location.href="."'/profile'";
	}

	return $UserAuth = array('users' => $users, 'avatar' => $avatar, 'logout' => $logout, 'link' => $link);
}