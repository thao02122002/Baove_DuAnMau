<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="../view//taikhoan//style.css">
    
    
    <style>
        product {
            position: relative;
            height: 100%;
        }
        product {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }
      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 300px;
        height: 300px;
        /*width: 100%;
        height: 100%;
        */
        object-fit: cover;
        /* padding: 20px; */
      }
      /*.swiper-slide {
          border-width: 1px;
         border-color: grey;
          background-color: white;
      }*/
      
    </style>
    
</head>
<body>
    <div class="py-4 px-16">
        <header>
            <div class="grid grid-cols-12 ">
                <div class="logo col-span-3 overflow-hidden">
                    <img class="transition-transform duration-500 transform hover:scale-125 " src="./img//logo.png" width="240px">
                </div>
                <div class="menu col-span-6 my-auto">
                    <ul>
                        <li class=" inline-block pr-12 hover:text-yellow-600"><a href="index.php">TRANG CHỦ</a></li>
                        <li class=" inline-block pr-12 hover:text-yellow-600"><a href="index.php?act=gioithieu">GIỚI THIỆU</a></li>
                        <li class=" inline-block pr-12 hover:text-yellow-600"><a href="index.php?act=sanpham">SẢN PHẨM</a></li>
                        <li class=" inline-block pr-12 hover:text-yellow-600"><a href="index.php?act=tintuc">TIN TỨC</a></li>
                        <li class=" inline-block pr-12 hover:text-yellow-600"><a href="index.php?act=lienhe">LIÊN HỆ</a></li>
                    </ul>
                </div>
                <div class="button col-span-3 my-auto pl-32">
                   <a href="index.php?act=dangky"><button class="border border-gray-800 rounded-lg p-2 bg-green-500 hover:bg-yellow-600 hover:text-white">ĐĂNG KÍ</button></a> 
                   <a href="index.php?act=dangnhap"><button class="border border-gray-800 p-2 rounded-lg p-2 bg-green-500 hover:bg-yellow-600 hover:text-white">ĐĂNG NHẬP</button></a> 
                </div>
            </div>
            <div class="banner">
                <img id="img_slide" src="./img///banner2.jpg" width="100%">
            </div>
        </header>