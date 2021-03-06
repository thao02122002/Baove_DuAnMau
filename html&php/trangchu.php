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
                        <li class=" inline-block pr-12 hover:text-yellow-600"><a href="trangchu.php">TRANG CH???</a></li>
                        <li class=" inline-block pr-12 hover:text-yellow-600"><a href="gioithieu.php">GI???I THI???U</a></li>
                        <li class=" inline-block pr-12 hover:text-yellow-600"><a href="page3.php">S???N PH???M</a></li>
                        <li class=" inline-block pr-12 hover:text-yellow-600"><a href="tintuc.php">TIN T???C</a></li>
                        <li class=" inline-block pr-12 hover:text-yellow-600"><a href="lienhe.php">LI??N H???</a></li>
                    </ul>
                </div>
                <div class="button col-span-3 my-auto pl-32">
                    <button class="border border-gray-800 rounded-lg p-2 bg-green-500 hover:bg-yellow-600 hover:text-white">????NG K??</button>
                   <a href="../html&php//login//index.html"><button class="border border-gray-800 p-2 rounded-lg p-2 bg-green-500 hover:bg-yellow-600 hover:text-white">????NG NH???P</button></a> 
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
                            <th class="h-11 bg-green-500 text-white" >DANH M???C S???N PH???M</th>
                        </tr>
                        <tr>
                            <td class="border border-green-500 pl-12 h-10 hover:text-yellow-600">Tr??i c??y ngo???i nh???p</td>
                        </tr>
                        <tr>
                            <td class=" pl-12 h-10 hover:text-yellow-600">Tr??i c??y n???i</td>
                        </tr>
                        <tr>
                            <td class="border border-green-500  pl-12 h-10 hover:text-yellow-600">Gi??? qu?? t???ng</td>
                        </tr>
                        <tr>
                            <td class=" pl-12 h-10 hover:text-yellow-600">H???p qu?? t???ng</td>
                        </tr> 
                        <tr>
                            <td class="border border-green-500  pl-12 h-10 hover:text-yellow-600">M??m qu???</td>
                        </tr> 
                           
                            
                            
                    </table>
                </div>
                <div class="col-span-9 grid grid-cols-9 gap-4">
                     <div class="col-span-3 overflow-hidden">
                         <img class="transition-transform duration-500 transform hover:scale-125" src="./img/h???p qu??1.jpg" >
                     </div>
                     <div class="col-span-3 overflow-hidden">
                     <img class="transition-transform duration-500 transform hover:scale-125" src="./img/h???p qu??2.jpg">
                     </div>
                     <div class="col-span-3 overflow-hidden">
                     <img class="transition-transform duration-500 transform hover:scale-125" src="./img/h???p qu??3.jpg" >
                     </div>
                </div>
            </div>
            <product>
            <div class="pt-8  ">
                <button class=" text-white p-4 border bg-green-500 rounded-lg ">S???N PH???M B??N CH???Y</button><br>
                <hr><br><br>
                
                <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="">
            <img src="./img//Vi???t qu???t.jfif" ><br>VI???T QU???T
            </a>
           
        </div>
        <div class="swiper-slide">
            <a href="">
            <img src="./img//cherry M???.jfif" width="74%" ><br>CHERRY M???
            </a>
            <br><br><br>
            
        </div>
        
        <div class="swiper-slide">
            <a href="">
            <img src="./img//Xo??i ??c.png" width="95%"><br>XO??I ??C

            </a>
            
            
    </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//nho ????? ??cpng.png" ><br>NHO ????? ??C
        </a><br><br><br>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//xo??i xanh.jfif" width="83%"><br>XO??I XANH ????I LOAN
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//nho m???u ????n - H??n Qu???c.jpg" width="68%"><br>NHO M???U ????N - H??N QU???C
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img/nh??n.jfif" ><br>NH??N L???NG H??NG Y??N
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//l?? nam phi.jfif" width="100%"><br>L?? NAM PHI
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//t??o queen.jpg" width="63%" ><br>T??O ????? QUEEN
        </a>
        
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
                
            </div>
            <div class="pt-8">
            <button class=" text-white p-4 border bg-green-500 rounded-lg ">S???N PH???M M???I NH???T</button><br>
                <hr><br><br>
                <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="">
            <img src="./img//Vi???t qu???t.jfif" ><br>VI???T QU???T
            </a>
           
        </div>
        <div class="swiper-slide">
            <a href="">
            <img src="./img//cherry M???.jfif" width="74%" ><br>CHERRY M???
            </a>
            <br><br><br>
            
        </div>
        <div class="swiper-slide">
            <a href="">
            <img src="./img//Xo??i ??c.png" width="95%"><br>XO??I ??C
            </a>
            
    </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//nho ????? ??cpng.png" ><br>NHO ????? ??C
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//xo??i xanh.jfif" width="83%"><br>XO??I XANH ????I LOAN
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//nho m???u ????n - H??n Qu???c.jpg" width="68%"><br>NHO M???U ????N - H??N QU???C
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img/nh??n.jfif" ><br>NH??N L???NG H??NG Y??N
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//l?? nam phi.jfif" width="100%"><br>L?? NAM PHI
        </a>
        
        </div>
        <div class="swiper-slide">
        <a href="">
        <img src="./img//t??o queen.jpg" width="63%" ><br>T??O ????? QUEEN
        </a>
        
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
            </div>
            </product>
            <div class="pt-8">
            <button class=" text-white p-4 border bg-green-500 rounded-lg ">B??I VI???T</button><br>
                <hr><br><br>
                <div class="grid grid-cols-12 gap-4">
                    <div class=" col-span-6 border border-green-500 p-8 ">
                         <div class="img overflow-hidden">
                                <img class="transition-transform duration-500 transform hover:scale-125" src="./img//baoquan.jpg" width="100%">
                         </div>
                         <div class="content">
                             <p class="text-center p-2"><strong>B???O QU???N HOA QU??? ????NG C??CH</strong></p>
                             <p class="p-2">Trong th???c t??? c?? nh???ng lo???i hoa qu??? c?? th???i h???n b???o qu???n trong th???i gian kh?? d??i nh??: cam, xo??i, 
                                 b?????i hay t??o,??? Nh??ng b??n c???nh ???? c??ng c?? nh???ng lo???i hoa qu??? b???o qu???n ng???n ng??y nh??: nh??n, v???i ?????c bi???t l?? nho 
                                 v?? d??u t??y, nh???ng lo???i n??y v???a r???t kh?? v???n chuy???n v?? b???o qu???n, l???i c?? th???i h???n s??? d???ng ch??? kh??ng qu?? 3 ng??y. 
                                 ????? ?????t m???c ????ch l??m cho hoa qu??? ???????c t????i l??u h??n, d??n bu??n hoa qu??? c?? kinh nghi???m l??u n??m ph???i n???m l??ng nh???ng c??ch b???o qu???n hoa qu??? t????i l??u ????? b??n.</p>
                         </div>
                    </div>
                    <div class="col-span-6  border border-green-500 p-8">
                    <div class="img overflow-hidden">
                                <img class="transition-transform duration-500 transform hover:scale-125" src="./img//baoquan.jpg" width="100%">
                         </div>
                         <div class="content">
                             <p class="text-center p-2"><strong>L?? DO N??N CH???N S???N PH???M T???I H??? TH???NG C???A C???A H??NG</strong></p>
                             <p class="p-2">L?? do n??n ch???n c??c s???n ph???m t???i H??? th???ng c???a h??ng. Nh??? l??ng y??u m???n c???a kh??ch h??ng, ?????n nay h??? th???ng 
                                 ???? ph??t tri???n v?? c?? t???t c??? 3 c???a h??ng l???n t???i Qu???n 1 v?? Qu???n 5. Ch??nh v?? v???y, Qu?? kh??ch h??ng c?? th??? 
                                 tin t?????ng s??? d???ng c??c s???n ph???m c???a ch??ng t??i.</p>
                         </div>
                    </div>
                    

                </div>
            </div>


        </main>
        <footer class="pt-24 bg-green-600">
        <hr >
        <div class="py-4 px-16  grid grid-cols-10">
               
               <div class=" col-span-2">
                    <h1 class="text-white"><strong> ?????A CH???</strong></h1>
                   <p class="text-white hover:text-red-400"> Tr??? s??? ch??nh: S??? 9,x?? Ti???n Ti???n, TP H???i D????ng,T???nh H???i D????ng</p>
                   <p class="text-white hover:text-red-400">* ??i???n tho???i: 0392697014</p>
                   <p class="text-white hover:text-red-400">* Email:thaovtpph16945@fpt.edu.vn</p>
                   <p class="text-white hover:text-red-400">* Zalo: Ph????ng Th???o</p>
                   <p class="text-white hover:text-red-400">* Website:https://gcshop.vn/</p>
                   <p class="text-white hover:text-red-400">* V??n ph??ng t???i Ti???n Ti???n, H???i D????ng. Th??n Du T??i,Tp H???i D????ng, H???i D????ng</p>
               </div>
               <div class=" col-span-2">
                    <h1 class="text-white"><strong> GI???I THI???U</strong></h1>
                    <a class="text-white hover:text-red-400" href="">V??? FruitsShop</a><br>
                    <a class="text-white hover:text-red-400" href="">Tuy???n D???ng</a><br>
                    <a class="text-white hover:text-red-400" href="">Ch??nh S??ch B???o M???t</a><br>
                    <a class="text-white hover:text-red-400" href="">H???p T??c V?? Li??n K???t</a><br>

               </div>
               <div class=" col-span-2">
                    <h1 class="text-white"><strong> MUA H??NG</strong></h1>
                    <a class="text-white hover:text-red-400" href="">Tr??i C??y T????i</a><br>
                    <a class="text-white hover:text-red-400" href="">Tr??i C??y Nh???p Kh???u</a><br>
                    <a class="text-white hover:text-red-400" href="">Q??a T???ng Tr??i C??y</a><br>
                    <a class="text-white hover:text-red-400" href="">D???ch V??? Q??a T???ng Doanh Nghi???p</a><br>
               </div>
               <div class=" col-span-2">
               <h1 class="text-white"><strong> H??? TR??? KH??CH H??NG</strong></h1>
                    <a class="text-white hover:text-red-400" href="">T?? V???n Kh??ch H??ng</a><br>
                    <a class="text-white hover:text-red-400" href="">?????t H??ng Theo Y??u C???u</a><br>
                    <a class="text-white hover:text-red-400" href="">Giao H??ng Nhanh Nh???t</a><br>
                    <a class="text-white hover:text-red-400" href="">Theo D??i ????n H??ng</a><br>
               </div>
               <div class="col-span-2">
               <h1 class="text-white"><strong> K???T N???I V???I CH??NG T??I</strong></h1>
               
               
               
               <h1 class="text-white"><strong> ????NG K?? NH???N ??U ????I V???I FRUITSSHOP</strong></h1>
               <input class="border border-gray-400 bg-white text-gray-400 rounded-lg p-2" type="text" value="Nh???p ?????a ch??? Email...">
              
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