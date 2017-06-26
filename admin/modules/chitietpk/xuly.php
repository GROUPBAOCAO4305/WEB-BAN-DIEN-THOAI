<?php
	include("../config.php");
	$tenphukien=$_POST["tenphukien"];
	$loaiphukien=$_POST["loaiphukien"];	
	$mota=$_POST["mota"];
	$baohanh=$_POST["baohanh"];
	$tinhtrang=$_POST["tinhtrang"];
	$trangthai=$_POST["trangthai"];	
	$gia=$_POST["gia"];
	$id=$_GET["id"];
	if(isset($_POST["them"]))
	{
		$ten=$_FILES["hinhanh"]["name"];
		if($ten!=""){
			$time=date("Ymdhis");
			$ten=$time . $ten;
			$dich="../../../uploads/phukien/".$ten;
			copy($_FILES["hinhanh"]["tmp_name"],$dich);
			$dich=substr($dich,17);
		}
		$sql="insert into chitietphukien(Tenphukien,Maphukien,Mota,Baohanh,Tinhtrang,Trangthai,Hinhanh,Gia) values('$tenphukien','$loaiphukien','$mota','$baohanh','$tinhtrang','$trangthai','$dich','$gia')";
		
		
		mysql_query($sql);		
		header("location:../../index.php?quanly=chitietpk&ac=lietke");
	}
	else if(isset($_POST["sua"]))
	{
		$tenanh=$_FILES["hinhanh"]["name"];
		if($tenanh!=""){
			$time=date("Ymdhis");
			$tenanh=$time . $tenanh;
			$dich="../../../uploads/phukien/".$tenanh;
			copy($_FILES["hinhanh"]["tmp_name"],$dich);
			$dich=substr($dich,17);
			$sql="update chitietphukien set Tenphukien='$tenphukien',Maphukien='$loaiphukien',Mota='$mota',Baohanh='$baohanh',Tinhtrang='$tinhtrang',Trangthai='$trangthai',Hinhanh='$dich',Gia='$gia' where Mahang='$id'";
			$sql1="select Hinhanh from chitietphukien where Mahang='$id'";
			$xoa=mysql_query($sql1);
			$xoanh=mysql_fetch_array($xoa);
			if($xoanh["Hinhanh"]!="")
				{
					unlink("../../../uploads/".$xoanh["Hinhanh"]);
				}
			}else{
		$sql="update chitietphukien set Tenphukien='$tenphukien',Maphukien='$loaiphukien',Mota='$mota',Baohanh='$baohanh',Tinhtrang='$tinhtrang',Trangthai='$trangthai',Gia='$gia' where Mahang='$id'";
			}
	mysql_query($sql);
	header("location:../../index.php?quanly=chitietpk&ac=lietke");
	}
	else
	{
		$sql="delete from chitietphukien where Mahang='$id' ";
		mysql_query($sql);
		header("location:../../index.php?quanly=chitietpk&ac=lietke");
	}
?>