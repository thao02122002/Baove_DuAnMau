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
        /*width: 100%;
        height: 100%;
        */
        object-fit: cover;
        padding: 20px;
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
                        <li class=" inline-block pr-12 hover:text-yellow-600"><a href="trangchu.php">TRANG CHỦ</a></li>
                        <li class=" inline-block pr-12 hover:text-yellow-600"><a href="gioithieu.php">GIỚI THIỆU</a></li>
                        <li class=" inline-block pr-12 hover:text-yellow-600"><a href="page3.php">SẢN PHẨM</a></li>
                        <li class=" inline-block pr-12 hover:text-yellow-600"><a href="tintuc.php">TIN TỨC</a></li>
                        <li class=" inline-block pr-12 hover:text-yellow-600"><a href="lienhe.php">LIÊN HỆ</a></li>
                    </ul>
                </div>
                <div class="button col-span-3 my-auto pl-32">
                    <button class="border border-gray-800 rounded-lg p-2 bg-green-500 hover:bg-yellow-600 hover:text-white">ĐĂNG KÍ</button>
                   <a href="../html&php//login//index.html"><button class="border border-gray-800 p-2 rounded-lg p-2 bg-green-500 hover:bg-yellow-600 hover:text-white">ĐĂNG NHẬP</button></a> 
                </div>
            </div>
            <div class="banner">
                <img id="img_slide" src="./img///banner2.jpg" width="100%">
            </div>
        </header>
        <main class="py-16">
            <div class="grid grid-cols-12 gap-2">
                <div class="danh muc col-span-3">
                    <table class="border border-green-500 " width="280px">
                        <tr>
                            <th class="h-11 bg-green-500 text-white" >DANH MỤC SẢN PHẨM</th>
                        </tr>
                        <tr>
                            <td class="border border-green-500 pl-12 h-10 hover:text-yellow-600">Trái cây ngoại nhập</td>
                        </tr>
                        <tr>
                            <td class=" pl-12 h-10 hover:text-yellow-600">Trái cây nội</td>
                        </tr>
                        <tr>
                            <td class="border border-green-500  pl-12 h-10 hover:text-yellow-600">Giỏ quà tặng</td>
                        </tr>
                        <tr>
                            <td class=" pl-12 h-10 hover:text-yellow-600">Hộp quà tặng</td>
                        </tr> 
                        <tr>
                            <td class="border border-green-500  pl-12 h-10 hover:text-yellow-600">Mâm quả</td>
                        </tr> 
                           
                            
                            
                    </table>
                </div>
                <div class="col-span-9 grid grid-cols-9 gap-4">
                     <div class="col-span-3 overflow-hidden">
                         <img class="transition-transform duration-500 transform hover:scale-125" src="./img/hộp quà1.jpg" >
                     </div>
                     <div class="col-span-3 overflow-hidden">
                     <img class="transition-transform duration-500 transform hover:scale-125" src="./img/hộp quà2.jpg">
                     </div>
                     <div class="col-span-3 overflow-hidden">
                     <img class="transition-transform duration-500 transform hover:scale-125" src="./img/hộp quà3.jpg" >
                     </div>
                </div>
            </div>
            <product>
            <div class="pt-8  ">
                <button class=" text-white p-4 border bg-green-500 rounded-lg ">SẢN PHẨM BÁN CHẠY</button><br>
                <hr><br><br>
                
                <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="">
            <img src="./img//Việt quất.jfif" ><br>VIỆT QUẤT
            </a>
           
        </div>
        <div class="swiper-slide">
            <a href="">
            <img src="./img//cherry Mỹ.jfif" width="74%" ><br>CHERRY MỸ
            </a>
            <br><br><br>
            
        </div>
        
        <div class="swiper-slide">
            <a href="">
            <img src="./img//Xoài úc.png" width="95%"><br>XOÀI ÚC

            </a>
            
            
    </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//nho đỏ úcpng.png" ><br>NHO ĐỎ ÚC
        </a><br><br><br>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//xoài xanh.jfif" width="83%"><br>XOÀI XANH ĐÀI LOAN
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//nho mẫu đơn - Hàn Quốc.jpg" width="68%"><br>NHO MẪU ĐƠN - HÀN QUỐC
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img/nhãn.jfif" ><br>NHÃN LỒNG HƯNG YÊN
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//lê nam phi.jfif" width="100%"><br>LÊ NAM PHI
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//táo queen.jpg" width="63%" ><br>TÁO ĐỎ QUEEN
        </a>
        
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
                
            </div>
            <div class="pt-8">
            <button class=" text-white p-4 border bg-green-500 rounded-lg ">SẢN PHẨM MỚI NHẤT</button><br>
                <hr><br><br>
                <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="">
            <img src="./img//Việt quất.jfif" ><br>VIỆT QUẤT
            </a>
           
        </div>
        <div class="swiper-slide">
            <a href="">
            <img src="./img//cherry Mỹ.jfif" width="74%" ><br>CHERRY MỸ
            </a>
            <br><br><br>
            
        </div>
        <div class="swiper-slide">
            <a href="">
            <img src="./img//Xoài úc.png" width="95%"><br>XOÀI ÚC
            </a>
            
    </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//nho đỏ úcpng.png" ><br>NHO ĐỎ ÚC
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//xoài xanh.jfif" width="83%"><br>XOÀI XANH ĐÀI LOAN
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//nho mẫu đơn - Hàn Quốc.jpg" width="68%"><br>NHO MẪU ĐƠN - HÀN QUỐC
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img/nhãn.jfif" ><br>NHÃN LỒNG HƯNG YÊN
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//lê nam phi.jfif" width="100%"><br>LÊ NAM PHI
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//táo queen.jpg" width="63%" ><br>TÁO ĐỎ QUEEN
        </a>
        
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
            </div>
            </product>
            <div class="pt-8">
            <button class=" text-white p-4 border bg-green-500 rounded-lg ">BÀI VIẾT</button><br>
                <hr><br><br>
                <div class="grid grid-cols-12 gap-4">
                    <div class=" col-span-6 border border-green-500 p-8 ">
                         <div class="img overflow-hidden">
                                <img class="transition-transform duration-500 transform hover:scale-125" src="./img//baoquan.jpg" width="100%">
                         </div>
                         <div class="content">
                             <p class="text-center p-2"><strong>BẢO QUẢN HOA QUẢ ĐÚNG CÁCH</strong></p>
                             <p class="p-2">Trong thực tế có những loại hoa quả có thời hạn bảo quản trong thời gian khá dài như: cam, xoài, 
                                 bưởi hay táo,… Nhưng bên cạnh đó cũng có những loại hoa quả bảo quản ngắn ngày như: nhãn, vải đặc biệt là nho 
                                 và dâu tây, những loại này vừa rất khó vận chuyển và bảo quản, lại có thời hạn sử dụng chỉ không quá 3 ngày. 
                                 Để đạt mục đích làm cho hoa quả được tươi lâu hơn, dân buôn hoa quả có kinh nghiệm lâu năm phải nằm lòng những cách bảo quản hoa quả tươi lâu để bán.</p>
                         </div>
                    </div>
                    <div class="col-span-6  border border-green-500 p-8">
                    <div class="img overflow-hidden">
                                <img class="transition-transform duration-500 transform hover:scale-125" src="./img//baoquan.jpg" width="100%">
                         </div>
                         <div class="content">
                             <p class="text-center p-2"><strong>LÍ DO NÊN CHỌN SẢN PHẨM TẠI HỆ THỐNG CỦA CỬA HÀNG</strong></p>
                             <p class="p-2">Lý do nên chọn các sản phẩm tại Hệ thống cửa hàng. Nhờ lòng yêu mến của khách hàng, đến nay hệ thống 
                                 đã phát triển và có tất cả 3 cửa hàng lớn tại Quận 1 và Quận 5. Chính vì vậy, Quý khách hàng có thể 
                                 tin tưởng sử dụng các sản phẩm của chúng tôi.</p>
                         </div>
                    </div>
                    

                </div>
            </div>


        </main>
        <footer class="pt-24 bg-green-600">
        <hr >
        <div class="py-4 px-16  grid grid-cols-10">
               
               <div class=" col-span-2">
                    <h1 class="text-white"><strong> ĐỊA CHỈ</strong></h1>
                   <p class="text-white hover:text-red-400"> Trụ sở chính: Số 9,xã Tiền Tiến, TP Hải Dương,Tỉnh Hải Dương</p>
                   <p class="text-white hover:text-red-400">* Điện thoại: 0392697014</p>
                   <p class="text-white hover:text-red-400">* Email:thaovtpph16945@fpt.edu.vn</p>
                   <p class="text-white hover:text-red-400">* Zalo: Phương Thảo</p>
                   <p class="text-white hover:text-red-400">* Website:https://gcshop.vn/</p>
                   <p class="text-white hover:text-red-400">* Văn phòng tại Tiền Tiến, Hải Dương. Thôn Du Tái,Tp Hải Dương, Hải Dương</p>
               </div>
               <div class=" col-span-2">
                    <h1 class="text-white"><strong> GIỚI THIỆU</strong></h1>
                    <a class="text-white hover:text-red-400" href="">Về FruitsShop</a><br>
                    <a class="text-white hover:text-red-400" href="">Tuyển Dụng</a><br>
                    <a class="text-white hover:text-red-400" href="">Chính Sách Bảo Mật</a><br>
                    <a class="text-white hover:text-red-400" href="">Hợp Tác Và Liên Kết</a><br>

               </div>
               <div class=" col-span-2">
                    <h1 class="text-white"><strong> MUA HÀNG</strong></h1>
                    <a class="text-white hover:text-red-400" href="">Trái Cây Tươi</a><br>
                    <a class="text-white hover:text-red-400" href="">Trái Cây Nhập Khẩu</a><br>
                    <a class="text-white hover:text-red-400" href="">Qùa Tặng Trái Cây</a><br>
                    <a class="text-white hover:text-red-400" href="">Dịch Vụ Qùa Tặng Doanh Nghiệp</a><br>
               </div>
               <div class=" col-span-2">
               <h1 class="text-white"><strong> HỖ TRỢ KHÁCH HÀNG</strong></h1>
                    <a class="text-white hover:text-red-400" href="">Tư Vấn Khách Hàng</a><br>
                    <a class="text-white hover:text-red-400" href="">Đặt Hàng Theo Yêu Cầu</a><br>
                    <a class="text-white hover:text-red-400" href="">Giao Hàng Nhanh Nhất</a><br>
                    <a class="text-white hover:text-red-400" href="">Theo Dõi Đơn Hàng</a><br>
               </div>
               <div class="col-span-2">
               <h1 class="text-white"><strong> KẾT NỐI VỚI CHÚNG TÔI</strong></h1>
               
               
               
               <h1 class="text-white"><strong> ĐĂNG KÍ NHẬN ƯU ĐÃI VỚI FRUITSSHOP</strong></h1>
               <input class="border border-gray-400 bg-white text-gray-400 rounded-lg p-2" type="text" value="Nhập địa chỉ Email...">
              
               </div>
        </div>
        </footer>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    <script>
    var anh;
        var img_anh = ['./img//banner2.jpg','./img//banner3a.jpg'];
        var soluong = 2;
        var index = 0
        var img_slide = document.querySelector("#img_slide");
        var slide_interval;
        slide_interval = setInterval(function(){
        index ++;
        if(index >= soluong){
            index = 0
        }
        img_slide.setAttribute("src",img_anh[index])
        },2000)
    
</script>
</body>
</html>