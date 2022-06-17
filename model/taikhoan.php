<?php
function loadall_taikhoan(){
    $sql="select * from admin order by id desc";
    $listtaikhoan= pdo_query($sql);
    return $listtaikhoan; 
}
function delete_taikhoan($id){
    $sql="delete from admin where id=".$id;
     pdo_execute($sql);
}
function insert_taikhoan($user,$email,$pass){
    $sql="insert into admin(user,email,pass) values('$user','$email','$pass')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql = "select * from admin where user='".$user."' AND pass='".$pass."'";
    $sp= pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$user,$email,$pass,$address,$tell){
    
$sql="update admin set user='".$user."',email='".$email."',pass='".$pass."',address='".$address."',tell='".$tell."' where  id=".$id;
     pdo_execute($sql);
    // UPDATE admin SET user='.$user.',email='.$email.',pass='.$pass.',address='.$address.',tell='.$tell.' WHERE 
}
function checkemail($email){
    $sql = "select * from admin where email='".$email."'";
    $sp= pdo_query_one($sql);
    // return $sp;

}
?>