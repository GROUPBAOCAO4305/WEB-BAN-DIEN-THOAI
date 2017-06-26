<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:5px;">
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thông tin tài khoản <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="index.php?quanly=quantrivien&ac=Sua">Đổi thông tin chung</a></li>
                    <li><a href="index.php?quanly=quantrivien&ac=doimatkhau">Đổi mật khẩu</a></li>
                    <li><a href="login.php?ac=dangxuat">Đăng xuất</a></li>
                  </ul>
                </li>
              </ul>	
         <ul class="nav navbar-nav" style="padding-top:5px; float:right;">
          <li style="padding:7px;">
            <marquee onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" direction="left"  scrollamount=3>
            <?php 
				$sql="select fullname from quantri where Tendangnhap='{$_SESSION['tendangnhap']}'";
				$query=mysql_query($sql);
				$dong=mysql_fetch_array($query);
			?>
		  <?php 
	if($_SESSION["quyen"]==1)
	{
		echo "Xin chào,".$dong['fullname'].",Bạn đang đăng nhập quyền admin";
	}else if($_SESSION["quyen"]==2){
		echo "Xin chào,".$dong['fullname'].",Bạn đang đăng nhập quyền Mod quản lý sản phẩm";
	}else if($_SESSION["quyen"]==3){
		echo "Xin chào,".$dong['fullname'].",Bạn đang đăng nhập quyền Mod quản lý phụ kiện";
	}else if($_SESSION["quyen"]==4){
		echo "Xin chào,".$dong['fullname'].",Bạn đang đăng nhập quyền Mod quản lý tin tức";
	}else if($_SESSION["quyen"]==5){
		echo "Xin chào,".$dong['fullname'].",Bạn đang đăng nhập quyền Mod quản lý hóa đơn";
	}else if($_SESSION["quyen"]==6){
		echo "Xin chào,".$dong['fullname'].", Bạn đang đăng nhập quyền Mod quản lý quảng cáo";
	}
	?>	</li>
 </marquee>

        </ul>
       </div>
    </nav>
