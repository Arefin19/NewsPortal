@extends('layouts.app-master')

@section('content')
<div class="profile-body">
    <div class="first-column">
            <div class="d-flex flex-column align-items-center text-center p-2 pt-8 gap-2">
            @if(!$user->image_url)
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            @else
                <img class="rounded-circle mt-5" width="150px" src="{{ url($user->image_url) }}"  />
            @endif
                <span class="font-weight-bold">{{$user->name}}</span>
                <span class="text-black-50">{{$user->email}}</span>

            </div>
    </div>
    <div class="flex second-column">
        <div class="border">
            <form class="p-3 py-5 profile-form" method="POST" action="{{ route("profile.edit", $user->id) }}">
                @csrf
                <h4 class="mb-4">Profile Settings</h4>
                <div class="row mt-2">
                    <div class="col-md-6 profile-form-div"><label class="labels my-1">Name</label><input type="text" class="form-control" placeholder="Enter First name" name="name" value="{{$user->name}}"></div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 profile-form-div"><label class="labels my-1">Email address</label><input type="text" class="form-control" placeholder="Enter Email id" name="email" value="{{$user->email}}"></div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 profile-form-div mt-2">
                        <label class="labels my-1">Newsletter</label>
                        <div class="checkbox-class">
                            <input type="checkbox" id="news-check" name="news-check" value="1" @if($user->newsletter == 1) checked @endif>
                            <label for="news-check">I want newsletter</label><br>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 profile-form-div mt-2">
                        <label class="labels my-1">Category Preference</label>
                        <div class="checkbox-class">
                            <input type="checkbox" id="politics-check" name="categories[]" value="3">
                            <label for="politics-check">Politics</label><br>
                        </div>
                        <div class="checkbox-class">
                            <input type="checkbox" id="world-check" name="categories[]" value="6">
                            <label for="world-check">World</label><br>
                        </div>

    					<div class="checkbox-class">
    					    <input type="checkbox" id="sport-check" name="categories[]" value="0">
    					    <label for="sport-check">Sport</label><br>
    					</div>

						<div class="checkbox-class">
						    <input type="checkbox" id="business-check" name="categories[]" value="1">
						    <label for="business-check">Business</label><br>
						</div>

						<div class="checkbox-class">
						    <input type="checkbox" id="fashion-check" name="categories[]" value="2">
						    <label for="fashion-check">Fashion</label><br>
						</div>

						<div class="checkbox-class">
						    <input type="checkbox" id="tech-check" name="categories[]" value="4">
						    <label for="tech-check">Technology</label><br>
						</div>

						<div class="checkbox-class">
						    <input type="checkbox" id="media-check" name="categories[]" value="6">
						    <label for="media-check">Media</label><br>
						</div>

                    </div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary btn-flat w-100" type="submit">Save Profile</button></div>
        </form>
        </div>

    </div>

    <div class="flex second-column">
        <div class="border">
            <form class="p-3 py-5 profile-form" method="POST" action="{{ route("profile.dp") }}" enctype="multipart/form-data">
                @csrf
                <div class="row mt-2 gap-1">
                    <div class="dp-label">
                        <label class="labels my-2">Change dp</label>
                    </div>
                    <input type="file" name="file" class="form-control" id="customFile"/>
                </div>
                <div class="dp-change-button">
                    <button class="btn btn-primary" type="submit">Change dp</button>
                </div>
            </form>
        </div>
    </div>

    <div class="second-column">
        <div class="border">
            <form class="p-3 py-5 profile-form">
                <div class="row mt-2 gap-1">
                    <div class="dp-label">
                        <label class="labels my-2">Push Notification</label>
                    </div>
                </div>
                <div class="dp-change-button">
                     <button onclick="startFCM()" class="btn btn-primary btn-flat w-25">Allow</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
