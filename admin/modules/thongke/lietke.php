<?php
$num=5;
if(isset($_GET["trang"]))
{
	$trang=$_GET["trang"];
}
else{
		$trang=1;
	}
$batdau=($trang-1)*$num;
date_default_timezone_set('Asia/Ho_Chi_Minh');
$now = getdate();
$currentDate =  $now["mon"];
$sql="SELECT Tensp,SUM(soluong) AS TONGSL,Hinhanh 
FROM donhang, chitietdonhang, chitietsanpham
WHERE chitietdonhang.iddonhang = donhang.id
AND chitietsanpham.Masanpham = chitietdonhang.idsanpham
AND MONTH( Ngaydat ) ='$currentDate' 
GROUP BY Tensp limit $batdau,$num ";
$tk=mysql_query($sql);
?>
<div class="panel panel-default">
  <div class="panel-heading" style="text-align:center;"><h5 style="color:#F00; font-size:18px;">THỐNG KÊ </h5></div>
  <div class="panel-body">
 	<div class="row">
        <div class="col-md-6">
           <div class="panel panel-default">
        	<div class="panel-heading" style="text-align:center;"><h5 style="color:#F00; font-size:18px;">THỐNG KÊ SẢN PHẨM BÁN ĐƯỢC </h5></div>
  				<div class="panel-body">
                <h4 style="color:#F00">Sản phẩm bán được trong tháng <?php echo $currentDate?></h4>
                	  <table class="table  table-bordered table-hover" width="100%">
                      <tr class="active">
                        <th width="31" scope="col"><div align="center">STT</div></th>
                        <th width="57" scope="col">Tên sản phẩm</th>
                        <th width="57" scope="col">Số lượng</th>
                        <td>Hình ảnh</td>
                      </tr>
						<?php 
                            $i=1;
                            while($dong=mysql_fetch_array($tk))
                            {
                        ?>
                        <tr>
                            <th scope="row"><div align="center"><?php echo $i?></div></th>
                            <td><?php echo $dong["Tensp"]?></td>
                            <td><?php echo $dong["TONGSL"]?></td>
                            <td><img src="../uploads/<?php echo $dong["Hinhanh"]?>" width="86" height="50"/>
                            </td>
                        </tr>
						<?php 
                            $i++;
                            }
                        ?>
                    </table>
                       <?php 
	$sql="SELECT Tensp,SUM(soluong) AS TONGSL,Hinhanh 
FROM donhang, chitietdonhang, chitietsanpham
WHERE chitietdonhang.iddonhang = donhang.id
AND chitietsanpham.Masanpham = chitietdonhang.idsanpham
AND MONTH( Ngaydat ) ='$currentDate' 
GROUP BY Tensp ";
	$dong=mysql_query($sql);
	$dem=mysql_num_rows($dong);
	$sotrang=ceil($dem/$num);
		?>
	<?php 
		$i=1;
	    while ($i<=$sotrang){
		?>
     <ul class="pagination" style="margin-top:2px;margin-left:5px; ;">
 		 <li><a href="index.php?quanly=thongke&ac=lietke&trang=<?php echo $i;?>"><?php echo $i; ?></a></li>
	</ul>    
    <?php 
		$i++;
	     } 
	?>
              	</div>
             </div>
           </div>    
            <div class="col-md-6" id="load">
            		  <div class="panel panel-default">
        	<div class="panel-heading" style="text-align:center;"><h5 style="color:#F00; font-size:18px;">THỐNG KÊ DOANH THU TRONG THÁNG </h5></div>
            <?php 
			$sql="SELECT SUM( Tongtien ) AS Thanhtoan
FROM ww_thanhtien, donhang
WHERE ww_thanhtien.iddonhang = donhang.id
AND MONTH( ngaydat ) =10";
			$query=mysql_query($sql);
			$dong=mysql_fetch_array($query);
			?>
  				<div class="panel-body">
                	 <h4 style="color:#F00">Doanh thu trong tháng<?php echo $currentDate?> là:<?php echo number_format($dong["Thanhtoan"])?>  VNĐ</h4>
              	</div>
             </div>
            </div>
        </div>
  </div>
</div>
 
 