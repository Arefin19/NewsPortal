<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link href="{{asset('css/adminLogin.css')}}" type="text/css" rel="stylesheet">
</head>
<body>
  <div class="form-container">
    <h1>Admin Login</h1>

<<<<<<< HEAD
=======

>>>>>>> d546af8 (profile)
    <form method="POST" action="{{ route('admin.login') }}">
      @csrf
      <input type="text" name="email" placeholder="email"><br>
      <input type="password" name="password" placeholder="Password"><br>
      <input type="submit" class="submit-button" value="Login">
    </form>
  </div>
</body>
</html>
