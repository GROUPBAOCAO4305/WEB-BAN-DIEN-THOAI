<?php 
	include("../../admin/modules/config.php");
  	$tendangnhap=$_POST["tendangnhap"];
	$matkhau=$_POST["matkhau"];
	$hoten=$_POST["hoten"];
	$email=$_POST["email"];
	$diachi=$_POST["diachi"];
	$ngay=$_POST["ngaysinh"];
	$ngaysinh=date("Y-m-d",strtotime($ngay));
	if(isset($_POST['dangky']))
	{
		$sql="insert into thanhvien(Tendangnhap,Matkhau,fullname,Email,Diachi,Ngaysinh) values('$tendangnhap','$matkhau','$hoten','$email','$diachi','$ngaysinh')";
			mysql_query($sql);
			echo '<script type="text/javascript">alert("Xin chúc mừng, bạn đã đăng ký tài khoản thành công");window.location ="../../index.php?xem=dangnhap"; </script>';
	}
?>