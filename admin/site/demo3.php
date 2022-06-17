<?php
require "../dao/pdo.php";
require "../dao/loai.php";


//thêm ms loại
if(isset($_POST['ten_loai'])){
$ten_loai=$_POST['ten_loai'];
loai_insert($ten_loai);
}
//xóa
if(isset($_GET['ma_loai'])){
    loai_delete($_GET['ma_loai']);
}



//load lại ds loại
$dsloai=loai_selectall();
//var_dump($dsloai);
foreach($dsloai as $loai) {
    extract($loai);
    $del_link="demo3.php?ma_loai=".$ma_loai;
    $edit_link="edit.php?ma_loai=".$ma_loai;
    echo '<li><a href="#">'.$ten_loai.'</a> - <a href="'.$edit_link.'">Sửa</a> - <a href="'.$del_link.'">del</a></li>';

}
?>
<br>
<br>
<form action="demo3.php" method="post">
Mã loại
<input type="text" name="ten_loai" id="">
<br>
Tên loại
<input type="submit" value="Thêm mới">
</form>