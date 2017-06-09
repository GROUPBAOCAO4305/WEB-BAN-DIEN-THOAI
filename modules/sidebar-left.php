<?php 
	$sql="select *from tbldongsanpham";
	$danhmuc=mysql_query($sql);
	$sql1="select * from tbltintuc order by MaTinTuc desc limit 4";
	$tintuc=mysql_query($sql1);
	$sql2="select * from loaiphukien ";
	$loaiphukien=mysql_query($sql2); 
	
	
?>
    <div class="col-lg-2 sidebar-left" style="background-color:#F2F2F2;">	   	
            	<div class="panel panel-info">
                      <!-- Default panel contents -->
                      <div class="panel-heading">THỜI GIAN LÀM VIỆC</div>
                      <div class="panel-body">
                       	<img src="image/thoigianlamviec.jpg" width="160px">
                      </div>
                </div>                        
            	<div class="panel panel-info" style=" margin-top:-12px;" >
                      <div class="panel-heading" align="center">DANH MỤC ĐIỆN THOẠI</div>
                      <ul class="list-group">
                      	<?php 
							while($dong=mysql_fetch_array($danhmuc))
							{
						?>
                        <li class="list-group-item"><a href="index.php?xem=sanpham&id=<?php echo $dong["Madong"]?>" style="text-decoration:none;"><img src="icon/BlackBerry.png"> <?php  echo $dong["Tendong"]?></a></li>
                  		<?php  }?>	
                      </ul>
                </div>
                <div class="panel panel-info" style=" margin-top:-12px;">
                      <div class="panel-heading" align="center">DANH MỤC PHỤ KIỆN</div>
                      <ul class="list-group">
                      	<?php 
							while($dong=mysql_fetch_array($loaiphukien))
							{
						?>
                        <li class="list-group-item"><a href="index.php?xem=phukien&id=<?php echo $dong["Maphukien"]?>" style="text-decoration:none;"><img src="icon/BlackBerry.png"> <?php  echo $dong["Loaiphukien"]?></a></li>
                        <?php
						   } 
						  ?>
                      </ul>
				</div>
                <div class="panel panel-info" style=" margin-top:-12px;">
                  <div class="panel-heading" align="center">TIN TỨC BLACKBERRY</div>
                  <ul class="list-group">
                  	<?php 
						while($dong=mysql_fetch_array($tintuc))
						{
					?>
                    <li class="list-group-item"><img src="uploads/<?php echo $dong["HinhAnh"]?>" width ="20px" height="20px">  <a href="index.php?xem=chitiettintuc&id=<?php echo $dong["MaTinTuc"]?>"><?php  echo $dong["TieuDe"]?></a></li>
                      <?php
					   } 
					  ?>
                  </ul>
                </div>
                <div class="panel panel-info" style="margin-top:-11px;">
		  <?php 
                $sql="select * from quangcao where loai='left'";
                $query=mysql_query($sql);
                //$dong=mysql_fetch_array($query);
            ?>
         <?php while ($dong=mysql_fetch_array($query)){?>
          <div class="panel-body">
          		<a href="<?php echo $dong["diachi"]?>">
                	<img src="uploads/<?php echo $dong["hinhanh"]?>" width="100%" height="400px;">
                </a>
          </div>
          <?php }?>
        </div>            
    </div>
