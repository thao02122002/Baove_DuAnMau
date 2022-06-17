
<main class="py-16">
            <div class="grid grid-cols-12 gap-2">
                <div class="danh muc col-span-3">
                    <table class="border border-green-500 " width="280px">
                        <tr>
                            <th class="h-11 bg-green-500 text-white" >DANH MỤC SẢN PHẨM</th>
                        </tr>
                        <?php 
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm="index.php?act=sanpham&iddm=".$id;
                            echo '<tr>
                           <td class="border border-green-500 pl-12 h-10 hover:text-yellow-600"><a href="'.$linkdm.'">'.$name.'</a> </td>
                        </tr>';
                        }
                         ?>
                        <!--<tr>
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
                        </tr>--> 
                        <tr>
                          <td class="  pl-12 h-10 "><form action="index.php?act=sanpham" method="post">
                              <input  type="text" value="" name="kyw">
                              <input type="submit" name="timkiem" value="Tìm kiếm">
                              </form></td>  
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
            
            
            
      
        <!--<div class="swiper-slide">
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
        -->
      
            <div class="pt-8">
            <button class=" text-white p-4 border bg-green-500 rounded-lg ">TOP SẢN PHẨM BÁN CHẠY NHẤT</button><br>
                <hr><br><br>
                <div class="swiper mySwiper">
      <div class="swiper-wrapper">
          <?php
          foreach ($dstop as $sp) {
                 extract($sp);
                 $linksp="index.php?act=sanphamct&idsp=".$id;
                 $img=$img_path.$img;
                 echo '<div class="swiper-slide">
                 <a href="">
                 <img src="'.$img.'" ><p><a href="'.$linksp.'">'.$name.'</a></p>
                 </a>
                
             </div>';
              
          }
          ?>
       <!-- <div class="swiper-slide">
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
        --></div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
            </div>
            </product>
    <div class="chitiet pt-4">
        <div class="ct">
        <button class=" text-white p-4 border bg-green-500 rounded-lg ">SẢN PHẨM CHI TIẾT</button><br>
             <div class="border border-gray-400 hover:border-green-500">
                 <h1 class="pt-4"><strong><?=$name?></strong></h1>
             <?php
               extract($onesp);
               $img=$img_path.$img;
               echo '<div class="mx-auto py-4" ><img class="text-center" src="'.$img.'" width="300px" ><br></div>';
               echo '<p>$'.$price.'</p>';
               echo $mota;
               ?>    
             </div>
        </div>
        
        <div class="bl py-12" id="binhluan">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
              $(document).ready(function(){
              
              
               $("#binhluan").load("../view/binhluan/binhluanform.php", {idpro: <?=$id?>});
           });
         
        </script>
        </div>
        <div class="cl">
        <button class=" text-white p-4 border bg-green-500 rounded-lg ">SẢN PHẨM CÙNG LOẠI</button><br>
             <div class="border border-gray-400 hover:border-green-500">
                 <?php
                 foreach ($sp_cung_loai as $sp_cung_loai) {
                     extract($sp_cung_loai);
                     $linksp="index.php?act=sanphamct&idsp=".$id;
                     echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                     
                 }
                 ?>
             </div>
        </div>
    </div>


        </main>