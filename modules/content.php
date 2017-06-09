     <div class="col-lg-8 content" style="background-color:#F2F2F2; float:left;" >
     	<?php 
		if(isset($_GET["xem"]))
		{
			$tam=$_GET["xem"];
			if($tam=="Tintuc"){
				include("modules/Tintuc/tintuc.php");
			}
			else if($tam=="phukien"){
				include("modules/phukien/phukien.php");
			
			}
			else if($tam=="sanpham"){
				include("modules/sanpham/sanpham.php");
			}
			else if($tam=="giohang"){
				include("modules/giohang/cart.php");
			}else if($tam=="chitietsanpham"){
				include("modules/sanpham/chitietsanpham.php");
			}else if($tam=="chitietphukien"){
				include("modules/phukien/chitietphukien.php");
			}else if($tam=="xuly"){
				include("modules/giohang/giohang.php");
			}else if($tam=="dangnhap"){
				include("modules/taikhoan/login.php");
			}else if($tam=="dangky"){
				include("modules/taikhoan/dangky.php");
			}else if($tam=="baohanh"){
				include("modules/baohanh.php");
			}else if($tam=="muahang"){
				include("modules/muahang.php");
			}else if($tam=="lienhe"){
				include("modules/lienhe/lienhe.php");
			}else if($tam=="timkiem"){ 
				include("modules/timkiem/timkiemsanpham.php");
			}else if($tam=="doimatkhau"){ 
				include("modules/taikhoan/doimatkhau.php");
			}else if($tam=="thongtintaikhoan"){ 
				include("modules/taikhoan/thongtintaikhoan.php");
			}else if($tam=="chitiettintuc"){ 
				include("modules/tintuc/chitiet.php");
			}else if($tam=="timkiemphukien"){ 
				include("modules/phukien/timkiemphukien.php");
			}
			
			
		}else
		{
			include("modules/banner1.php");
				include("modules/trangchinh.php");
		}
		?>	
    </div>
