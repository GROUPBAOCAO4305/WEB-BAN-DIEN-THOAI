<?php 
	include("../../admin/modules/config.php");
	$key=$_POST["key"];
	$sql="select * from chitietphukien where Tenphukien like'%{$_POST['key']}%'";
	$phukien=mysql_query($sql);
?>
          <div class="panel-body">
          		<?php 
				while($dong=mysql_fetch_array($phukien)) {
				?>
                    <div class="boxhienthi" >
                  <a href="index.php?xem=chitietphukien&id=<?php echo $dong["Maphukien"]?>"><div style="width:130px;height:80px;"><center><img src="uploads/<?php echo $dong["Hinhanh"]?>" width="100px" height="100px"></center><br></div>
                  <div style="width:130px;height:40px;margin-top:30px;"><h6 style="font-size:14px;text-align:center;"><?php  echo $dong["Tenphukien"]?></h6><br></div></a>
                   <div style="width:130px;height:10px;margin-top:10px;"><p align="center"><?php  echo $dong["Gia"]?></p><br></div>
                </div>
                <?php 
                    }
                 ?>
          </div>

