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

{{-- {{ route('registration') }} --}}
    

<div class="form-container">
    <form method="POST" action="{{ route('store') }}">     
    @csrf
        <form action="registration.blade.php" method="post">
            <h2 style="text-align: center; padding-bottom:2rem;">Registration</h2>
            <label for="name">Username</label>
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Enter your name" id="name" value="{{old('name')}}">
                <span class="text-danger">
                    @error('name')
                        {{$message}}         
                    @enderror
                </span>
            </div>
            <label for="email">Email</label>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Enter your email" id="email" value="{{old('email')}}">
                <span class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror  
                </span>
            </div>
            <label for="password">Password</label>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Enter password" id="password">
                <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <label for="repassword">Password Confirmation</label>
            <div class="form-group">
                <input type="password" class="form-control" name="password_confirm" placeholder="Retype password" id="repassword">
                <span class="text-danger">
                    @error('password_confirm')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" name="submit" value="Sign Up">
            </div>
            <div class="form-text">
                <p style="margin-bottom: 5px;" >Already got an account? <a href="/login" class="text-primary" >Log in</a></p>
                <p >Didn’t receive your confirmation email? <a href="#" class="text-primary">Resend it</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>