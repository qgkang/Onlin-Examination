<?php	
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
$username=$_POST['username'];
$userpwd=$_POST['userpwd'];
include_once("../conn/conn.php");
$sql=mysql_query("select * from tb_admin where name='".$username."' and pwd='".$userpwd."'",$conn);
$info=mysql_fetch_array($sql);
if($info==false){
  echo "<script>alert('对不起,用户名或密码输入错误!');history.back();</script>";
  exit;
}else{
 	$_SESSION["admin_user"]=$username; 
  	echo "<script>window.location.href='index.php';</script>";
}
?>
