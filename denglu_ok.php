<?php 
session_start();
header("Content-Type:text/html;charsetr=utf-8");
include ("conn/conn.php");
$online_number = $_POST['online_number'];
$online_pass = $_POST['online_pass'];
$sql = "select * from tb_user where online_number='".$online_number."' and online_pass='".$online_pass."'";
$query = mysql_query($sql);
if(mysql_num_rows($query)>0){
    $_SESSION['online_number'] = $online_number;
    echo "<script> alert('��¼�ɹ�!'); window.location.href='index.php?online=���뿼��';</script>";
}else{
    echo "��¼ʧ��!";
}

?>