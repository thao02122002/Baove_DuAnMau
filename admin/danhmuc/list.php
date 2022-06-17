<main class="py-4">
            <div class="pb-4 text-center border border-blue-500 bg-blue-500 text-blue-900 text-lg">
            <h1 class="pt-2"><strong>DANH SÁCH LOẠI HÀNG HÓA</strong>
            </div>
            <div class="text-center">
            <div class="py-4 text-center">
                <table border="1" class="border border-black" width="100%">
                    <tr class="border border-black">
                        <th class="border border-black"></th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th>Xử lý</th>
                    </tr>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm="index.php?act=suadm&id=".$id;
                        $xoadm="index.php?act=xoadm&id=".$id;
                        echo '<tr>
                        <td><input type="checkbox" name="id"></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td><a href="'.$suadm.'"><input class="border border-gray-400 hover:bg-red-600 rounded-lg p-2 hover:text-white" type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input class="border border-gray-400 hover:bg-red-600 rounded-lg p-2 hover:text-white" type="button" value="Xóa"></a></td>
                    </tr>';
                        
                    }
                    ?>
                    
                </table>
            </div>
            <div>
            
                <a href="index.php?act=adddm"><input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="button" value="Nhập thêm"></a>
            </div>
            </div>
        </main>