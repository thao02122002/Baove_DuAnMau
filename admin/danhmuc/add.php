<main class="py-4">
            <div class="pb-4 text-center border border-blue-500 bg-blue-500 text-blue-900 text-lg">
            <h1 class="pt-2"><strong>THÊM MỚI LOẠI HÀNG HÓA</strong>
            </div>
            
<br>
<br>
<div class="text-center">
            <form action="index.php?act=adddm" method="post">
                Mã loại
                <input class="border border-gray-400 hover:border-blue-300 p-2" type="text" name="maloai" >
                <br>
                <br>
                <div>
                Tên loại
                <input class="border border-gray-400 hover:border-blue-300 p-2" type="text" name="tenloai" >
                </div>
                <br>
                <input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="submit" value="Thêm mới" name="themmoi">
                <input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="reset" value="Nhập lại">
                <a href="index.php?act=lisdm"><input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="button" value="Danh sách"></a>
            </form>
            <?php
            if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
            ?>
            </div>
        </main>