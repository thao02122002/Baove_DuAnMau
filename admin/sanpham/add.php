<main class="py-8">
            <div class="pb-4 text-center border border-blue-500 bg-blue-500 text-blue-900 text-lg">
            <h1 class="pt-2"><strong>THÊM MỚI SẢN PHẨM</strong></h1>
            </div>
            
<br>
<br>
<div class=" text-center">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
               Danh mục
               <select name="iddm" id=""  class="border border-gray-400 hover:border-blue-300">
                   <?php 
                   foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="'.$id.'">'.$name.'</option>';
                        
                    } ?>
                    
                    
               </select>
                <br>
                <br>
                <div>
                Tên sản phẩm
                <input class="border border-gray-400 hover:border-blue-300 p-2" type="text" name="tensp" >
                </div>
                <div class="py-2">
                Gía
                <input class="border border-gray-400 hover:border-blue-300 p-2" type="text" name="giasp" >
                </div>
                <div>
                Hình
                <input  type="file"  name="hinh"  >
                </div>
                <div class="pt-2">
                Mô tả
                <textarea name="mota"  cols="30" rows="10" class="border border-gray-400 hover:border-blue-300"></textarea>
                </div>
                
                <br>
                <input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="submit" value="Thêm mới" name="themmoi">
                <input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="reset" value="Nhập lại">
                <a href="index.php?act=lissp"><input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="button" value="Danh sách"></a>
            </form>
            <?php
            if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
            ?>
    </div>
        </main>