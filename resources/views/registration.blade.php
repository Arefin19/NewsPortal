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

    <?php
    if (isset($_POST["submit"])){
        $fullName = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["repeat-password"];
        $errors = array();
        if(empty($fullname) OR empty($email) OR empty($password) OR empty($passwordRepeat)){
            array_push($errors, "All fields are required");
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($errors, "Email must be a valid email");
        }
        if(strlen($password) < 6){
            array_push($errors, "Password must be at least 6 characters");
        }
        if($password!==$passwordRepeat){
            array_push($errors, "Password does not match");
        }
        if(count($errors)>0){
            foreach($errros as $error){
                echo "<div class='alert alert-danger'>$error</div>";
            }
        } else{

        }
    }
    ?>

    <div class="form-container">
        <form action="register.blade.php" method="post">
            <h2 style="text-align: center; padding-bottom:2rem;">Registration</h2>
            <label for="name">Username</label>
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Enter your name" id="name">
            </div>
            <label for="email">Email</label>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Enter your email" id="email">
            </div>
            <label for="password">Password</label>
            <div class="form-group">
                <input type="password" class="form-control" name="name" placeholder="Enter password" id="password">
            </div>
            <label for="repassword">Password Confirmation</label>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat-password" placeholder="Retype password" id="repassword">
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