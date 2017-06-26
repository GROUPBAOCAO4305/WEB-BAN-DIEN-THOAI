<?php
	include("../config.php");
	$madong=$_POST["madong"];
	$tendongsp=$_POST["tendongsp"];	
	$id=$_GET["id"];
	if(isset($_POST["them"]))
	{
		$sql="insert into tbldongsanpham(Madong,Tendong) values('$madong','$tendongsp')";
		mysql_query($sql);
	header("location:../../index.php?quanly=Dongsp&ac=lietke");
	}
	else if(isset($_POST["sua"]))
	{
		$sql="update tbldongsanpham set Tendong='$tendongsp' where Madong='$id'";
	mysql_query($sql);
	header("location:../../index.php?quanly=Dongsp&ac=lietke");
	}
	else
	{
		$sql="delete from tbldongsanpham where Madong='$id'";
		mysql_query($sql);
		header("location:../../index.php?quanly=Dongsp&ac=lietke");
	}
?>