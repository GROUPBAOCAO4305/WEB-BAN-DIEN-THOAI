<?php
	include("../config.php");
	if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		$sql="delete from chitietdonhang where id='$id'";
		mysql_query($sql);
		header("location:../../index.php?quanly=chitietdonhang&ac=lietke"); 
	}
?>