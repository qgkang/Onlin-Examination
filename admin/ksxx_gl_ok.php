<?php 
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
session_start();
if($_SESSION['admin_user']==true){
	include("../conn/conn.php");
	if($_GET['delete_ksxx']==true){
		$query=mysql_query("delete from tb_user where online_id='".$_GET['delete_ksxx']."'");
		if($query){
			echo "<script>alert('������Ϣɾ���ɹ���'); window.location.href='index.php?htgl=������Ϣ����';</script>";
		}	
	}
}else{
	echo "<script>alert('������ȷ��¼��'); window.location.href='checkadmin.php';</script>";
}
?>
