<?php
$conn=@mysql_connect("localhost","root","root");   //建立数据库的连接
@mysql_select_db("db_examination",$conn);   //选择数据库
@mysql_query("set names utf-8");
?>
