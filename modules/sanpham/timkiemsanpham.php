	<?php 
		error_reporting(0);
		include("../../admin/modules/config.php");
		$sql="select * from chitietsanpham where Tensp like'%{$_POST['key']}%' ";
		$sp=mysql_query($sql);	
	?>
          <div class="panel-body">
			<?php 
            while($dong=mysql_fetch_array($sp)){
            ?>
            <div class="boxhienthi">
                  <a href="index.php?xem=chitietsanpham&id=<?php echo $dong["Masanpham"]?>"><div style="width:130px;height:80px;"><center><img src="uploads/<?php echo $dong["Hinhanh"]?>" width="100px" height="100px"></center><br></div>
                  <div style="width:130px;height:40px;margin-top:30px;"><h6 style="font-size:14px;text-align:center;"><?php  echo $dong["Tensp"]?></h6><br></div></a>
                   <div style="width:130px;height:10px;margin-top:10px;"><p align="center"><?php  echo $dong["Gia"]?></p><br></div>
                   <a href="modules/giohang/giohang.php?item=<?php echo $dong["Masanpham"]?>" ><div class="datmua"><img src="image/dathang.png" width="70px" height="20px"></div></a>         		
   			 </div>
    <?php 
		
		}
	 ?>
          </div>

