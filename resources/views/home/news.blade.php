@extends('layouts.app-master')

@section('content')

<div class="whole-section">
    <div class="left-side-section">
        <div class="news-header-section">
            <h1>{{$post->title}}</h1>
            <div class="small-details">
                <i class="fa-regular fa-clock" style="font-size: 18px;"></i>
                <p class="time">{{$post->created_at}}</p>
                <div class="right-side-section">
                    <button disabled type="submit" class="count-buttons">
                        <i class="fa-regular fa-eye" style="font-size: 18px;"></i>
                    </button>
                    <p class="like-count-box" style="font-size: 16px; align-items:center;">&nbsp;{{$post->views}}</p>
                </div>
                @auth
			    @if(!$isLiked)
			        <div class="right-side-section" id="likeBtn" >
			            <form method="POST" action="{{ route('posts.like', $post->post_id) }}">
			            @csrf
			                <button type="submit" class="count-buttons">
			                    <i class="fa-regular fa-thumbs-up" style="font-size: 18px;"></i>
			                </button>
			            </form>
			            <p class="like-count-box" style="font-size: 16px; align-items:center;">&nbsp;{{$post->likes}}</p>
			        </div>
			    @else
			        <div class="right-side-section" id='removeLikeBtn'>
			            <form method="POST" action="{{ route('post.removeLike', $post->post_id) }}">
			            @csrf
			                <button  type="submit" class="count-buttons">
			                    <i class="fa-regular fa-thumbs-down" style="font-size: 18px;"></i>
			                </button>
			            </form>
			            <p class="like-count-box" style="font-size: 16px; align-items:center;">&nbsp;{{$post->likes}}</p>
			        </div>
			    @endif
			    @endauth

			    @guest
			     <div class="right-side-section" id='removeLikeBtn'>
			            <form method="POST" action="{{ route('post.removeLike', $post->post_id) }}">
			            @csrf
			                <button  type="submit" disabled class="count-buttons">
			                    <i class="fa-regular fa-thumbs-up" style="font-size: 18px;"></i>
			                </button>
			            </form>
			            <p class="like-count-box" style="font-size: 16px; align-items:center;">&nbsp;{{$post->likes}}</p>
			    </div>
			    @endguest
            </div>
        </div>

        <div>
            <img src="{{ url($post->url) }}" alt="">
        </div>
        <div class="reporter-text">
            <p>By {{ $post->author }} &nbsp; #{{$post->type}}</p>
        </div>
        <div class="publisher-text">
            <p>{{ $post->source }}, {{ $post->location }}</p>
        </div>
        <div class="divider">

        </div>

        <div class="paragraph">
            <p class="p1">{{$post->description}}</p>
            <p class="p2">{{$post->content}}</p>
        </div>
        <div class="comments">
	        <h2>Add Comment</h2>
	        <form action="{{ route('comments.store', ['userid' => auth()->user() ? auth()->user()->id : 0, 'postid' => $post->post_id]) }}" method="post" class="comment-form">
	        @csrf
	            <div class="form-group">
	                <textarea name="content" id="content" class="form-control comment-box" rows="4"></textarea>
	            </div>
	            <button type="submit" class="btn btn-primary comment-btn" @if(auth()->guest()) disabled @endif>Submit</button>
	        </form>
            <h2>Comments</h2>

	        @if ($comments->count() > 0)
	                @foreach ($comments as $comment)
                        <div class="comment-show border">
                            <p><strong>UserId: {{ $comment->user_id }} </strong></p>
                            <P>{{ $comment->content }} </P>
	                    </div>

	                @endforeach
	        @else
	            <p>No comments available.</p>
	        @endif
        </div>
    </div>
</div>

<div>

</div>
@endsection
