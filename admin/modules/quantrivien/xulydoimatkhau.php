<?php 
	session_start();
	include("../config.php");
	$matkhaucu=$_POST["matkhaucu"];
	$matkhaumoi=$_POST["matkhaumoi"];
	if(isset($_POST['doimatkhau']))
	{
			$sql1="update quantri set Matkhau='$matkhaumoi' where Tendangnhap='{$_SESSION['tendangnhap']}'";
			mysql_query($sql1);
				echo  '<script type="text/javascript">alert("Mật khẩu của bạn đã đổi thành công!");window.location ="../../index.php"; </script>';
	}

?>