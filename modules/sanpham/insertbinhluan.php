<?php 
session_start();
	 $conn=mysql_connect("localhost","root","") or die("can't connect your database");  
    mysql_select_db("bandienthoai",$conn);  
if(isset($_SESSION['user'])){
		if(isset($_POST['gui']))
		$sql="select * from thanhvien where Tendangnhap in ('{$_SESSION['user']}')";
		$dn=mysql_query($sql);
		$dong=mysql_fetch_array($dn);
		$matv=$dong["id"];
		$masp=$_GET['id'];
		$nd=$_POST['content'];
		$sql1="insert into binhluan(Mathanhvien,Masanpham,Noidung) values('$matv','$masp','$nd')";
		mysql_query($sql1);
		header("location:../../index.php?xem=chitietsanpham&id=".$masp);
	}
	else{
			$id=$_GET['id'];
			$_SESSION['loi']="Bạn cần đăng nhập để tiếp tục thực hiện chức năng này";
			header("location:../../index.php?xem=chitietsanpham&id=$id");
		}
?>