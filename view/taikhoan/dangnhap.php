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
        <h1>TÀI KHOẢN</h1>
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
            
        ?>
        <div class="">
            xin Chào<br>
            <?=$user?>
        
        
            <li>
            <a href="index.php?act=quenmk">Quên mật khẩu</a>
            </li>
            <li>
            <a href="index.php?act=edit_taikhoan">Cập nhật thông tin tài khoản</a>
            </li>
            <?php
            if($role==1){

            
            ?>
            <li>
                <a href="../admin/index.php">Đăng nhập admin</a>
            </li>
            <?php
            }
            ?>
            <li>
                <a href="index.php?act=thoat">Thoát</a>
            </li>
        </div>
        <?php
        }else {
            
       
        ?>
        <form action="index.php?act=dangnhap" method="post">
        <div class="group"><input name="user" type="text" placeholder="Username"></div>
        <div class="group"><input name="pass" type="password" placeholder="Password"></div>
        <div class="group"><input type="checkbox" name="">Ghi nhớ tài khoản?</div>
        <div class="group"><input type="submit" value="Đăng nhập" name="dangnhap"></div>
        <a href="#">Quên mật khẩu</a>
        
        </form>
        <?php
         }
        ?>
        
        
    </div>
    
</body>
</html>