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
    <div class="second-column">
        <form class="p-3 py-5 profile-form">
                <h4 class="mb-4">Profile Settings</h4>
                <div class="row mt-2">
                    <div class="col-md-6 profile-form-div"><label class="labels my-1">Name</label><input type="text" class="form-control" placeholder="Enter First name" value="{{$user->name}}"></div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 profile-form-div"><label class="labels my-1">Email address</label><input type="text" class="form-control" placeholder="Enter Email id" value="{{$user->email}}"></div>
                </div>
                <div class"row mt-2">
                    <div class="col-md-6 profile-form-div mt-2">
                        <label class="labels my-1">Newsletter</label>
                        <div class="checkbox-class">
                            <input type="checkbox" id="news-check" name="news-check" value="">
                            <label for="news-check">I want newsletter</label><br>
                        </div>
                    </div>
                </div>
                <div class"row mt-2">
                    <div class="col-md-6 profile-form-div mt-2">
                        <label class="labels my-1">Category Preference</label>
                        <div class="checkbox-class">
                            <input type="checkbox" id="politics-check" name="politics-check" value="">
                            <label for="politics-check">Politics</label><br>
                        </div>
                        <div class="checkbox-class">
                            <input type="checkbox" id="world-check" name="world-check" value="">
                            <label for="world-check">World</label><br>
                        </div>
                        <div class="checkbox-class">
                            <input type="checkbox" id="world-check" name="world-check" value="">
                            <label for="world-check">World</label><br>
                        </div>

    					<div class="checkbox-class">
    					    <input type="checkbox" id="sport-check" name="sport-check" value="">
    					    <label for="sport-check">Sport</label><br>
    					</div>

						<div class="checkbox-class">
						    <input type="checkbox" id="business-check" name="business-check" value="">
						    <label for="business-check">Business</label><br>
						</div>

						<div class="checkbox-class">
						    <input type="checkbox" id="fashion-check" name="fashion-check" value="">
						    <label for="fashion-check">Fashion</label><br>
						</div>

						<div class="checkbox-class">
						    <input type="checkbox" id="tech-check" name="tech-check" value="">
						    <label for="tech-check">Technology</label><br>
						</div>

						<div class="checkbox-class">
						    <input type="checkbox" id="media-check" name="media-check" value="">
						    <label for="media-check">Media</label><br>
						</div>

                    </div>
                </div>
                <div class="row mt-2">
                    <label class="labels my-1">Push Notification</label>
                    <button onclick="startFCM()" class="btn btn-primary btn-flat w-25">Allow</button>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary btn-flat w-100" type="submit">Save Profile</button></div>
        </form>
    </div>

    <div class="flex second-column">
        <form class="p-3 py-5 profile-form">
                <div class"row mt-2 gap-1">
                    <label class="labels my-1">Change dp</label>
                    <input type="file" name="file" class="form-control" id="customFile"/>
                </div>
                <button class="btn btn-primary" type="button">Change dp</button>
        </form>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
<script>
    var firebaseConfig = {
        apiKey: "AIzaSyCDeRGze7b5wM3czhBC4llPoocFlW3WmG4",
        authDomain: "push-noti-fb9f5.firebaseapp.com",
        projectId: "push-noti-fb9f5",
        storageBucket: "push-noti-fb9f5.appspot.com",
        messagingSenderId: "342247671730",
        appId: "1:342247671730:web:2c595f591a3945140046ab"
    };
    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();

    function startFCM() {
        messaging
            .requestPermission()
            .then(function() {
                return messaging.getToken()
            })
            .then(function(response) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '{{ route("store.token") }}',
                    type: 'POST',
                    data: {
                        token: response
                    },
                    dataType: 'JSON',
                    success: function(response) {
                        alert('Token stored.');
                    },
                    error: function(error) {
                        alert(error);
                    },
                });
            }).catch(function(error) {
                alert(error);
            });
    }
    messaging.onMessage(function(payload) {
        const title = payload.notification.title;
        const options = {
            body: payload.notification.body,
            icon: payload.notification.icon,
        };
        new Notification(title, options);
    });
</script>


@endsection
