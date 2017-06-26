<?php
	include("../config.php");
	 if(isset($_GET["id"]))
		{
			$id=$_GET["id"];
			$sql="delete from binhluan where Mabinhluan='$id' ";
			mysql_query($sql);
			echo  '<script type="text/javascript">alert("Xóa bình luận thành công");window.location ="../../index.php?quanly=binhluan&ac=lietke";</script>';
		}

?>