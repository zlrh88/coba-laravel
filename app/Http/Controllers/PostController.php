<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request) {

    // echo $request->input('author');
    // dd(request('search'))
    return view('posts', [
        'title' => 'All Posts',
        'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()

     ]);
    }

    public function show(Post $post) {
         return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]) ;
    }
}
