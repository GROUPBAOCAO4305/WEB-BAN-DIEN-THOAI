<?php 
	$ac=$_GET['ac'];
	if($ac=="Them"){
		include("modules/hoadon/Them.php");
	} else if($ac=="Sua"){
		include("modules/hoadon/Sua.php");
	}else{
	include("modules/hoadon/lietke.php");}
?>