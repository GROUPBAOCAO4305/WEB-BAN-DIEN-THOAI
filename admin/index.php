<?php 
	session_start();
	if($_SESSION["tendangnhap"]=="")
	{
		
		header("location:login.php");
		exit();	
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang quản trị nội dung</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/bang.css"/>
<link rel="stylesheet" type="text/css" href="../jqueryui/jquery-ui.css"/>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/sb-admin-2.css"/>
<script type="text/javascript" src="../jqueryui/jquery-1.10.js"></script>
<script type="text/javascript" src="../jqueryui/jquery-ui.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/check.js"></script>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.min.css"/>
<script type="text/javascript" src="../ValidateForm/jquery.validate.min.js"></script>
<script type="text/javascript" src="../ValidateForm/messages_vi.js"></script>
</head>
<body>
<?php 
	include("modules/config.php");
	include("modules/banner.php");
	include("modules/main.php");
	include("modules/footer.php");
?>
</body>
</html>