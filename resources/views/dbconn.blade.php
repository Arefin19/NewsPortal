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
        use App\Models\Admin;


        $userdata = User::all();
        $admindata = Admin::all();

        
            if(DB::connection()->getPdo()){
                echo $admindata[0]->name;
            }
        ?>
</body>
</html>