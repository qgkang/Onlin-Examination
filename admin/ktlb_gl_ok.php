<?php 
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
session_start();
if($_SESSION['admin_user']==true){
	include("../conn/conn.php");
	if($_POST['Submit']==true){
		if($_POST['online_ktlb']==""){
			echo "<script>alert('�����뿼�����'); window.location.href='index.php?htgl=����������';</script>";
		}else{
			$querys=mysql_query("insert into tb_ktlb (online_ktlb)values('".$_POST['online_ktlb']."')");
			if($querys){
				echo "<script>alert('���������ӳɹ���'); window.location.href='index.php?htgl=����������';</script>";
			}
		}
	}
	if($_GET['delete_ktlb']==true){
		$query=mysql_query("delete from tb_ktlb where ktlb_id='".$_GET['delete_ktlb']."'");
		if($query){
		echo "<script>alert('�������ɾ���ɹ���'); window.location.href='index.php?htgl=����������';</script>";
		}
	}
}else{
	echo "<script>alert('������ȷ��¼��'); window.location.href='checkadmin.php';</script>";
}
?>