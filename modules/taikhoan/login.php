<?php 
@session_start();
 $conn=mysql_connect("localhost","root","") or die("can't connect your database");  
    mysql_select_db("bandienthoai",$conn);  	
	if(isset($_POST["dangnhap"]))
	{
		$username=mysql_real_escape_string($_POST["tendangnhap"]);
		$pass=mysql_real_escape_string($_POST["matkhau"]);
		$sql="select * from thanhvien where Tendangnhap='$username' and Matkhau='$pass'";
		$dangnhap=mysql_query($sql);
		$dem=mysql_num_rows($dangnhap);
		if($dem>0)
		{
			$_SESSION['user']=$username;
		}
		else
		{
			$_SESSION['loi']="Bạn đăng nhập sai rồi";
		}
	}			@header("location:../../index.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<div class="panel panel-info">
      <div class="panel-heading"><img src="image/muiten3.png"> ĐĂNG NHẬP TÀI KHOẢN</div>
      <div class="panel-body">
      		<div class="row">
              <div class="col-md-6">
              		<div class="panel panel-default">
                      <div class="panel-body">
                      		<h5 style="color:#F00;">KHÁCH HÀNG MỚI</h5>
                            <h6>Đăng ký tài khoản</h6>
                            <p align="justify">
                            	Có một tài khoản sẽ giúp bạn sẽ mua sắm nhanh hơn, cập nhật trạng thái đơn hàng và sử dụng được nhiều tiện ích khác.
                            </p>
                            <h6> Đăng ký tài khoản mới <a href="index.php?xem=dangky">tại đây</a></h6>	
                      </div>
                    </div>
              </div>
              <div class="col-md-6">
              		<div class="panel panel-default">
                      <div class="panel-body">
                      		<h5 style="color:#F00;">KHÁCH HÀNG ĐĂNG NHẬP</h5>
                            <h6>Nếu đã có tài khoản vui lòng đăng nhập</h6>
                            <form action="modules/taikhoan/login.php" method="post">
                                <table>
                                	<tr>
                                    	<td><p style="color:#333;">Tên đăng nhập</p></td>
                                    </tr>
                                    <tr>
                                        <td><input name="tendangnhap" type="text" placeholder="Tên đăng nhâp" size="30"></td>
                                    </tr>
                                    <tr>
                                    	<td><p style="color:#333;">Mật khẩu</p></td>
                                    </tr>
                                    <tr>
                                        <td><input name="matkhau" type="password" placeholder="Mật khẩu" size="30"></td>
                                    </tr>
                                </table>
                                <input type="submit" value="Đăng nhập" name="dangnhap" style="margin-top:5px;">
                            <form>
                      </div>
                    </div>
              </div>
            </div>
     </div>
</div>
</body>
</html>