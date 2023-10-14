<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class NewsController extends Controller
{
    public function createPost(Request $request) {
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