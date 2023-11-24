<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class NewsController extends Controller
{
    public function news()
    {
        // $post = Post::all();
        return view('home.news');
    }
}
