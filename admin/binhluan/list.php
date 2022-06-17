<main class="py-4">
            <div class="pb-4 text-center border border-blue-500 bg-blue-500 text-blue-900 text-lg">
            <h1 class="pt-2"><strong>DANH SÁCH BÌNH LUẬN</strong>
            </div>
            <div class="py-4">
                <table border="1" width="100%">
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Nội dung </th>
                        <th>Iduser</th>
                        <th>Idpro</th>
                        <th>Ngày bình luận </th>
                        <th>Xử lý</th>
                    </tr>
                    <?php
                    foreach ($listbinhluan as $binhluan) {
                        extract($binhluan);
                        $suabl="index.php?act=suabl&id=".$id;
                        $xoabl="index.php?act=xoabl&id=".$id;
                        echo '<tr>
                        <td><input type="checkbox" name="id"></td>
                        <td>'.$id.'</td>
                        <td>'.$noidung.'</td>
                        <td>'.$iduser.'</td>
                        <td>'.$idpro.'</td>
                        <td>'.$ngaybinhluan.'</td>
                        
                        <td> <a href="'.$xoabl.'"><input class="border border-gray-400 hover:bg-red-600 rounded-lg p-2 hover:text-white" type="button" value="Xóa"></a></td>
                    </tr>';
                        
                    }
                    ?>
                    
                </table>
            </div>
            
        </main>