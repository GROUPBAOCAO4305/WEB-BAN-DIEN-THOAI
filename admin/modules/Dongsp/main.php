<?php 
	$ac=$_GET['ac'];
	if($ac=="Them"){
		include("modules/Dongsp/Them.php");
	} else if($ac=="Sua"){
		include("modules/Dongsp/Sua.php");
	}else{
	include("modules/Dongsp/lietke.php");}
?>