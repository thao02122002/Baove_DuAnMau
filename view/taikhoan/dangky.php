<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login">
        <i class="fa fa-empire"></i>
        <h1>Login</h1>
        
        
        
            
        <form action="index.php?act=dangky" method="post">
        <div class="group"><input name="user" type="text" placeholder="Username"></div>
        <div class="group"><input name="email" type="email" placeholder="Email"></div>
        <div class="group"><input name="pass" type="password" placeholder="Password"></div>
        <input class="log" type="submit" name="dangky">
        
    
        
        </form>
        <h2 class="thongbao">
        <?php

    if(isset($thongbao)&&($thongbao!="")){
        echo $thongbao;
    }
    ?>
    </h2>

        
    </div>
    
</body>
</html>