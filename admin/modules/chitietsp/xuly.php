<?php
	include("../config.php");
	$tensp=$_POST["tensanpham"];
	$loaisp=$_POST["loaisp"];	
	$loaihang=$_POST["loaihang"];
	$ngay=$_POST["ngaysanxuat"];
	$ngaysx=date("Y-m-d",strtotime($ngay)); 
	$rom=$_POST["ram"];
	$bonhotrong=$_POST["bonhotrong"];
	$camera=$_POST["camera"];
	$thenho=$_POST["thenho"];
	$wifi=$_POST["wifi"];
	$bluetooth=$_POST["bluetooth"];
	$gps=$_POST["gps"];
	$java=$_POST["java"];
	$mang=$_POST["mang"];
	$pin=$_POST["pin"];
	$radio=$_POST["radio"];
	$video=$_POST["video"];
	$audio=$_POST["audio"];
	$manhinh=$_POST["manhinh"];
	$ghiam=$_POST["ghiam"];
	$kichthuoc=$_POST["kichthuoc"];
	$trongluong=$_POST["trongluong"];
	$cpu=$_POST["cpu"];
	$hedieuhanh=$_POST["hedieuhanh"];
	$baohanh=$_POST["baohanh"];
	$tinhtrang=$_POST["tinhtrang"];
	$trangthai=$_POST["trangthai"];	
	$gia=$_POST["gia"];
	$nd=$_POST["nd"];
	$id=$_GET["id"];
	echo $id;
if(isset($_POST["them"]))
	{
		$ten=$_FILES["hinhanh"]["name"];
		if($ten!=""){
			$time=date("Ymdhis");
			$ten=$time . $ten;
			$dich="../../../uploads/sanpham/".$ten;
			copy($_FILES["hinhanh"]["tmp_name"],$dich);
			$dich=substr($dich,17);
					}
		$sql="insert into chitietsanpham(	Madong,Tensp,Manhinh,RomRam,Bonhotrong,CPU,Hedieuhanh,Gia,Kichthuoc,Trongluong,Camera,Thenho,Wifi,Java,Pin,Hinhanh,Baohanh,GPS,Ghiam,Mang,NgaySX,Trangthai,Loaihang,Bluetooth,Audio,Video,Radio,Tinhtrang,Mota) values('$loaisp','$tensp','$manhinh','$rom','$bonhotrong','$cpu','$hedieuhanh','$gia','$kichthuoc','$trongluong','$camera','$thenho','$wifi','$java','$pin','$dich','$baohanh','$gps','$ghiam','$mang','$ngaysx','$trangthai','$loaihang','$bluetooth','$audio','$video','$radio','$tinhtrang','$nd')";				
		mysql_query($sql);		
		header("location:../../index.php?quanly=chitietsp&ac=lietke");
	}
else if(isset($_POST["sua"]))
	{
		$tenanh=$_FILES["hinhanh"]["name"];
		if($tenanh!=""){
			$time=date("Ymdhis");
			$tenanh=$time . $tenanh;
			$dich="../../../uploads/sanpham/".$tenanh;
			copy($_FILES["hinhanh"]["tmp_name"],$dich);
			$dich=substr($dich,17);
			$sql="update chitietsanpham set Madong='$loaisp',Tensp='$tensp',Manhinh='$manhinh',RomRam='$rom',Bonhotrong='$bonhotrong',CPU='$cpu',Hedieuhanh='$hedieuhanh',Gia='$gia',Kichthuoc='$kichthuoc',Trongluong='$trongluong',Camera='$camera',Thenho='$thenho',Wifi='$wifi',Java='$java',Hinhanh='$dich',Pin='$pin',Baohanh='$baohanh',GPS='$gps',Ghiam='$ghiam',Mang='$mang',NgaySX='$ngaysx',Trangthai='$trangthai',Loaihang='$loaihang',Bluetooth='$bluetooth',Audio='$audio',Video='$video',Radio='$radio',Tinhtrang='$tinhtrang',Mota='$nd' where Masanpham='$id'";
			$sql1="select Hinhanh from chitietsanpham where Masanpham='$id'";
			$xoa=mysql_query($sql1);
			$xoanh=mysql_fetch_array($xoa);
			if($xoanh["Hinhanh"]!="")
				{
					unlink("../../../uploads/".$xoanh["Hinhanh"]);
				}
			}else{
		$sql="update chitietsanpham set Madong='$loaisp',Tensp='$tensp',Manhinh='$manhinh',RomRam='$rom',Bonhotrong='$bonhotrong',CPU='$cpu',Hedieuhanh='$hedieuhanh',Gia='$gia',Kichthuoc='$kichthuoc',Trongluong='$trongluong',Camera='$camera',Thenho='$thenho',Wifi='$wifi',Java='$java',Pin='$pin',Baohanh='$baohanh',GPS='$gps',Ghiam='$ghiam',Mang='$mang',NgaySX='$ngaysx',Trangthai='$trangthai',Loaihang='$loaihang',Bluetooth='$bluetooth',Audio='$audio',Video='$video',Radio='$radio',Tinhtrang='$tinhtrang',Mota='$nd' where Masanpham='$id'";
			}
	mysql_query($sql);
	header("location:../../index.php?quanly=chitietsp&ac=lietke");
	}	
else
	{
		$sql="delete from chitietsanpham where Masanpham='$id' ";
		mysql_query($sql);
		header("location:../../index.php?quanly=chitietsp&ac=lietke");
	}
?>