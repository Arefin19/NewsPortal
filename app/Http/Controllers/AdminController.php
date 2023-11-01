<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Post;

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
        // Validate and store the uploaded photo to Cloudinary.
        // $uploadedPhoto = $request->file('photo')->storeOnCloudinary();

        // Create a new post in your database.
        $post = new Post;
        $post->title = $request->input('headline');
        $post->author = $request->input('author'); // Assuming you have user authentication.
        // $post->url = $uploadedPhoto->getSecurePath(); // Store the Cloudinary URL.
        $post->description = $request->input('description');
        $post->save();

        return redirect('/admin')->with('success', 'Post created successfully');
    }
}
