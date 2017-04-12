<?php 
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
if($_SESSION['admin_user']==true){
	include("../conn/conn.php");
	if($_GET['delete_ksxx']==true){
		$query=mysql_query("delete from tb_user where online_id='".$_GET['delete_ksxx']."'");
		if($query){
			echo "<script>alert('考生信息删除成功！'); window.location.href='index.php?htgl=考生信息管理';</script>";
		}	
	}
}else{
	echo "<script>alert('请您正确登录！'); window.location.href='checkadmin.php';</script>";
}
?>
