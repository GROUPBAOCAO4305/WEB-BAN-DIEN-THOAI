<div id="chinh">
	<?php 
	
	$sql="select * from chitietsanpham where Loaihang='Hàng cao cấp' ";
	$sp=mysql_query($sql);	
	?>
	<div class="panel panel-info" style="margin-top:-5px;">
      <div class="panel-heading"><h5>HÀNG CAO CẤP</h5></div>
      <div class="panel-body">
      	<?php 
		while($dong=mysql_fetch_array($sp)){
	?>
	<div class="boxhienthi">
       <a href="index.php?xem=chitietsanpham&id=<?php echo $dong["Masanpham"]?>"><div style="width:130px;height:80px;"><center><img src="uploads/<?php echo $dong["Hinhanh"]?>" width="100px" height="100px"></center><br></div>
      <div style="width:130px;height:40px;margin-top:30px;"><h6 style="font-size:14px;text-align:center;"><?php  echo $dong["Tensp"]?></h6><br></div></a>
       <div style="width:130px;height:10px;margin-top:10px; color:#F00;"><p align="center"><?php echo number_format($dong["Gia"])?></p><br></div>
       <a href="modules/giohang/giohang.php?item=<?php echo $dong["Masanpham"]?>" style="text-decoration:none;"><div class="datmua"><img src="image/dathang.png" width="70px" height="20px"></div></a>         		
    </div>
    <?php 
	}
	 ?>
      </div>    
	</div>
    <?php 
	$sql="select * from chitietsanpham where Loaihang='Hàng phổ thông' ";
	$sp=mysql_query($sql);	
	?>
	<div class="panel panel-info" style="margin-top:-15px;">
      <div class="panel-heading"><h5>HÀNG PHỔ THÔNG</h5></div>
      <div class="panel-body">
      	<?php 
		while($dong=mysql_fetch_array($sp)){
	?>
	<div class="boxhienthi">
      <a href="index.php?xem=chitietsanpham&id=<?php echo $dong["Masanpham"]?>"><div style="width:130px;height:80px;"><center><img src="uploads/<?php echo $dong["Hinhanh"]?>" width="100px" height="100px"></center><br></div>
      <div style="width:130px;height:40px;margin-top:30px;"><h6 style="font-size:14px;text-align:center;"><?php  echo $dong["Tensp"]?></h6><br></div></a>
       <div style="width:130px;height:10px;margin-top:10px; color:#F00;"><p align="center"><?php echo number_format($dong["Gia"])?></p><br></div>
       <a href="modules/giohang/giohang.php?item=<?php echo $dong["Masanpham"]?>" style="text-decoration:none;"><div class="datmua"><img src="image/dathang.png" width="70px" height="20px"></div></a>         		
    </div>
    <?php 
	}
	 ?>
      </div>         
	</div>
    <div class="xoa"></div>
     <?php 
	$sql="select * from chitietsanpham where Loaihang='Hàng giá rẻ' ";
	$sp=mysql_query($sql);	
	?>
	<div class="panel panel-info" style="margin-top:-15px;">
      <div class="panel-heading"><h5>HÀNG GIÁ RẺ</h5></div>
      <div class="panel-body">
      	<?php 
		while($dong=mysql_fetch_array($sp)){
	?>
	<div class="boxhienthi">
      <a href="index.php?xem=chitietsanpham&id=<?php echo $dong["Masanpham"]?>"><div style="width:130px;height:80px;"><center><img src="uploads/<?php echo $dong["Hinhanh"]?>" width="100px" height="100px"></center><br></div>
      <div style="width:130px;height:40px;margin-top:30px;"><h6 style="font-size:14px;text-align:center;"><?php  echo $dong["Tensp"]?></h6><br></div></a>
       <div style="width:130px;height:10px;margin-top:10px; color:#F00;"><p align="center"><?php echo number_format($dong["Gia"])?></p><br></div>
       <a href="modules/giohang/giohang.php?item=<?php echo $dong["Masanpham"]?>" style="text-decoration:none;"><div class="datmua"><img src="image/dathang.png" width="70px" height="20px"></div></a>         		
    </div>
    <?php 
	}
	 ?>
      </div>         
	</div>
</div>