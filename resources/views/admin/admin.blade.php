<!DOCTYPE html>
<html>

<head>
    <title>News Portal Admin Panel</title>
    <link href="{{asset('css/admin.css')}}" type="text/css" rel="stylesheet">
    @cloudinaryJS
</head>

<body class="admin-body">
    <div class="form-cont">
        <div class="container">
            <h1>News Portal Admin Panel</h1>
            <div class="form-container">
                <form method="POST" action="{{ route('admin.post')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="headline" placeholder="Enter Headline">
                    <input type="text" name="author" placeholder="Author name">
                    <input type="text" name="source" placeholder="News Source">
                    <input type="text" name="location" placeholder="Location">
                    <textarea name="description" placeholder="Enter Description"></textarea>
                    <textarea name="body" placeholder="Enter Full content"></textarea>
                    <input type="file" name="file" placeholder="add image" />
                    <select name="type">
                        <option value="">--Please choose a category--</option>
                        <option value="politics">Politics</option>
                        <option value="fashion">Fashion</option>
                        <option value="sports">Sports</option>
                        <option value="world">World</option>
                        <option value="business">Business</option>
                        <option value="media">Media</option>
                        <option value="tech">Technology</option>
                    </select>
                    <input type="submit" value="Create Post">
                </form>
            </div>
        </div>
    </div>

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
                    <input type="submit" value="Create Conference">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
