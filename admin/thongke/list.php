<main class="py-4">
            <div class="pb-4 text-center border border-blue-500 bg-blue-500 text-blue-900 text-lg">
            <h1 class="pt-2"><strong>DANH SÁCH THỐNG KÊ</strong>
            </div>
            <div class="py-4">
                <table border="1" width="100%" >
                    <tr>
                        <th>MÃ DANH MỤC</th>
                        <th>TÊN DANH MỤC</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                    <?php
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        echo '<tr>
                        <td>'.$madm.'</td>
                        <td>'.$tendm.'</td>
                        <td>'.$countsp.'</td>
                        <td>'.$maxprice.'</td>
                        <td>'.$minprice.'</td>
                        <td>'.$avgprice.'</td>
                    </tr>';
                    }
                    ?>
                    
                    
                </table>
            </div>
            <div>
            
                
                <a href="index.php?act=bieudo"><input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="button" value="Xem biểu đồ"></a>
            </div>
        </main>