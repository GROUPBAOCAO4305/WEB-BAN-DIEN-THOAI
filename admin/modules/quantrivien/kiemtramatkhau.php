<?php 
	session_start();
	include("../config.php");
	$matkhaucu=md5($_POST['matkhaucu']);
	$sql="select Matkhau from quantri where Matkhau='$matkhaucu' and Tendangnhap='{$_SESSION['tendangnhap']}'";
	$query =mysql_query($sql);
	$kt=mysql_num_rows($query);
	if($kt==1){ 
		echo 'true';
	}
	else{
		echo 'false';
	}
?>