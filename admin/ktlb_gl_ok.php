<?php 
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
if($_SESSION['admin_user']==true){
	include("../conn/conn.php");
	if($_POST['Submit']==true){
		if($_POST['online_ktlb']==""){
			echo "<script>alert('请输入考题类别！'); window.location.href='index.php?htgl=考题类别管理';</script>";
		}else{
			$querys=mysql_query("insert into tb_ktlb (online_ktlb)values('".$_POST['online_ktlb']."')");
			if($querys){
				echo "<script>alert('考题类别添加成功！'); window.location.href='index.php?htgl=考题类别管理';</script>";
			}
		}
	}
	if($_GET['delete_ktlb']==true){
		$query=mysql_query("delete from tb_ktlb where ktlb_id='".$_GET['delete_ktlb']."'");
		if($query){
		echo "<script>alert('考题类别删除成功！'); window.location.href='index.php?htgl=考题类别管理';</script>";
		}
	}
}else{
	echo "<script>alert('请您正确登录！'); window.location.href='checkadmin.php';</script>";
}
?>