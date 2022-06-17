<?php
if(is_array($dm)){
    extract($dm);
}
?>
<main class="py-4">
            <div class="pb-4">
            <h1><strong>CẬP NHẬT LOẠI HÀNG HÓA</strong>
            </div>
            
<br>
<br>
            <form action="index.php?act=updatedm" method="post">
                Mã loại
                <input class="border border-gray-400 hover:border-blue-300 p-2" type="text" name="maloai" >
                <br>
                <br>
                <div>
                Tên loại
                <input class="border border-gray-400 hover:border-blue-300 p-2" type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;?>" >
                </div>
                <br>
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                <input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="submit" value="Cập nhật" name="capnhat">
                <input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="reset" value="Nhập lại">
                <a href="index.php?act=lisdm"><input class="border border-gray-400 hover:bg-gray-200 rounded-lg p-2" type="button" value="Danh sách"></a>
            </form>
            <?php
            if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
            ?>
        </main>