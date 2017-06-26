<?php 
	$ac=$_GET['ac'];
	if($ac=="Them"){
		include("modules/quangcao/Them.php");
	} else if($ac=="Sua"){
		include("modules/quangcao/Sua.php");
	}else{
	include("modules/quangcao/lietke.php");}
?>