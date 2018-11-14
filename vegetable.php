<?php
include('conn/conn.php');
header('Content-Type:application/x-www-form-urlencoded;charset=UTF-8');
header('Access-Control-Allow-Origin:*');
mysql_query("set names 'utf8'");

$item_name=$_POST['item_name'];

$check=mysql_query("select password  from customber where username ='$item_name'");
while ($row = $check->fetch_array(MYSQLI_ASSOC))
{
    
	$array[]=$row;
}
@header("Content-type: application/json; charset=utf-8");

echo json_encode($array);

?>