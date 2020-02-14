<?php

namespace App\Http\Controllers;
use App\Posts;

use Illuminate\Http\Request;

class PostinganController extends Controller
{
    public function index(){
    	$users = auth()->user()->role;
    	$nama = auth()->user()->name;
    	$judul = 'Postingan';

    	return view('users.user.postingan.index', compact('users','nama','judul'));
    }

    public function create(Request $request){
    	Posts::insert($request->all());	
    	return back();
    }

    public function detail(Request $request, $id){
        $post = Posts::find($id);
        $logout = 'd-block';
        $link = "onClick=window.location.href="."'/profile'";
        $writer = Posts::find($id);
        $posts = Posts::all();
        return view('blog.posts.detail',UserAuth(),compact('post','logout','link','writer','posts'));
    }
}
