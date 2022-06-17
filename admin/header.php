
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị website</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    
</head>
<style>
   img{
    width:150px ;
    text-align: center;
   }
   th, td{
       border-color: black;
       border-width: 1px;
       text-align: center;
   }
</style>
<body>
    <div class="py-4">
        <header>
            <div class=" text-center border border-blue-500 bg-blue-500 text-blue-900 text-lg">
             <h1 class="py-2" ><strong>QUẢN TRỊ WEBSITE</strong></h1>
             </div>
             <div >
             <nav class="px-80 pt-12 ">
                 <li class=" inline-block pr-12 hover:text-yellow-600"><a  href="./index.php">Trang chủ</a></li>
                 <li class=" inline-block pr-12 hover:text-yellow-600"><a  href="./index.php?act=adddm">Danh mục</a></li>
                 <li class=" inline-block pr-12 hover:text-yellow-600"><a  href="./index.php?act=addsp">Hàng hóa</a></li>
                 <li class=" inline-block pr-12 hover:text-yellow-600"><a  href="./index.php?act=dskh">Khách hàng</a></li>
                 <li class=" inline-block pr-12 hover:text-yellow-600"><a  href="./index.php?act=dsbl">Bình luận</a></li>
                 <li class=" inline-block pr-12 hover:text-yellow-600"><a  href="./index.php?act=thongke">Thống kê</a></li>
             </nav>
             </div>
        </header>