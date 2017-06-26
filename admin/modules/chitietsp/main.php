<?php 
	$ac=$_GET['ac'];
	if($ac=="Them"){
		include("modules/chitietsp/Them.php");
	} else if($ac=="Sua"){
		include("modules/chitietsp/Sua.php");
	}else{
	include("modules/chitietsp/lietke.php");}
?>