<!DOCTYPE html>
<html>
<head>
  <title>News Portal Admin Panel</title>
  <link href="{{asset('css/admin.css')}}" type="text/css" rel="stylesheet">
</head>
<body>
<div class="form-cont">
  <div class="container">
    <h1>News Portal Admin Panel</h1>

    <div class="form-container">
      <form method="POST" action="{{ route('admin.post')}}">
        @csrf
        <input type="text" name="headline" placeholder="Enter Headline">
        <input type="text" name="author" placeholder="Author name">
        <input type="file" name="photo" placeholder="Upload Photo">
        <textarea name="description" placeholder="Enter Description"></textarea>
        <input type="submit" value="Create Post">
      </form>
    </div>

    <div class="email-container">
      <form action="/send-notification" method="post">

        <input type="email" name="to" placeholder="Enter Email Address">
        <input type="submit" value="Send Notification">
      </form>
    </div>
  </div>
</div>
</body>
</html>
