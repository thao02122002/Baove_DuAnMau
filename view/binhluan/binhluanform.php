<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

$idpro=$_REQUEST['idpro'];
$dsbl=loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../taikhoan//style.css">
</head>
<body>
    

<div class="danh muc">
                    <table class="border border-green-500 " >
                        <tr>
                            <th class="h-11  text-white" ><button>BÌNH LUẬN</button></th>
                        </tr>
                        <div class="px-4">
                        <?php 
                        
                       
                         foreach ($dsbl as $bl) {
                            extract($bl);
                             echo '<tr><td class="border border-green-500 pl-12 h-10 hover:text-yellow-600">'.$noidung.' </td><br>';
                             echo '<td class="border border-green-500 pl-12 h-10 hover:text-yellow-600">'.$iduser.' </td>';
                             echo '<td class="border border-green-500 pl-12 h-10 hover:text-yellow-600">'.$ngaybinhluan.' </td></tr>';
                            }
                         ?> 
                         </div>
                        <tr>
                          <td class="  pl-12 h-10 ">
                              <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                                  <input type="hidden" name="idpro" value="<?=$idpro?>">
                                  <input  type="text" value="" name="noidung">
                              <input type="submit" name="guibinhluan" value="Gủi bình luận">
                              </form></td>  
                        </tr>
                        <?php
                        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                            $noidung=$_POST['noidung'];
                            $idpro=$_POST['idpro'];
                            $iduser=$_SESSION['user']['id'];
                            $ngaybinhluan=date("h:i:sa d/m/Y");
                            insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                        header("Location: ".$_SERVER['HTTP_REFERER']);
                        }
                        
                        ?>
                            
                            
                    </table>
                </div>
</body>
</html>