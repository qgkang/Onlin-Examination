<?php 
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
session_start();
if($_SESSION['admin_user']==true){
	include("../conn/conn.php");
	if($_POST['Submit2']==true){
		$querys=mysql_query("update tb_kt set kt_lb='".$_POST['kt_lb']."',kt_lx='".$_POST['kt_lx']."',kt_fs='".$_POST['kt_fs']."',kt_nr='".$_POST['kt_nr']."',kt_daan='".$_POST['kt_daan']."',kt_zqdaan='".$_POST['kt_zqdaan']."' where kt_id='".$_POST['kt_id']."'");
		if($querys){
			echo "<script>alert('������³ɹ���'); window.location.href='index.php?htgl=������Ϣ����';</script>";
		}
	}
	if($_POST['Submit3']==true){
		$query=mysql_query("delete from tb_kt where kt_id='".$_POST['kt_id']."'");
		if($query){
			echo "<script>alert('������Ϣɾ���ɹ���'); window.location.href='index.php?htgl=������Ϣ����';</script>";
		}
	}
}else{
	echo "<script>alert('������ȷ��¼��'); window.location.href='checkadmin.php';</script>";
}
?>