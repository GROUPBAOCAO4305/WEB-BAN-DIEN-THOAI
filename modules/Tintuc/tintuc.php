<?php 
	$num=3;
	if(isset($_GET["trang"]))
		{
			$trang=$_GET["trang"];
		}
		else{
				$trang=1;
			}
		$batdau=($trang-1)*$num;
	$sql="select * from tbltintuc order by MaTinTuc desc limit $batdau,$num";
	$Tintuc=mysql_query($sql);
?>
<div class="panel panel-info" >
  <div class="panel-heading"> <img src="image/muiten3.png"> TIN TỨC</div>
  <ul class="list-group">
  		<?php 
            while ($dong=mysql_fetch_array($Tintuc)){
        ?>
    <li class="list-group-item" >
    	 <table >
    	<tr align="justify" >
    	<td ><img src="uploads/<?php echo $dong["HinhAnh"]?>" width="100px" height="100px"></td>  	  		 
        <td  style="padding-left:10px;"><a style="text-decoration:none;" href="index.php?xem=chitiettintuc&id=<?php echo $dong["MaTinTuc"]?>"><?php  echo $dong["TieuDe"]?>
        </a>
        <p class="nd"><?php echo $dong["TomTat"]?></p></td>		
        </tr>
    </table>
    </li>
   <?php 
		}
	?>
  </ul>
    <h4>Các bài viết khác</h4>
   		<?php 
	$sql1="select * from tbltintuc limit 3";
	$dong1=mysql_query($sql1);
		?>
   <ul class="baivietkhac">
   		<?php while ($row=mysql_fetch_array($dong1)){?>
   		<a href="index.php?xem=chitiettintuc&id=<?php echo $row["MaTinTuc"]?>"><li><?php echo $row["TieuDe"]?></li></a>
        <?php } ?>
   </ul>
</div>
    <?php 
	$sql="select * from tbltintuc ";
	$dong=mysql_query($sql);
	$dem=mysql_num_rows($dong);
	$sotrang=ceil($dem/$num);
		?>
	<?php 
		$i=1;
	    while ($i<=$sotrang){
		?>
     <ul class="pagination" style="margin-top:-15px;margin-left:5px; ;">
 		 <li><a href="index.php?xem=Tintuc&trang=<?php echo $i;?>"><?php echo $i; ?></a></li>
	</ul>    
    <?php 
		$i++;
	     } 
	?>

