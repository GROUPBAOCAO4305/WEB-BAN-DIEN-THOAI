<div class="col-md-10">
	<?php 
		if(isset($_GET['quanly']))
		{
			$tam=$_GET['quanly'];
		}
		else
		{
			$tam="";
			include("modules/trangchinh.php");
		}
		if($tam=="Tintuc")
			{
			include("modules/Tintuc/main.php");
			}
		else if ($tam=="Dongsp")
			{
			include("modules/Dongsp/main.php");
			}
		else if($tam=="Loaiphukien")
			{
			include("modules/Loaiphukien/main.php");
			}
		else if($tam=="chitietpk")
			{
			include("modules/chitietpk/main.php");
			}
		else if($tam=="chitietsp")
			{
			include("modules/chitietsp/main.php");	
			}
		else if($tam=="hoadon")
			{
			include("modules/hoadon/main.php");	
			}
		else if($tam=="chitietdonhang")
			{
			include("modules/chitietdonhang/main.php");	
			}
		else if($tam=="quantrivien")
			{
			include("modules/quantrivien/main.php");	
			}
		else if($tam=="thanhvien")
			{
			include("modules/thanhvien/main.php");	
			}
		else if($tam=="binhluan")
			{
			include("modules/binhluan/main.php");	
			}
		else if($tam=="nhanxet")
			{
			include("modules/nhanxet/main.php");	
			}
		else if($tam=="quangcao")
			{
			include("modules/quangcao/main.php");	
			}
		else if($tam=="thongke")
			{
			include("modules/thongke/main.php");	
			}
	?>
</div>