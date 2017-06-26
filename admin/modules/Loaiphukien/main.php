<?php 
	$ac=$_GET['ac'];
	if($ac=="Them"){
		include("modules/Loaiphukien/Them.php");
	} else if($ac=="Sua") {
		include("modules/Loaiphukien/Sua.php");
	}else{
	include("modules/Loaiphukien/lietke.php");}
?>