<main class="py-4">
            <div class="pb-4 text-center border border-blue-500 bg-blue-500 text-blue-900 text-lg">
            <h1 class="pt-2"><strong>DANH SÁCH TÀI KHOẢN</strong>
            </div>
            <div class="py-4">
                <table border="1" width="100%" >
                    <tr>
                        <th></th>
                        <th>Mã TK</th>
                        <th>Tên ĐĂNG NHẬP</th>
                        <th>MẬT KHẨU</th>
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>ĐIỆN THOẠI</th>
                        <th>VAI TRÒ</th>
                        <th>Xử lý</th>
                    </tr>
                    <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suatk="index.php?act=suatk&id=".$id;
                        $xoatk="index.php?act=xoatk&id=".$id;
                        echo '<tr>
                        <td><input type="checkbox" name="id"></td>
                        <td>'.$id.'</td>
                        <td>'.$user.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$tell.'</td>
                        <td>'.$role.'</td>
                        <td><a href="'.$suatk.'"><input class="border border-gray-400 hover:bg-red-600 rounded-lg p-2 hover:text-white" type="button" value="Sửa"></a> <a href="'.$xoatk.'"><input class="border border-gray-400 hover:bg-red-600 rounded-lg p-2 hover:text-white" type="button" value="Xóa"></a></td>
                    </tr>';
                        
                    }
                    ?>
                    
                </table>
            </div>
            
        </main>