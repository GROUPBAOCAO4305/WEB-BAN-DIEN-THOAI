<?php 
	session_start();
	include("../../admin/modules/config.php");
	$matkhaucu=$_POST["matkhaucu"];
	$matkhaumoi=$_POST["matkhaumoi"];
	if(isset($_POST['doimatkhau']))
	{
		$sql="select Matkhau from thanhvien where Matkhau='$matkhaucu'";
		$query=mysql_query($sql);
		$dong=mysql_num_rows($query);
		if($dong!=NULL)
		{
			$sql1="update thanhvien set Matkhau='$matkhaumoi' where Tendangnhap='{$_SESSION['user']}'";
			mysql_query($sql1);
				echo  '<script type="text/javascript">alert("Mật khẩu của bạn đã đổi thành công!");window.location ="../../index.php?xem=doimatkhau"; </script>';
		}
		else{
			echo  '<script type="text/javascript">alert("Mật khẩu cũ của bạn không khớp,Vui lòng nhạp lại!");window.location ="../../index.php?xem=doimatkhau"; </script>';
			}
	}

?>