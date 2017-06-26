<?php 
	include("../config.php");
	$quyen=$_POST["suaquyen"];
	if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		if(isset($_POST["sua"]))
		{ 
			$sql="update quantri set Quyen='$quyen' where id='$id'";
			mysql_query($sql);
			echo  '<script type="text/javascript">alert("Sửa quyền quản trị thành công");window.location ="../../index.php?quanly=quantrivien&ac=lietke"; 
            </script>';
		}
	}
?>