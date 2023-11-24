<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Post;
use App\Models\Conf;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class AdminController extends Controller
{
    public function show()
    {
        return view("admin.admin");
    }

    public function getlogin()
    {
        return view("admin.adminLogin");
    }

    public function login(Request $request)
    {
        // Retrieve the user by email
        $user = Admin::where('email', $request->input('email'))->first();

        if ($user && $request->input('password') == $user->password) {
            return redirect()->route('admin.show');
        }

        echo "wrong password";
        // return redirect()->route('login')->with('error', 'Invalid email or password');
    }

    public function createPost(Request $request)
    {
        $post = new Post;
        $image = $request->file('file');
        $uploadedFileUrl = Cloudinary::upload($image->getRealPath(), ['folder' => 'newsportal'])->getSecurePath();
        $post->title = $request->input('headline');
        $post->author = $request->input('author');
        $post->url = $uploadedFileUrl;
        $post->description = $request->input('description');
        $post->content = $request->input('body');
        $post->source = $request->input('source');
        $post->location = $request->input('location');
        $post->type = $request->input('type');
        $post->save();
        return redirect('/admin')->with('success', 'Post created successfully');
    }

        public function conf(Request $request)
    {
        $conf = new Conf;
        $image = $request->file('confile');
        $uploadedFileUrl = Cloudinary::upload($image->getRealPath(), ['folder' => 'newsportal'])->getSecurePath();
        $conf->title = $request->input('title');
        $conf->deadline = $request->input('deadline');
        $conf->date = $request->input('date');
        $conf->img_url = $uploadedFileUrl;
        $conf->descritpion = $request->input('description');
        $conf->location = $request->input('location');
        $conf->save();
        return redirect('/admin')->with('success', 'Post created successfully');
    }
}
