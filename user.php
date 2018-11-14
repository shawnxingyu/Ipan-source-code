<?php
include('conn/conn.php');
header('Content-Type:application/x-www-form-urlencoded;charset=UTF-8');
header('Access-Control-Allow-Origin:*');
mysql_query("set names 'utf8'");


$username=$_POST['username']; 
$password=$_POST['password']; 	

$check=mysql_query("select password  from customber where username ='$user'");
$checkname=mysql_query("select password  from customber where password ='$user'");
$res=mysql_fetch_array($check)[0];
$res1=mysql_fetch_array($checkname)[0];

if($res1){
    if($res!=$pass){//密码错误 pw wrong
        $cars=array("status"=>"0","msg"=>"密码错误 pw wrong","user"=>"");
    }else{//登陆成功 login sucess
        $cars=array("status"=>"1","msg"=>"登陆成功 login sucess","user"=>"$user");
    }
}else{//用户不存在 user unavaliable
    $cars=array("status"=>"2","msg"=>"用户不存在 user unavaliable","user"=>"");
}
echo json_encode($cars);
?>