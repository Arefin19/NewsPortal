<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
=======
    <title>Document</title>
</head>
<body>
        <?php
        use App\Models\UserInfo;

        $data = UserInfo::all();
        
            if(DB::connection()->getPdo()){
                echo $data[0]->email;
            }
        ?>
>>>>>>> 0ba6e9b (database)
</body>
</html>