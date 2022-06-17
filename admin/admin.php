<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị website</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="py-4">
        <header>
             <h1 class="text-center"><strong>QUẢN TRỊ WEBSITE</strong></h1>
             <nav class="px-80 pt-12">
                 <li class=" inline-block pr-12 hover:text-yellow-600"><a  href="./admin.php">Trang chủ</a></li>
                 <li class=" inline-block pr-12 hover:text-yellow-600"><a  href="./admin.php">Danh mục</a></li>
                 <li class=" inline-block pr-12 hover:text-yellow-600"><a  href="">Hàng hóa</a></li>
                 <li class=" inline-block pr-12 hover:text-yellow-600"><a  href="">Khách hàng</a></li>
                 <li class=" inline-block pr-12 hover:text-yellow-600"><a  href="">Bình luận</a></li>
                 <li class=" inline-block pr-12 hover:text-yellow-600"><a  href="">Thống kê</a></li>
             </nav>
        </header>
        <main class="py-4">
            <div class="pb-4">
            <h1><strong>THÊM MỚI LOẠI HÀNG HÓA</strong>
            </div>
            
<br>
<br>
            <form action="" method="post">
                Mã loại
                <input class="border border-gray-400 hover:border-blue-300 p-2" type="text" name="ma_loai" >
                <br>
                <br>
                <div>
                Tên loại
                <input class="border border-gray-400 hover:border-blue-300 p-2" type="text" name="ten_loai" >
                </div>
                <br>
                <input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="submit" value="Thêm mới">
                <input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="reset" value="Nhập lại">
                <a href="./danhsach_loaihang.php"><input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="button" value="Danh sách"></a>
            </form>
        </main>
        <footer></footer>
   
    </div>
</body>
</html>