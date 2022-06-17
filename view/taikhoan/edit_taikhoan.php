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
        <h1>Cập Nhật Tài Khoản</h1>
        
        <?php
        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
            extract($_SESSION['user']);

        }
        ?>

        
            
        <form action="index.php?act=edit_taikhoan" method="post">
        <div class="group"><input name="user" type="text" placeholder="Username" value="<?=$user?>"></div>
        <div class="group"><input name="email" type="email" placeholder="Email" value="<?=$email?>"></div>
        <div class="group"><input name="pass" type="password" placeholder="Password" value="<?=$pass?>"></div>
        <div class="group"><input name="address" type="text" placeholder="Địa Chỉ" value="<?=$address?>"></div>
        <div class="group"><input name="tell" type="text" placeholder="Điện Thoại" value="<?=$tell?>"></div>
        <input type="hidden" name="id" value="<?=$id?>">
        <input class="log" type="submit" name="capnhat">
        <input type="reset" value="Nhập lại">
        
    
        
        </form>
       

        
    </div>
    
</body>
</html>