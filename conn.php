<?php
$conn = @mysql_connect("140.143.231.66:3306","root","root") or die ("数据库连接错误！connect error!");//数据库主机，账号，密码//host, acc, pw
if(!$conn)
{
	die("mysql conn failed");
}
else{

	mysql_query("set names uft-8");
	mysql_select_db("ipan",$conn);
	if(!$conn)
	{
		die("database selected failed");
	}
}

?>