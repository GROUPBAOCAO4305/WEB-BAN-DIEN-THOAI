<?php
	include("../config.php");
	$diachi=$_POST["diachi"];
	$vt=$_POST["vitri"];
	if(isset($_POST["them"]))
	{
			$tenanh=$_FILES["anh"]["name"];
			if($tenanh!=""){
			$time=date("Ymdhis");
			$tenanh=$time . $tenanh;
			$dich="../../../uploads/quangcao/".$tenanh;
			copy($_FILES["anh"]["tmp_name"],$dich);
			$dich=substr($dich,17);
							}
		$sql="insert into quangcao(diachi,loai,hinhanh) values('$diachi','$vt','$dich')";
		mysql_query($sql);		
				echo  '<script type="text/javascript">alert("Bạn thêm quảng cáo thành công");window.location ="../../index.php?quanly=quangcao&ac=lietke"; </script>';
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
			$dich="../../../uploads/quangcao/".$tenanh;
			copy($_FILES["anh"]["tmp_name"],$dich);
			$dich=substr($dich,17);
			$sql="update quangcao set diachi='$diachi',loai='$vt',hinhanh='$dich' where id='$id'";
			$sql1="select hinhanh from quangcao where id='$id'";
			$xoa=mysql_query($sql1);
			$xoanh=mysql_fetch_array($xoa);
			if($xoanh["hinhanh"]!="")
				{
					unlink("../../../uploads/".$xoanh["hinhanh"]);
				}
			}
		else{
		$sql="update quangcao set diachi='$diachi',loai='$vt' where id='$id'";
			}
	mysql_query($sql);
	header("location:../../index.php?quanly=quangcao&ac=lietke");
	}
	else
		{
			$sql="delete from quangcao where id='$id' ";
			mysql_query($sql);
			header("location:../../index.php?quanly=quangcao&ac=lietke");
		}
	}
?>