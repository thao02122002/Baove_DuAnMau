<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
 include "../model/sanpham.php";
 include "../model/taikhoan.php";
 include "../model/binhluan.php";
 include "../model/thongke.php";

include "header.php";
    //controller
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm':
                //kt ng dùng có click nút add hay k 
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                   insert_danhmuc($tenloai);
                    
                    $thongbao="Thêm thành công";

                }
                
                include "../admin/danhmuc/add.php";
                break;
            case 'lisdm': 
                $listdanhmuc= loadall_danhmuc();
                include "../admin/danhmuc/list.php";
                break;
             case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc= loadall_danhmuc();
                include "../admin/danhmuc/list.php";
                break;  
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                 
                include "../admin/danhmuc/update.php";
                break; 
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao="cập nhật thành công";

                }
                $listdanhmuc= loadall_danhmuc();
                include "../admin/danhmuc/list.php";
                break;
                //sp
                
                case 'addsp':
                    //kt ng dùng có click nút add hay k 
                    
    


                        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                            $iddm=$_POST['iddm'];
                            $tensp=$_POST['tensp'];
                            $gia=$_POST['giasp'];
                            $mota=$_POST['mota'];
                            $hinh=$_FILES['hinh']['name'];
                            $target_dir = "../upload/";
                            $target_file = $target_dir.basename($_FILES["hinh"]["name"]);
                            if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
        
                            }else {
                            
                            }

                           insert_sanpham($tensp,$gia,$hinh,$mota,$iddm);
                           $thongbao="Thêm thành công";
                    }
                    $listdanhmuc= loadall_danhmuc();
                    include "../admin/sanpham/add.php";
                    break;
                case 'lissp': 
                    if(isset($_POST['listok'])&&($_POST['listok'])){
                        $kyw=$_POST['kyw'];
                        $iddm=$_POST['iddm'];

                    }else {
                        $kyw='';
                        $iddm=0;
                    }
                    $listdanhmuc= loadall_danhmuc();
                    $listsanpham= loadall_sanpham($kyw,$iddm);
                    include "../admin/sanpham/list.php";
                    break;
                 case 'xoasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham= loadall_sanpham("",0);
                    include "../admin/sanpham/list.php";
                    break;  
                case 'suasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sanpham=loadone_sanpham($_GET['id']);
                    }
                    $listdanhmuc= loadall_danhmuc();
                    include "../admin/sanpham/update.php";
                    break; 
                case 'updatesp':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id=$_POST['id'];
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['tensp'];
                        $gia=$_POST['giasp'];
                        $mota=$_POST['mota'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir.basename($_FILES["hinh"]["name"]);
                        if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
    
                        }else {
                        
                        }
                        update_sanpham($id,$iddm,$tensp,$gia,$mota,$hinh);
                        $thongbao="cập nhật thành công";
    
                    }
                    $listdanhmuc= loadall_danhmuc();
                    $listsanpham= loadall_sanpham();
                    include "../admin/sanpham/list.php";
                    break;
            case 'dskh':
                
                $listtaikhoan= loadall_taikhoan();
                include "../admin/taikhoan/list.php";
                break;  
            
             case 'xoatk':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            delete_taikhoan($_GET['id']);
                        }
                        $listtaikhoan= loadall_taikhoan(0);
                        include "../admin/taikhoan/list.php";
                        break; 
            case 'dsbl':
                        $listbinhluan= loadall_binhluan(0);
                        include "../admin/binhluan/list.php";
                        break;          
            case 'xoabl':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            delete_binhluan($_GET['id']);
                        }
                        $listbinhluan= loadall_binhluan(0);
                        include "../admin/thongke/list.php";
                        break; 
            case 'thongke':
                    
                    $listthongke= loadall_thongke();
                    include "../admin/thongke/list.php";
                    break;  
             case 'bieudo':
                    
                $listthongke= loadall_thongke();
                include "../admin/thongke/bieudo.php";
                 break;     
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }
    
    include "footer.php";
