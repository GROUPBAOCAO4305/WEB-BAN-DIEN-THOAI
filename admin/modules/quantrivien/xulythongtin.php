<?php 
	include("../config.php");
		$tendangnhap=$_POST["tendangnhap"];
		$hoten=$_POST["hoten"];
		$ngay=$_POST["ngaysinh"];
		$ngaysinh=date("Y-m-d",strtotime($ngay)); 
		$email=$_POST["email"];
		$diachi=$_POST["diachi"];
		$sdt=$_POST["sdt"];
if(isset($_GET["id"]))
	{	
		$id=$_GET["id"];
		if(isset($_POST["sua"]))
		{	
		$sql="update quantri set Tendangnhap='$tendangnhap',fullname='$hoten',Email='$email',diachi='$diachi',ngaysinh='$ngaysinh',sdt='$sdt' where id='$id'";
	mysql_query($sql);
	echo  '<script type="text/javascript">alert("Sửa thông tin thành công");window.location ="../../index.php?quanly=quantrivien&ac=Sua"; </script>';
		}
	}
?>