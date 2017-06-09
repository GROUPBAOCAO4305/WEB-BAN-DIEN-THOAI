<?php 
	$sql="select * from chitietsanpham order by Masanpham desc limit 5";
	$ht=mysql_query($sql);
	$sql1="SELECT Tensp, Hinhanh, chitietsanpham.Gia, SUM( soluong ) AS GH
FROM chitietdonhang, chitietsanpham, donhang
WHERE chitietdonhang.idsanpham = chitietsanpham.Masanpham
AND donhang.id = chitietdonhang.iddonhang
GROUP BY iddonhang
HAVING SUM( soluong ) >2";
	$dat=mysql_query($sql1);
?>
	<div class="col-lg-2" >
     	<div class="panel panel-info">
          <div class="panel-heading" align="center">SẢN PHẤM BÁN CHẠY</div>
          <div class="panel-body">
                    <marquee onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" direction="up"  scrollamount=3>
                    <?php while($dong=mysql_fetch_array($dat)){?>
              	<a href="index.php?xem=chitietsanpham&id=<?php echo $dong["idsanpham" ]?>"><table>
                	<tr>
                    	<td align="center"><img src="uploads/<?php echo $dong["Hinhanh"]?>" width="150px"></td>
                    </tr>
                    <tr align="center">
                    	<td style="color:#F00;"><h4><?php echo $dong["Tensp"]?></h4></td>
                    </tr>
                     <tr align="center">
                    	<td style="color:#00F;"><?php echo number_format($dong["Gia"])?>&nbsp;VNĐ</td>
                    </tr>
                </table></a>
                <?php }?>
                    </marquee>
               
          </div>
        </div>	
		<div class="panel panel-info" style="margin-top:-11px;">
          <div class="panel-heading" align="center">SẢN PHẨM MỚI</div>
          <div class="panel-body" >
               <marquee onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" direction="up"  scrollamount=3>
               <?php while($dong=mysql_fetch_array($ht)){?>
              	<a href="index.php?xem=chitietsanpham&id=<?php echo $dong["Masanpham"] ?>"><table align="center">
                	<tr>
                    	<td align="center"><img src="uploads/<?php echo $dong["Hinhanh"]?>" width="150px"></td>
                    </tr>
                    <tr align="center">
                    	<td style="color:#F00;"><h4><?php echo $dong["Tensp"]?></h4></td>
                    </tr>
                     <tr align="center">
                    	<td style="color:#00F;"><?php echo number_format($dong["Gia"])?>&nbsp;VNĐ</td>
                    </tr>
                </table></a>
                <?php }?>
               </marquee>
          </div>
        </div>	
         <div class="panel panel-info" style="margin-top:-11px;">
          <div class="panel-heading" align="center">CHĂM SÓC KHÁCH HÀNG</div>
          <div class="panel-body">
          		<a href="index.php?xem=lienhe">
                	<h5>BLACKBERRY Chính hãng</h5>
                    <h6></h6>
                    <img src="image/khdoanhnghiep1-229x238.png" width="60px;">
                </a>
          </div>
        </div>
        <?php 
			$sql="select * from quangcao where loai='right'";
			$query=mysql_query($sql);
			//$dong=mysql_fetch_array($query);
		?>
         <div class="panel panel-info" style="margin-top:-11px;">
         <?php while ($dong=mysql_fetch_array($query)){?>
          <div class="panel-body">
          		<a href="<?php echo $dong["diachi"]?>">
                	<img src="uploads/<?php echo $dong["hinhanh"]?>" width="100%" height="500px;">
                </a>
          </div>
          <?php }?>
        </div>
	</div>

