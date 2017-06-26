<?php
	include("../config.php");
	 if(isset($_GET["id"]))
		{
			$id=$_GET["id"];
			$sql="delete from thanhvien where id='$id' ";
			mysql_query($sql);
			echo  '<script type="text/javascript">alert("Xóa thành viên thành công");window.location ="../../index.php?quanly=thanhvien&ac=lietke";</script>';
		}

?>