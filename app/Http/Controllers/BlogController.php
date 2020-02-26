<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Events\WebsocketDemoEvent;
use App\Posts;
use App\User;
use DB;

class BlogController extends Controller
{
	
	public function index()
	{
		$navbar 		= DB::connection('website')->table('navbar')->get();
		$carousels 		= DB::connection('website')->table('carousels')->get();
		$posts 			= DB::connection('website')->table('posts')->get();
		$pendidik 		= DB::connection('website')->table('guru')->get();
		$smartschools 	= DB::connection('website')->table('smartschool')->get();
		$testimonial 	= DB::connection('website')->table('testimoni')->get();
		$profiles		= DB::connection('website')->table('profiles')->get();
		$jurusan		= DB::connection('website')->table('jurusan')->get();
		$program		= DB::connection('website')->table('program')->get();
		$ekskul			= DB::connection('website')->table('ekskul')->get();
		$posts 			= Posts::orderBy('created_at','desc')->get();

		return view('blog.template.website1.index', 
			compact(
						'navbar',
						'carousels',
						'posts',
						'pendidik',
						'smartschools',
						'testimonial',
						'profiles',
						'jurusan',
						'program',
						'ekskul'	));

		// return view('blog.home', UserAuth(), compact('posts'));
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
