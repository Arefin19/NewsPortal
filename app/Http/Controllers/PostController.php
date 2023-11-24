<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::where('post_id', $id)->first();
        if (session()->get('post_viewed') != $id){
            $post->increment('views', 1, ["post_id"=>$id]);
            session(['post_viewed'=> $id ]);
        }
          return view('home.news')->with(['post' => $post]);
    }
}
