<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostLikes;
use App\Models\Comment;

class PostController extends Controller
{
    public function show($id)
    {
        $isLiked = false;
        $userId = auth()->id();
        $post = Post::where('post_id', $id)->first();
        $postLike = PostLikes::where('post_id', $id)->where('user_id', $userId)->first();
        $comments = Comment::where('post_id', $id)->get();
        if($postLike){
            $isLiked= true;
        }else{
            $isLiked= false;
        }
        if (session()->get('post_viewed') != $id){
            $post->increment('views', 1, ["post_id"=>$id]);
            session(['post_viewed'=> $id ]);
        }
          return view('home.news')->with(['post' => $post, 'isLiked' => $isLiked, 'user' => $userId, 'comments' => $comments]);
    }

    public function setLike($id)
    {
        $userId = auth()->id();
        $postLike = new PostLikes();
        $postLike->post_id = $id;
        $postLike->user_id = $userId;
        $postLike->save();
        $post = Post::where('post_id', $id)->first();
        $post->increment('likes', 1, ["post_id"=>$id]);
        return redirect()->back();
    }

    public function removeLike($id)
    {
        $userId = auth()->id();
        $postLike = PostLikes::where('post_id', $id)->where('user_id', $userId)->first();

    if ($postLike) {
            $postLike->delete();
            $post = Post::where('post_id', $id)->first();
            $post->decrement('likes', 1, ["post_id"=>$id]);
        return redirect()->back()->with('success', 'Like removed successfully');
    } else {
        return redirect()->back()->with('error', 'Like not found');
    }
    }

    public function addComment($userid, $postid, Request $request){

        $request->validate([
            'content' => 'required|string',
        ]);

        $newComment = new Comment();
        $newComment->user_id = $userid;
        $newComment->post_id = $postid;
        $newComment->content = $request->input('content');
        $newComment->save();

        return redirect()->back();

    }
}

