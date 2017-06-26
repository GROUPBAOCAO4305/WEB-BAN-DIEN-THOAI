<?php 
	$ac=$_GET['ac'];
	if($ac=="Them"){
		include("modules/chitietpk/Them.php");
	} else if($ac=="Sua"){
		include("modules/chitietpk/Sua.php");
	}else{
	include("modules/chitietpk/lietke.php");}
?>