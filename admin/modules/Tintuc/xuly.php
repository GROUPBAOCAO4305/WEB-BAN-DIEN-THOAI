<?php
	include("../config.php");
	$tieude=$_POST["tieude"];
	$tomtat=$_POST["tomtat"];
	$noidung=$_POST["noidung"];
	$ngaydangtin=$_POST["ngaydangtin"];
	$ngay=date("Y-m-d",strtotime($ngaydangtin)); 
	$tacgia=$_POST["tacgia"];
	if(isset($_POST["them"]))
	{
			$tenanh=$_FILES["anh"]["name"];
			if($tenanh!=""){
			$time=date("Ymdhis");
			$tenanh=$time . $tenanh;
			$dich="../../../uploads/baiviet/".$tenanh;
			copy($_FILES["anh"]["tmp_name"],$dich);
			$dich=substr($dich,17);
			}
		$sql="insert into tbltintuc(TieuDe,TomTat,NoiDung,NgayDangTin,TacGia,HinhAnh) values('$tieude','$tomtat','$noidung','$ngay','$tacgia','$dich')";
		mysql_query($sql);		
		header("location:../../index.php?quanly=Tintuc&ac=lietke");
	}
	else if(isset($_GET["id"]))
	{	
		$id=$_GET["id"];
		if(isset($_POST["sua"]))
		{	
		$tenanh=$_FILES["anh"]["name"];
		if($tenanh!=""){
			$time=date("Ymdhis");
			$tenanh=$time . $tenanh;
			$dich="../../../uploads/baiviet/".$tenanh;
			copy($_FILES["anh"]["tmp_name"],$dich);
			$dich=substr($dich,17);
			$sql="update tbltintuc set TieuDe='$tieude',TomTat='$tomtat',NoiDung='$noidung',NgayDangTin='$ngay',TacGia='$tacgia',HinhAnh='$dich' where MaTintuc='$id'";
			$sql1="select HinhAnh from tbltintuc where MaTintuc='$id'";
			$xoa=mysql_query($sql1);
			$xoanh=mysql_fetch_array($xoa);
			if($xoanh["HinhAnh"]!="")
				{
					unlink("../../../uploads/".$xoanh["HinhAnh"]);
				}
			}
		else{
		$sql="update tbltintuc set TieuDe='$tieude',TomTat='$tomtat',NoiDung='$noidung',NgayDangTin='$ngay',TacGia='$tacgia' where MaTintuc='$id'";
			}
	mysql_query($sql);
	header("location:../../index.php?quanly=Tintuc&ac=lietke");
	}
	else
		{
			$sql="delete from tbltintuc where MaTinTuc='$id' ";
			mysql_query($sql);
			header("location:../../index.php?quanly=Tintuc&ac=lietke");
		}
	}
?>