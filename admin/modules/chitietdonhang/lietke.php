<div class="panel panel-default">
  <div class="panel-body">
   <h5>CHI TIẾT ĐƠN HÀNG</h5>
  </div>
</div>
<div class="row">
	<div class="col-md-6">
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
			$sql="SELECT chitietdonhang.id, fullname, Tensp, soluong, chitietdonhang.gia
		FROM donhang, thanhvien, chitietsanpham, chitietdonhang
		WHERE donhang.idthanhvien = thanhvien.id
		AND donhang.id = chitietdonhang.iddonhang
		AND chitietdonhang.idsanpham = chitietsanpham.Masanpham limit $batdau,$num";
			$ct=mysql_query($sql);
			mysql_query("SET NAMES utf8_general_ci");
		?>
    	<table class="table  table-bordered table-hover">
      <tr class="active">
        <th width="68" scope="col"><div align="center">STT</div></th>
        <th width="96" scope="col">Tên thành viên</th>
        <th width="228" scope="col">Tên sản phẩm</th>
        <th width="96" scope="col">Số lượng</th>
        <th width="228" scope="col">Giá</th>
        <th>Quản lý</th>
      </tr>
<?php 
	$i=1;
	while($dong=mysql_fetch_array($ct))
	{	
?>
      <tr>
        <th scope="row"><div align="center"><?php echo $i?></div></th>
        <td><?php echo $dong["fullname"]?></td>
        <td><?php echo $dong["Tensp"]?></td> 
         <td><?php echo $dong["soluong"]?></td>
        <td><?php echo $dong["gia"]?></td>      
        <td width="30">
        <a onclick="return xoa();" href="modules/chitietdonhang/xuly.php?xoa=chitietdonhang&id=<?php echo $dong["id"]?>">
        <span class="glyphicon glyphicon-remove"></span>Xóa
        </a>
        </td>
      </tr>
<?php 
	$i++;
	}
?>
    </table>
    </div>
    <div class="col-md-6">
    	<?php
			$sql="SELECT chitietdonhang.id, fullname, SUM( soluong ) AS Soluong, chitietdonhang.gia, SUM( chitietdonhang.gia * soluong ) AS Tong
FROM donhang, thanhvien, chitietsanpham, chitietdonhang
WHERE donhang.idthanhvien = thanhvien.id
AND donhang.id = chitietdonhang.iddonhang
AND chitietdonhang.idsanpham = chitietsanpham.Masanpham
GROUP BY donhang.id";
			$tong=mysql_query($sql);
			mysql_query("SET NAMES utf8_general_ci");
		?>
    	<table class="table  table-bordered table-hover">
      <tr class="active">
        <th width="68" scope="col"><div align="center">STT</div></th>
        <th width="96" scope="col">Tên thành viên</th>
        <th width="228" scope="col">Tổng số lượng</th>
        <th width="228" scope="col">Tổng tiền</th>
      </tr>
<?php 
	$i=1;
	while($dong=mysql_fetch_array($tong))
	{	
?>
      <tr>
        <th scope="row"><div align="center"><?php echo $i?></div></th>
        <td><?php echo $dong["fullname"]?></td>
        <td><?php echo $dong["Soluong"]?></td>
         <td><?php echo $dong["Tong"]?></td>        
      </tr>
<?php 
	$i++;
	}
?>
    </table>
    </div>
     
</div>
<?php 
		$i=1;
	    while ($i<=5){
		?>
     <ul class="pagination" style="margin-top:2px;margin-left:5px;">
 		 <li><a href="index.php?quanly=chitietdonhang&ac=lietke&trang=<?php echo $i;?>"><?php echo $i; ?></a></li>
	</ul>    
    <?php 
		$i++;
	     } 
	?>