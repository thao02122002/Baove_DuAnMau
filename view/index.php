<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../view/header.php";
include "../view/global.php";


$spnew= loadall_sanpham_home();
$dsdm=loadall_danhmuc();
$dstop=loadall_sanpham_top();

if((isset($_GET['act']))&&($_GET['act'])){
    $act=$_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include "../view/gioithieu.php";
            break;
            case 'sanphamct':
                
                if(isset($_GET['idsp'])&&$_GET['idsp']>0){
                    $id=$_GET['idsp'];
                  
                   
                   $onesp=loadone_sanpham($id);
                   extract($onesp);
                   $sp_cung_loai= load_sanpham_cungloai($id,$iddm);
                    include "../view/sanphamct.php";
                }else {
                    include "../view/home.php";
                }
                
                break;
                case 'sanpham':
                    if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                        $kyw=$_POST['kyw'];

                    }else {
                        $kyw="";
                    }
                    if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                        $iddm=$_GET['iddm'];
                       
                    }else {
                        $iddm=0;
                    }
                    $dssp= loadall_sanpham($kyw,$iddm);
                    $tendm=load_ten_dm($iddm);
                     include "../view/sanpham.php";
                    
                    break;
                 case 'dangky':
                    
                    if(isset($_POST['dangky'])&&($_POST['dangky'])){
                        $user=$_POST['user'];
                        $email=$_POST['email'];
                        
                        $pass=$_POST['pass'];
                        insert_taikhoan($user,$email,$pass);
                        $thongbao="đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năm bình luận";


                    }
                    include "../view/taikhoan/dangky.php";
                    break;
                 case 'dangnhap':
                    
                        if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                            $user=$_POST['user'];
                          
                            $pass=$_POST['pass'];
                            $checkuser=checkuser($user,$pass);
                            if(is_array($checkuser)){
                                $_SESSION['user']=$checkuser;
                                $thongbao="đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năm bình luận";
                                
                                
                            }else {
                                $thongbao="Tài khoản k tổn tại";
                            }
                        
                        }
                        include "../view/taikhoan/dangnhap.php";
                        break;
                case 'edit_taikhoan':
                    
                             if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                $id=$_POST['id'];
                                $user=$_POST['user'];
                                $email=$_POST['email'];
                                $pass=$_POST['pass'];
                                $address=$_POST['address'];
                                $tell=$_POST['tell']; 
                                
                                update_taikhoan($id,$user,$email,$pass,$address,$tell);
                                  header('Location: index.php?act=edit_taikhoan');
                                
                                
                                    
                                    
                                
                            
                             }
                            include "../view/taikhoan/edit_taikhoan.php";
                     break;
                     case 'quenmk':
                    
                         if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                            
                           $email=$_POST['email'];
                            
                          $checkemail= checkemail($email);
                            if(is_array($checkemail)){
                                $thongbao="Mật khẩu của bạn là:".$checkemail['pass'];
                            }else {
                                $thongbao="Email này k tồn tại";
                            }
                          
                         }
                         include "../view/taikhoan/quenmk.php";
                       
                break;
                case 'thoat':
                    session_unset();
                    header('Location:index.php');
                    break;
                      
        case 'tintuc':
            include "../view/tintuc.php";
            break;
        case 'lienhe':
            include "../view/lienhe.php";
            break;
        default:
        include "../view/home.php";
            break;
    }
}else {
    include "../view/home.php";
}

include "../view/footer.php";

?>