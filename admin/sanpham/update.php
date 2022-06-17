<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$hinhpath="../upload/".$img;
                        if(is_file($hinhpath)){
                            $hinh="<img src='".$hinhpath."' height='80>'";
                        }else {
                            $hinh="no photo";
                        }
?>
<main class="py-4">
            <div class="pb-4 text-center border border-blue-500 bg-blue-500 text-blue-900 text-lg">
            <h1 class="pt-2"><strong>CẬP NHẬT SẢN PHẨM</strong>
            </div>
            
<br>
<br>
<div class="">
<form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
<select name="iddm" id="" class="border border-gray-400 hover:border-blue-300">
                      <option value="0" selected>Tất cả</option>
                   <?php 
                   foreach ($listdanhmuc as $danhmuc) {
                       
                        if($danhmuc['id']==$iddm) $s="selected"; else $s="";
                          echo '<option value="'.$danhmuc['id'].'" '.$s.'>'.$danhmuc['name'].'</option>';
                        
                    } ?>
                    
                    
               </select>
                <br>
                <br>
                <div>
                Tên sản phẩm
                <input class="border border-gray-400 hover:border-blue-300 p-2" type="text" name="tensp" value="<?=$name?>">
                </div>
                <div class="py-2">
                Gía
                <input class="border border-gray-400 hover:border-blue-300 p-2" type="text" name="giasp" value="<?=$price?>">
                </div>
                <div class="mx-auto">
                Hình
                <input  type="file"  name="hinh"  >
                <?=$hinh?>
            </div>
                <div class="pt-2">
                Mô tả
                <textarea class="border border-gray-400 hover:border-blue-300 p-2" name="mota"  cols="30" rows="10"><?=$mota?></textarea>
                </div>
                
                <br>
                <input type="hidden" name="id" value="<?=$id?>">
                <input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="submit" value="Cập nhật" name="capnhat">
                <input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="reset" value="Nhập lại">
                <a href="index.php?act=lissp"><input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="button" value="Danh sách"></a>
            </form>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
            </div>
        </main>