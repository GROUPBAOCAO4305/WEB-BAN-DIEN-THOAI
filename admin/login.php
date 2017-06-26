<?php 
	include("modules/config.php");
	session_start();
	if(isset($_POST["dangnhap"]))
	{
		$tendangnhap=mysql_real_escape_string($_POST["user"]);
		$matkhau=mysql_real_escape_string(md5($_POST["pass"]));	
		$sql="select * from quantri where Tendangnhap='$tendangnhap' and Matkhau='$matkhau'";
		$dn=mysql_query($sql);
		$dong=mysql_fetch_array($dn);
		if(mysql_num_rows($dn)>0)
		{		
			$_SESSION["tendangnhap"]=$dong["Tendangnhap"];
			$_SESSION["quyen"]=$dong["Quyen"];
			header("location:index.php");
		}
		else if(isset($_POST["thoat"]))
		{
			session_destroy();
			header("Location:../index.php");
		}
		else
		{
			$_SESSION['loi']="Bạn đăng nhập sai rồi";
				echo  '<script type="text/javascript">alert("Bạn đăng nhập sai rồi"); </script>';
		}
	}
?>
<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="css/login.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/bang.css"/>
    </head>
    <body>
        <div class="lg-container">
		<h1>Admin Blackberry </h1>
		<form action="login.php" id="lg-form" name="form" method="post" onSubmit="return batloi();">
			
			<div>
				<label for="username">Tên đăng nhập:</label>
				<input type="text" name="user" id="dn" placeholder="Tên đăng nhập"/>
			</div>
			
			<div>
				<label for="password">Password:</label>
				<input type="password" name="pass" id="pa" placeholder="Mật khẩu" />
			</div>
			
			<div>				
				<button type="submit" id="login" name="dangnhap">Đăng nhập</button>
                <button type="button" onClick="window.location='../index.php'" id="login">Trang chủ</button>
			</div>
			
		</form>
		<div id="message"></div>
	</div>
	</body>
</html>
<script>
	function batloi()
	{
	  if ( document.form.dn.value=="")
	   {
		alert( "Vui lòng nhập tên đăng nhập");
		document.form.dn.focus( );
		return false;
	   }

		If ( document.form.pa.value=="")
		 {
			alert( "Vui lòng nhập password");
			document.form.pa.focus( );
			return false;
		 }
	   return true;
	}

</script>