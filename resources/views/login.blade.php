<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/login_register.css')}}">
    
</head>
<body>

    

    <div class="form-container">
    <form method="POST" action="{{ route('login') }}">
    @csrf
            <h2 style="text-align: center; padding-bottom:2rem;">Login</h2>
            
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" name="submit" value="Log In">
            </div>
            <div class="form-text">
                <p style="margin-bottom: 5px;" >Don’t have an account yet? <a href="/registration" class="text-primary" >Sign up for free.</a></p>
                <p >Didn’t receive your confirmation email? <a href="#" class="text-primary">Resend it</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>