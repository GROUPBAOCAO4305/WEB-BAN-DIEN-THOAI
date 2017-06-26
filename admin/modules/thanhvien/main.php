<?php 
	$ac=$_GET['ac'];
	if($ac=="Them"){
		include("modules/quantrivien/Them.php");
	} else if($ac=="Sua"){
		include("modules/quantrivien/Sua.php");
	}else if($ac=="doimatkhau"){
		include("modules/quantrivien/doimatkhau.php");
	}
	else if($ac=="Suaquyen"){
		include("modules/quantrivien/suaquyen.php");
	}
	else{
	include("modules/thanhvien/lietke.php");}
?>