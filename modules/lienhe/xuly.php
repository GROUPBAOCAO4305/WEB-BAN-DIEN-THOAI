<?php 
		include("../../admin/modules/config.php");
		$hoten=$_POST["hoten"];
		$email=$_POST["email"];
		$diachi=$_POST["diachi"];
		$dienthoai=$_POST["phone"];
		$tieude=$_POST["tieude"];
		$noidung=$_POST["noidung"];
		if(isset($_POST['gui']))
		{
			$sql="insert into lienhe(Hoten,Tieude,Diachi,Email,SDT,Noidung) values('$hoten','$tieude','$diachi','$email','$dienthoai','$noidung')";
		if(mysql_query($sql)){
			echo '<script type="text/javascript">alert("Xin chúc mừng, thông tin của bạn đã gửi thành công!");window.location ="../../index.php?xem=lienhe"; </script>';  
		}
		}
?>