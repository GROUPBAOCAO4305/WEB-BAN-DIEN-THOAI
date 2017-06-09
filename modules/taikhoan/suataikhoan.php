<?php 
	session_start();
	include("../../admin/modules/config.php");
		$hoten = $_POST['hoten'];
		$ngay= $_POST['ngaysinh'];
		$ngaysinh=date("Y-m-d",strtotime($ngay)); 
		$diachi = $_POST['diachi'];
		$email = $_POST['email'];
		if(isset($_POST['sua'])){
		$sql="update thanhvien set fullname='$hoten',Ngaysinh='$ngaysinh',Diachi='$diachi',Email='$email' where Tendangnhap='{$_SESSION['user']}'";
		mysql_query($sql);
		echo '<script type="text/javascript">alert("Xin chúc mừng, bạn đã sửa thông tin tài khoản thành công");window.location ="../../index.php?xem=thongtintaikhoan"; </script>';
		}
?>