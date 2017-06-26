<?php 
	include("../config.php");
	if(isset($_GET["id"]))
		{
			$id=$_GET["id"];
			$sql="delete from quantri where id='$id' ";
			mysql_query($sql);
			echo  '<script type="text/javascript">alert("Xóa quản trị viên thành công");window.location ="../../index.php?quanly=quantrivien&ac=lietke";</script>';
		}
?>