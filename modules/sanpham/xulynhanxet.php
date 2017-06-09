<?php 
	session_start();
	include("../../admin/modules/config.php");
	if(isset($_SESSION['user'])){
		if(isset($_POST['gui']))
		$sql="select * from thanhvien where Tendangnhap in ('{$_SESSION['user']}')";
		$dn=mysql_query($sql);
		$dong=mysql_fetch_array($dn);
		$matv=$dong["id"];
		$masp=$_GET['id'];
		$nd=$_POST['noidung'];
		$tieude=$_POST['tieude'];
		$sql1="insert into nhanxet(idsanpham,idthanhvien,tieude,noidung) values('$masp','$matv','$tieude','$nd')";
		mysql_query($sql1);
		header("location:../../index.php?xem=chitietsanpham&id=".$masp);
	}
	else{
			$id=$_GET['id'];
			$_SESSION['loi']="Bạn cần đăng nhập để tiếp tục thực hiện chức năng này";
	header("location:../../index.php?xem=chitietsanpham&id=$id");
		}

?>