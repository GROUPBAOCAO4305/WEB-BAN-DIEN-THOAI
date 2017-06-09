<?php 
session_start();
	if(isset($_SESSION['giohang']))
	{
		if(isset($_GET['conggiohang']))
		{
			$id=$_GET['conggiohang'];
			for($i = 0;$i < count($_SESSION['giohang']); $i++)
			{
				if($_SESSION['giohang'][$i]["id"]==$id)
				{
					$_SESSION['giohang'][$i]["soluong"]=$_SESSION['giohang'][$i]["soluong"]+ 1;
				}
			}
			header("location:../../index.php?xem=giohang");
		}
		if(isset($_GET['xoagiohang']))
		{
			$id=$_GET['xoagiohang'];
			for($i = 0;$i < count($_SESSION['giohang']); $i++)
			{	
				if($_SESSION['giohang'][$i]["id"]==$id)
				{	
					$_SESSION['giohang'][$i]["soluong"]=$_SESSION['giohang'][$i]["soluong"]-1;
				}
			}
			header("location:../../index.php?xem=giohang");
		}
		if(isset($_GET['xoasanpham']))
		{
			$id=$_GET['xoasanpham'];
			for($i = 0;$i < count($_SESSION['giohang']); $i++)
			{	
				if($_SESSION['giohang'][$i]["id"]==$id)
				{						
				unset($_SESSION['giohang'][$i]["id"]);
				break;
				}
			}
			header("location:../../index.php?xem=giohang");

		}
	}
	if(isset($_GET['item']))
	{
		$id=$_GET['item'];
		if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang']))
		{
			$count= count($_SESSION['giohang']);
			$flag=false;
			for($i=0;$i < $count;$i++)
			{
				if($_SESSION['giohang'][$i]["id"]==$id)
				{
					$_SESSION['giohang'][$i]["soluong"] +=1;
					$flag=true;
					break;
				}
			}
			if($flag==false){
				$_SESSION['giohang'][$count]["id"]=$id;
				$_SESSION['giohang'][$count]["soluong"]=1;
				}
		}
		else {
			$_SESSION['giohang']=array();
			$_SESSION['giohang'][0]["id"]=$id;
			$_SESSION['giohang'][0]["soluong"]=1;
			}
		header("location:../../index.php");
	}
?>