<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<?php 
		include("admin/modules/config.php");
		?>
    <nav class="navbar navbar-inverse" role="navigation" style="margin-bottom:2px;">
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	  <ul class="nav navbar-nav">
          <?php if(isset($_SESSION['user'])){?>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thông tin tài khoản <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="index.php?xem=thongtintaikhoan">Đổi thông tin chung</a></li>
                    <li><a href="index.php?xem=doimatkhau">Đổi mật khẩu</a></li>
                  </ul>
                </li><?php } ?>
              </ul>	
         <ul class="nav navbar-nav" style="padding-top:5px; float:right;">
          <?php if (isset($_SESSION['user'])){?>
          <li style="padding:7px;">
			<h6 style="color:#F00;"><?php echo "Xin chào ".$_SESSION['user'];?></h6> 
          </li>
          <li><a href="modules/taikhoan/logout.php">Logout</a>	</li>
          <?php }else{?>
          <li><a href="index.php?xem=dangnhap">Đăng nhập</a></li>
           <li><a href="index.php?xem=dangky">Đăng kí</a></li>
           <?php }?>
          <li class="dropdown" id="menuLogin"style="float:left;">
            <a class="dropdown-toggle" href="index.php?xem=giohang" data-toggle="dropdown" id="navLogin">Giỏ hàng của bạn <strong class="caret"></strong></a>
            <div class="dropdown-menu" style="padding: 15px; height:auto;">			
            <table>
            	  <?php
				  		if(isset($_SESSION['giohang']))
						{
						$tongtien=0;
						for($i = 0; $i < count($_SESSION['giohang']);$i++)
						{
						if(isset($_SESSION['giohang'][$i]["id"])){
						 $truyvan=mysql_query("select * from chitietsanpham where Masanpham=".$_SESSION['giohang'][$i]['id']);
						$dong=mysql_fetch_array($truyvan);
						$tongtien=$tongtien+($_SESSION['giohang'][$i]["soluong"]*$dong["Gia"]);
						}
						}
						}
					?>
					<?php if(isset($_SESSION['giohang']))
					{
                        for($i=0; $i < count($_SESSION['giohang']);$i++){
						if(isset($_SESSION['giohang'][$i]["id"])){
                            $truyvan=mysql_query("select * from chitietsanpham where Masanpham=".$_SESSION['giohang'][$i]['id']);
                            $dong=mysql_fetch_array($truyvan);
                    ?>
            	<tr style="border-bottom:1px dashed #FF0000;"> 
                	<td><a href="index.php?xem=chitietsanpham&id=<?php echo $dong["Masanpham"]?>" style="text-decoration:none;"><?php echo $dong["Tensp"]?></a></td>
                    <td><?php echo $_SESSION['giohang'][$i]["soluong"]?>x<?php echo number_format($dong["Gia"])?></td>
                </tr>
                	<?php }}?>
                    <tr>
                    	<td>Tổng cộng</td>
                    	<td align="right"><?php echo number_format($tongtien);?>&nbsp;VNĐ</td>
                    </tr>
                    <?php }?>
                    <tr>
                    	<td style="margin-top:10px;"> </td>
                        <td></td>
                    </tr>
            </table>
            <div style="margin-top:10px;">
            <span class="button"><a href="index.php?xem=giohang">Xem giỏ hàng</a></span>&nbsp;&nbsp;&nbsp;	
            <span  ><a href="modules/giohang/datmua.php" class="icon-stop disabled" disabled="disabled">Thanh toán</a></span>
            </div>
            </div>
          </li>
          <li class="divider-vertical" style="float:left;"></li>
        </ul>
       </div>
    </nav>
</body>
</html>