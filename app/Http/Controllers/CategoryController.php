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
        return view('home.category', ['types' => $categories]);
    }

    public function showCat($route, $sortby)
    {
        $post = Post::where('type', $route)->get();
        $postAll = Post::orderBy($sortby, 'desc')->get();
        return view('home.category-route', ['posts' => $post, 'allpost' => $postAll, 'category'=> $route, 'sortby'=> $sortby]);
    }
}
