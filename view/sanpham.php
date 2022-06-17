

            <div class="grid grid-cols-12 gap-2 pt-12">
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
<div class="py-12 ">
<button class=" text-white p-4 border bg-green-500 rounded-lg ">DANH SÁCH SẢN PHẨM</button><br>
<div class="border border-gray-400 hover:border-green-500 grid grid-cols-12">
<?=$tendm?>
<?php 
 foreach ($dssp as $sp) {
    extract($sp);
    $hinh=$img_path.$img;
    $linksp="index.php?act=sanphamct&idsp=".$id;
    echo '<div class="swiper-slide col-span-4 py-4">
    <a href=""><img src="'.$hinh.'" ><br><p>$'.$price.'</p><br><a href="'.$linksp.'">'.$name.'</a>
    </a>
    <br>
    
    
    
   
</div>';
}
?>
</div>
</div>