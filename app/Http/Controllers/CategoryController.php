<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function category()
    {
        $categories = Categories::all();
        return view('home.category', ['types'=> $categories]);
    }
    public function politics()
    {
         $post = Post::where('type', 'politics')->get();
        $postAll = Post::all();
        return view('home.politics', ['posts' => $post, 'allpost'=> $postAll]);
    }
    public function fashion()
    {
         $post = Post::where('type', 'fashion')->get();
        $postAll = Post::all();
        return view('home.fashion', ['posts' => $post, 'allpost'=> $postAll]);
    }
    public function sports()
    {
        $post = Post::where('type', 'sports')->get();
        $postAll = Post::all();
        return view('home.sports', ['posts' => $post, 'allpost'=> $postAll]);
    }
    public function business()
    {
         $post = Post::where('type', 'business')->get();
        $postAll = Post::all();
        return view('home.business', ['posts' => $post, 'allpost'=> $postAll]);
    }
    public function media()
    {
         $post = Post::where('type', 'media')->get();
        $postAll = Post::all();
        return view('home.media', ['posts' => $post, 'allpost'=> $postAll]);
    }
    public function tech()
    {
         $post = Post::where('type', 'tech')->get();
        $postAll = Post::all();
        return view('home.tech', ['posts' => $post, 'allpost'=> $postAll]);
    }
    public function world()
    {
         $post = Post::where('type', 'world')->get();
        $postAll = Post::all();
        return view('home.world', ['posts' => $post, 'allpost'=> $postAll]);
    }

}


