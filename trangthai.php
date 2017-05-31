<div class="trangthai">
	<div class="panel panel-default">
      <div class="panel-body">
      <?php
        if(isset($_GET["xem"])) {
            $tam=$_GET["xem"];
           if($tam=="phukien"){
            
        ?>	
        <?php 
            $sql="select * from loaiphukien where 				Maphukien='$_GET[id]' ";
        $phukien=mysql_query($sql);
        $dong=mysql_fetch_array($phukien);
            
        ?>
        <img src="image/muiten3.png"><?php echo $dong["Loaiphukien"]?></a>
         <?php 
            }else if ($tam=="sanpham"){
         ?>
         <?php 
            $sql2="select * from tbldongsanpham where Madong='$_GET[id]'";
            $loaisp=mysql_query($sql2);
            $dong=mysql_fetch_array($loaisp); 
         ?>
             <img src="image/muiten3.png"><?php echo $dong["Tendong"]?>
         <?php }else if ($tam=="giohang"){	
         ?>
             <img src="image/muiten3.png"> GIỎ HÀNG
             
             <?php }?>
             <?php }?>
      </div>
	</div>
	
</div>