<!DOCTYPE html>
<html>

<head>
    <title>News Portal Admin Panel</title>
    <link href="{{asset('css/admin.css')}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- @cloudinaryJS --}}
</head>

<body class="admin-body">
    <div class="form-cont">
        <div class="container">
            

            <div class="form">
                <form method="POST" action="{{ route('admin.post')}}" enctype="multipart/form-data">
                    @csrf
                    <h2>Admin Panel Posting</h2>
                    <input type="text" name="headline" placeholder="Enter Headline" required>
                    <input type="text" name="author" placeholder="Author name" required>
                    <input type="text" name="source" placeholder="News Source" required>
                    <input type="text" name="location" placeholder="Location" required>
                    <textarea name="description" placeholder="Enter Description" required></textarea>
                    <textarea name="body" placeholder="Enter Full content" required ></textarea>
                    {{-- <input type="file" name="file"  placeholder="add image" required /> --}}

                    <input type="file" name="file" class="form-control" id="customFile" required/>

                    <select name="type" class="form-select" id="inputGroupSelect02" required>
                        <option value="">--Please choose a category--</option>
                        <option value="politics">Politics</option>
                        <option value="fashion">Fashion</option>
                        <option value="sports">Sports</option>
                        <option value="world">World</option>
                        <option value="business">Business</option>
                        <option value="media">Media</option>
                        <option value="tech">Technology</option>
                    </select>
                    <input class="w-100 btn btn-lg btn-light" type="submit" value="Create Post">
                    {{-- <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button> --}}
                </form>
            </div>
        </div>
    </div>

        <button onclick="startFCM()"
                    class="btn btn-danger btn-flat">Allow notification
        </button>

    <div class="form-cont">
        <div class="container">
            <h1>Add upcoming Conference</h1>
            <div class="form-container">
                <form method="POST" action="{{ route('admin.conf')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" id="title" name="title" placeholder="Add title">
                    <input type="text" name="deadline" placeholder="timeline">
                    <input type="date" id="date" name="date" placeholder="date">
                    <input type="text" id="location" name="location" placeholder="place for conf">
                    <textarea name="description" placeholder="Enter Description"></textarea>
                    <input type="file" name="confile" placeholder="add map image" />
                    <input type="submit" value="Create Conference" id="conf-submit">
                </form>
            </div>
        </div>
    </div>
</body>
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

</html>
