<?php
	include("../config.php");
	 if(isset($_GET["id"]))
		{
			$id=$_GET["id"];
			$sql="delete from nhanxet where id='$id' ";
			mysql_query($sql);
			echo  '<script type="text/javascript">alert("Xóa nhận xét thành công");window.location ="../../index.php?quanly=nhanxet&ac=lietke";</script>';
		}

?>