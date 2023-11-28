<!DOCTYPE html>
<html>

<head>
    <title>News Portal Admin Panel</title>
    <link href="{{asset('css/admin.css')}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- @cloudinaryJS --}}
</head>

<body class="admin-body">
    <div class="body-item">
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
	                </form>
	            </div>
	        </div>
	    </div>

	    <div class="form-cont">
	        <div class="container">
	            <div class="form">
	                <form method="POST" action="{{ route('admin.conf')}}" enctype="multipart/form-data">
	                    @csrf
	                    <h2>Add upcoming Conference</h2>
	                    <input type="text" id="title" name="title" placeholder="Add title">
	                    <input type="text" name="deadline" placeholder="timeline">
	                    <input type="date" id="date" name="date" placeholder="date">
	                    <input type="text" id="location" name="location" placeholder="place for conf">
	                    <textarea name="description" placeholder="Enter Description"></textarea>
	                    <input type="file" name="confile" class="form-control" id="customFile" placeholder="add map image" />
	                    <input class="w-100 btn btn-lg btn-light" type="submit" value="Create Conference" id="conf-submit">
	                </form>
	            </div>
	        </div>
	    </div>
    </div>

    <div class="body-item">
	    <div class="form-cont">
	        <div class="container">
	            <div class="form">
	                <form method="GET" action="{{ route('admin.mail')}}" enctype="multipart/form-data">
	                    @csrf
	                    <h2>Send Newsletter</h2>
	                    <input type="text" id="title" name="title" placeholder="Add title">
	                    <textarea name="body" placeholder="Enter Description"></textarea>
	                    <input class="w-100 btn btn-lg btn-light" type="submit" value="Add" id="conf-submit">
	                </form>
	            </div>
	        </div>
	    </div>
    </div>
</body>
</html>
