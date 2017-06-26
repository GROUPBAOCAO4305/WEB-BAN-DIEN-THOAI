<?php 
	$ac=$_GET['ac'];
	if($ac=="Them"){
		include("modules/Tintuc/Them.php");
	} else if($ac=="Sua"){
		include("modules/Tintuc/Sua.php");
	}else{
	include("modules/Tintuc/lietke.php");}
?>