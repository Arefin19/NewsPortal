<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        return view('home.category');
    }
    public function politics()
    {
        return view('home.politics');
    }
    public function fashion()
    {
        return view('home.fashion');
    }
    public function sports()
    {
        return view('home.sports');
    }
    public function business()
    {
        return view('home.business');
    }
}


