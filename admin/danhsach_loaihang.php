<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị website</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<style>
    table{
        width: 50%;
        border: 12px;
    }
</style>
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
            <h1><strong>DANH SÁCH LOẠI HÀNG HÓA</strong>
            </div>
            <div>
                <table border="1" >
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th>Xử lý</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="id"></td>
                        <td>1</td>
                        <td>Trái cây ngoại nhập</td>
                        <td><input type="button" value="Sửa">   <input type="button" value="Xóa"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="id"></td>
                        <td>1</td>
                        <td>Trái cây ngoại nhập</td>
                        <td><input type="button" value="Sửa">   <input type="button" value="Xóa"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="id"></td>
                        <td>1</td>
                        <td>Trái cây ngoại nhập</td>
                        <td><input type="button" value="Sửa">   <input type="button" value="Xóa"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="id"></td>
                        <td>1</td>
                        <td>Trái cây ngoại nhập</td>
                        <td><input type="button" value="Sửa">   <input type="button" value="Xóa"></td>
                    </tr>
                </table>
            </div>
            <div>
            <input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="button" value="Chọn tất cả">
                <input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="button" value="bỏ chọn tất cả ">
                <input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="button" value="Xóa các mục đã chọn">
                <a href="./admin.php"><input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="button" value="Nhập thêm"></a>
            </div>
        </main>
        <footer></footer>
   
    </div>
</body>
</html>