<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
	public function index(){
		// menampilkan halaman login
		return view('users.user.index');
	}

	public function login(Request $request){
		if (Auth::attempt($request->only('email','password'))) {
			return redirect('/dashboard');
		}
		return redirect('login');
	}

	public function home(Request $request){
		// jika berhasil users akan di alihkan ke halaman home
		// merubah nama login di navbar menjadi nama user
		if (Auth::attempt($request->only('email','password'))) {
			$users = auth()->user()->name;
			$logout = 'd-block';
			$avatar = auth()->user()->avatar;
			$role = auth()->user()->role;
			$link = "onClick=window.location.href="."'/profile'";
			return view('blog.home',
				[
					'users' => $users, 
					'logout' => $logout, 
					'avatar' => $avatar,
					'link' => $link,
					'role' => $role
				]);
		}
		// jika tidak berhasil maka sistem akan menampilkan pesan Username dan Password yang anda masukkan salah
		return redirect('/');
	}

	public function logout(){
		Auth::logout();
		return redirect('/');
	}
}
