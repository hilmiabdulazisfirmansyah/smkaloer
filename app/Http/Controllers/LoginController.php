<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;

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
				])->with('berhasil_login', 'Selamat Datang Di Sekolah Kami');
		}

		if(! Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
		{
			return redirect('/')->with('email_belum_terdaftar', 'Email yang anda masukkan belum Terdaftar di SmartApp');
			if(User::where('email', '=', $request->input('email')))
			{
				return redirect('/')->with('password_salah', 'Password yang anda masukkan Salah');
			}

			if(User::where('password', '=', $request->input('password')))
			{
				return redirect('/')->with('password_salah', 'Password yang anda masukkan Salah');
			}
		}

		// jika tidak berhasil maka sistem akan menampilkan pesan Username dan Password yang anda masukkan salah

	}

	public function logout(){
		Auth::logout();
		return redirect('/');
	}
}
