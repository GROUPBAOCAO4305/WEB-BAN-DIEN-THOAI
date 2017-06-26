<?php
	include("../config.php");
		$tendangnhap=$_POST["tendangnhap"];
		$hoten=$_POST["hoten"];
		$ngay=$_POST["ngaysinh"];
		$ngaysinh=date("Y-m-d",strtotime($ngay)); 
		$email=$_POST["email"];
		$diachi=$_POST["diachi"];
		$sdt=$_POST["sdt"];
		$matkhau=md5($_POST["matkhau"]);
		$quyen=$_POST["quyen"];
	if(isset($_POST["them"]))
	{
		$sql="insert into quantri(Tendangnhap,Matkhau,fullname,Email,diachi,ngaysinh,sdt,Quyen) values('$tendangnhap','$matkhau','$hoten','$email','$diachi','$ngaysinh','$sdt','$quyen')";
		mysql_query($sql);		
				echo  '<script type="text/javascript">alert("Thêm quản trị viên thành công");window.location ="../../index.php?quanly=quantrivien&ac=lietke"; </script>';
	
	}
?>