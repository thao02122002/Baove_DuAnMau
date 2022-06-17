<?php
  require "../dao/pdo.php";
  require "../dao/loai.php";
  if(isset($_POST['ma_loai'])){
    loai_update($_POST['ma_loai'],$_POST['ten_loai']);
 header('Location: demo3.php');
}
  if(isset($_GET['ma_loai'])){
     $ma_loai=$_GET['ma_loai'];
     $loai_info=loai_getinfo($ma_loai);
     extract($loai_info);
     
?>
<form action="edit.php" method="post">
<input type="text" name="ten_loai" value="<?=$ten_loai?>">
<br>
<input type="text" name="ma_loai" value="<?=$ma_loai?>" readonly>
<br>
<input type="submit" value="Cập nhật">
</form>
<?php 
}?>