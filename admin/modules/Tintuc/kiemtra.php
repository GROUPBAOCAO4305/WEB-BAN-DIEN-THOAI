<?php 
	include("../config.php");
	$tieude=$_POST["tieude"];
	$sql ="SELECT * FROM tbltintuc where TieuDe='$tieude'";
	$query = mysql_query($sql);
	$dong=mysql_num_rows($query);
	if($dong!=NULL)
	{
		echo 'false'; 
	}
	else{
		echo 'true';
		}

?>