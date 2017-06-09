<?php 
	include("../../admin/modules/config.php");
	$username=$_POST['tendangnhap'];
$sql="select Tendangnhap from thanhvien where Tendangnhap='$username'";
$query =mysql_query($sql);
$kt=mysql_num_rows($query);
if($kt!=NULL){ 
    echo 'false';
}
else{
    echo 'true';
}
?>