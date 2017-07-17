<?php 
session_start();
	if(isset($_SESSION['loi'])){
		echo "<script>alert('{$_SESSION['loi']}')</script>";
		unset($_SESSION['loi']);
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang chủ-Blacberry Việt Nam</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<link rel="stylesheet" type="text/css" href="admin/css/bang.css"/><link rel="stylesheet" type="text/css" href="css/footer.css"/>
<script type="text/javascript" src="jqueryui/jquery-1.10.js"></script>
<link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jqueryui/jquery-ui.js"></script>
<script type="text/javascript" src="ValidateForm/jquery.validate.min.js"></script>
<script type="text/javascript" src="ValidateForm/messages_vi.js"></script>
<body>
    <div class="wrapper">
    	<?php 
			include("modules/menugio.php");
			include("admin/modules/config.php");
			include("modules/banner.php");
			include("modules/menu.php");
			include("modules/main.php");
			include("modules/footer.php");			
		?>
</body>
</html>