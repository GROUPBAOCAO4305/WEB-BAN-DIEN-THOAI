<?php 
	session_start();
	include("../../admin/modules/config.php");
if (isset($_SESSION['giohang']))
{
	if(isset($_SESSION['user']))
	{	$a=$_SESSION['user'];
		$user=mysql_query("select id from thanhvien where Tendangnhap='".$a."'");
		$kt=mysql_fetch_array($user);
		$idthanhvien=$kt["id"];
	$kq=mysql_query("insert into donhang (idthanhvien) values('".$idthanhvien."')");

	if($kq)
	{
		for($i = 0; $i < count($_SESSION['giohang']);$i++)
		{
			if(isset($_SESSION['giohang'][$i]['id'])){
			$max=mysql_query("select max(id) from donhang");
			$dong=mysql_fetch_array($max);
			$iddonhang=$dong[0];
			$idsanpham=$_SESSION['giohang'][$i]['id'];
			$soluong=$_SESSION['giohang'][$i]['soluong'];
			$sanpham=mysql_query("select * from chitietsanpham where Masanpham=".$idsanpham);
			$ht=mysql_fetch_array($sanpham);
			$gia=$ht["Gia"];
			mysql_query("insert into chitietdonhang (iddonhang,idsanpham,soluong,gia) values('".$iddonhang."','".$idsanpham."','".$soluong."','".$gia."')");
			}
		}
	}
	unset($_SESSION['giohang']);
	echo '<script type="text/javascript">alert("Đơn hàng của bạn đã gửi thành công,chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất!");window.location ="../../index.php"; </script>'; 
	//header("location:../../index.php");
	}else{
		$_SESSION['loi']="Bạn cần đăng nhập để tiếp tục thực hiện chức năng này";
		header("location:../../index.php?xem=dangnhap");
		}
}
else
{
	echo '<script type="text/javascript">alert("Bạn không có sản phẩm trong giỏ hàng,Vui lòng chọn sản phẩm!");window.location ="../../index.php"; </script>'; 	
}
?>