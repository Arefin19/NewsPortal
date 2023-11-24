<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Conf;
class HomeController extends Controller
{
    public function index()
    {
        $post = Post::orderBy('created_at','desc')->get();
        $conf = Conf::orderBy('date')->first();
        $postPopular = Post::orderBy('views','desc')->get();
        return view('home.index')->with(['post' => $post, 'postPopular' => $postPopular, 'conf'=> $conf]);
    }
}
