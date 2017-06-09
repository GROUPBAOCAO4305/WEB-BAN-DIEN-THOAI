<?php 
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$sql="select * from tbltintuc where MaTinTuc=".$id;
		$query=mysql_query($sql);
		$dong=mysql_fetch_array($query);
	}
?>
<div class="panel panel-info">
      <div class="panel-heading"><img src="image/muiten3.png"> TIN TỨC</div>
          <div class="panel-body">
          		<h3 style="color:#F00; text-transform:uppercase; text-align:center;"><?php echo $dong["TieuDe"]?></h3>	
                <p style="text-align:justify; text-indent:30px;"><?php echo $dong["NoiDung"]?></p>
                <h6 style="color:#06F; float:right;">Tác giả:<?php echo $dong["TacGia"]?></h6>
                <hr>
                <h5>Các bài viết khác</h5>
						<?php 
                    $sql1="select * from tbltintuc where MaTinTuc < ".$id;
                    $dong1=mysql_query($sql1);
                        ?>
                   <ul class="baivietkhac">
                        <?php while ($row=mysql_fetch_array($dong1)){?>
                        <a href="index.php?xem=chitiettintuc&id=<?php echo $row["MaTinTuc"]?>"><li><?php echo $row["TieuDe"]?></li></a>
                        <?php } ?>
                   </ul>
          </div>
</div>
