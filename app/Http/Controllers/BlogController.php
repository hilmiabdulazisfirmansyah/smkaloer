<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BlogController extends Controller
{
	
	public function index()
	{
		// UserAuth() di folder app/Helpers/Blog.php
		return view('blog.home', UserAuth());
	}
	public function sejarah()
	{
		return view('blog.sejarah', UserAuth());
	}

	public function visi()
	{
		return view('blog.visi', UserAuth());
	}

	public function tav()
	{
		return view('blog.tav', UserAuth());
	}

	public function tkr()
	{
		return view('blog.tkr', UserAuth());
	}

	public function tkj()
	{
		return view('blog.tkj', UserAuth());
	}

	public function mikrotik()
	{
		return view('blog.mikrotik', UserAuth());
	}

	public function bkk()
	{
		return view('blog.bkk', UserAuth());
	}
}
