
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
                        
                        <tr>
                          <td class="  pl-12 h-10 ">
                              <form action="index.php?act=sanpham" method="post">
                              <input  type="text" value="" name="kyw">
                              <input type="submit" name="timkiem" value="Tìm kiếm">
                              </form>
                            </td>  
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
                <button class=" text-white p-4 border bg-green-500 rounded-lg ">SẢN PHẨM MỚI NHẤT</button><br>
                <hr><br><br>
                
                <div class="swiper mySwiper">
                <div class="swiper-wrapper">
            <?php
            
            foreach ($spnew as $sp) {
                extract($sp);
                $hinh=$img_path.$img;
                $linksp="index.php?act=sanphamct&idsp=".$id;
                echo '<div class="swiper-slide">
                <a href=""><img src="'.$hinh.'" > </a><br><p>$'.$price.'</p><a href="'.$linksp.'">'.$name.'</a>
               
                <br>
                
                
                
               
            </div>';
            }
            ?>
            
            
      
        </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
                
        </div>
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
                 <img src="'.$img.'" ><br><a href="'.$linksp.'">'.$name.'</a>
                 </a>
                
             </div>';
              
          }
          ?>
       </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
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
                                <img class="transition-transform duration-500 transform hover:scale-125" src="./img/lido2.jpg" width="85%">
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