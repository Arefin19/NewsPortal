<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        use App\Models\User;

        $data = User::all();
        
            if(DB::connection()->getPdo()){
                echo $data[0]->email;
            }
        ?>
</body>
</html>