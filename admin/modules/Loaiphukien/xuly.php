<?php
	include("../config.php");
	if(isset($_POST["them"]))
	{
		$maphukien=$_POST["maphukien"];
		$tenloaiphukien=$_POST["tenloaiphukien"];	
		$sql="insert into loaiphukien(Maphukien,Loaiphukien) values('$maphukien','$tenloaiphukien')";
		mysql_query($sql);
		echo  '<script type="text/javascript">alert("Bạn thêm loại phụ kiện thành công");window.location ="../../index.php?quanly=Loaiphukien&ac=lietke"; </script>';
		//header("location:../../index.php?quanly=Loaiphukien&ac=lietke");
	}
	else if(isset($_GET["id"]))
	{ 
		$id=$_GET["id"];
		if(isset($_POST["sua"]))
		{
			$tenloaiphukien=$_POST["tenloaiphukien"];	
			$sql="update loaiphukien set Loaiphukien='$tenloaiphukien' where Maphukien='$id'";
		
		mysql_query($sql);
		echo '<script type="text/javascript">alert("Bạn sửa loại phụ kiện thành công");window.location ="../../index.php?quanly=Loaiphukien&ac=lietke"; </script>';
		//header("location:../../index.php?quanly=Loaiphukien&ac=lietke");
		}
		else
		{
			$sql="delete from loaiphukien where Maphukien='$id'";
			mysql_query($sql);
			echo '<script type="text/javascript">alert("Bạn xóa loại phụ kiện thành công");window.location ="../../index.php?quanly=Loaiphukien&ac=lietke"; </script>';
			//header(			   "location:../../index.php?quanly=Loaiphukien&ac=lietke");
		}
	}
?>