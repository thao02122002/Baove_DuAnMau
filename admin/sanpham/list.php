<main class="py-4">
            <div class="pb-4 text-center border border-blue-500 bg-blue-500 text-blue-900 text-lg">
            <h1 class="pt-2"><strong>DANH SÁCH SẢN PHẨM</strong>
            </div>
            <div class="py-4">
            <form action="index.php?act=lissp" method="post">
                  <input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="text" name="kyw">
                  <select name="iddm" id="" class="border border-gray-400 hover:border-blue-300 p-2">
                      <option value="0" selected>Tất cả</option>
                   <?php 
                   foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="'.$id.'">'.$name.'</option>';
                        
                    } ?>
                    
                    
               </select>
               <input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="submit" value="go" name="listok">
            </form>
            </div>
            <div class="pb-4">
                <table border="1" width="100%">
                    <tr>
                        <th></th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình</th>
                        <th>Gía</th>
                        <th>LƯỢT XEM</th>
                        <th>Xử lý</th>
                    </tr>
                    <?php
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp="index.php?act=suasp&id=".$id;
                        $xoasp="index.php?act=xoasp&id=".$id;
                        $hinhpath="../upload/".$img;
                        if(is_file($hinhpath)){
                            $hinh="<img src='".$hinhpath."' height='80' >";
                        }else {
                            $hinh="no photo";
                        }
                        echo '<tr>
                        <td><input type="checkbox" name="id"></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$hinh.'</td>
                        <td>'.$price.'</td>
                        <td>'.$luotxem.'</td>
                        <td><a href="'.$suasp.'"><input class="border border-gray-400 hover:bg-red-600 rounded-lg p-2 hover:text-white" type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input class="border border-gray-400 hover:bg-red-600 rounded-lg p-2 hover:text-white" type="button" value="Xóa"></a></td>
                    </tr>';
                        
                    }
                    ?>
                    
                </table>
            </div>
            <div>
            
                <a href="index.php?act=addsp"><input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="button" value="Nhập thêm"></a>
            </div>
        </main>