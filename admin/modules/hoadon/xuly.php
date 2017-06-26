<?php
	include("../config.php");
	if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		$sql="delete from donhang where id='$id'";
		mysql_query($sql);
		header("location:../../index.php?quanly=hoadon&ac=lietke"); 
	}
?>