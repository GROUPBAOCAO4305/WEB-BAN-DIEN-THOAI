<?php 
	include("../../admin/modules/config.php");
	$sql="select max(id) from donhang";
	$query=mysql_query($sql);
	$dong=mysql_fetch_array($query);
	$id= $dong[0];
	$sql2="select fullname,Tensp,chitietdonhang.gia,soluong from chitietdonhang,donhang,thanhvien,chitietsanpham where thanhvien.id=donhang.idthanhvien and donhang.id=chitietdonhang.iddonhang and chitietdonhang.idsanpham=chitietsanpham.Masanpham and iddonhang=".$id;
	$a=mysql_query($sql2);
?>
<div class="panel panel-info">
      <div class="panel-heading"><img src="image/muiten3.png"> CHÍNH SÁCH BẢO HÀNH</div>
          <div class="panel-body">
          		 <table class="table table-bordered table-hover " border="1">
   		<tr>
        	<td>Họ tên</td>
            <td>Tên sản phẩm</td>
            <td>Số lượng</td>
            <td>Giá</td>
            <td>Thành tiền</td>
        </tr>
        <?php 
		while ($dong=mysql_fetch_array($a)){?>
        <tr>
        	<td><?php echo $dong["fullname"]?></td>
            <td><?php  echo $dong["Tensp"] ?></td>
            <td><?php echo $dong["soluong"]?></td>
            <td><?php echo $dong["gia"]?></td>
            <td> <?php 
				
				
			?></td>
        </tr>
        <?php } ?>
        <tr>
        	<td colspan="3">Tổng cộng</td>
            
            <td><?php echo number_format($dong["Gia"])?></td>
        </tr>
</table>	
          </div>
</div>