<?php 
	$ac=$_GET['ac'];
	if($ac=="Them"){
		include("modules/chitietdonhang/Them.php");
	} else if($ac=="Sua"){
		include("modules/chitietdonhang/Sua.php");
	}else{
	include("modules/chitietdonhang/lietke.php");}
?>