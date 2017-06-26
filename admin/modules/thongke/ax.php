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
	include("../config.php");
	 date_default_timezone_set('Asia/Ho_Chi_Minh');
	  $now = getdate();
	 $currentDate =  $now["mon"];
	 echo "$currentDate";
	//$k=$_POST["thang"];
	$sql="SELECT Tensp,SUM(soluong) AS TONGSL,Hinhanh 
FROM donhang, chitietdonhang, chitietsanpham
WHERE chitietdonhang.iddonhang = donhang.id
AND chitietsanpham.Masanpham = chitietdonhang.idsanpham
AND MONTH( Ngaydat ) =MONTH() 
GROUP BY Tensp limit $batdau,$num ";
	$tk=mysql_query($sql);
?>
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
	$sql="select * from thanhvien ";
	$dong=mysql_query($sql);
	$dem=mysql_num_rows($dong);
	$sotrang=ceil($dem/$num);
		?>
	<?php 
		$i=1;
	    while ($i<=$sotrang){
		?>
     <ul class="pagination" style="margin-top:2px;margin-left:5px; ;">
 		 <li><a href="modules/thongke/ax.php?trang=<?php echo $i;?>"><?php echo $i; ?></a></li>
	</ul>    
    <?php 
		$i++;
	     } 
	?>
