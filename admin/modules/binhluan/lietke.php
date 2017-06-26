<?php
	$num=8;
	if(isset($_GET["trang"]))
		{
			$trang=$_GET["trang"];
		}
		else{
				$trang=1;
			}
		$batdau=($trang-1)*$num;
	$sql="SELECT Mabinhluan, Tendangnhap, Tensp, Noidung
FROM thanhvien, chitietsanpham, binhluan
WHERE thanhvien.id = binhluan.Mathanhvien
AND binhluan.Masanpham = chitietsanpham.Masanpham limit $batdau,$num";
	$query=mysql_query($sql);
?>
<div class="panel panel-default">
  <div class="panel-body">
   <h5>DANH SÁCH BÌNH LUẬN</h5>
  </div>
</div>
     <table class="table  table-bordered table-hover" width="100%">
      <tr class="active">
        <th width="30" scope="col"><div align="center">STT</div></th>
        <th width="48" scope="col">Tên thành viên</th>
        <th width="43" scope="col">Sản phẩm</th>
        <th width="58" scope="col">Nội dung</th>
        <td >Quản lý</td>
      </tr>
<?php 
	$i=1;
	while($dong=mysql_fetch_array($query))
	{
?>
	<tr>
        <th scope="row"><div align="center"><?php echo $i?></div></th>
        <td><?php echo $dong["Tendangnhap"]?></td>
        <td><?php echo $dong["Tensp"]?></td>
        <td><?php echo $dong["Noidung"]?></td>
        <td width="30">
        <a onclick="return xoa();" href="modules/binhluan/xuly.php?xoa=binhluan&id=<?php echo $dong["Mabinhluan"]?>">
        <span class="glyphicon glyphicon-remove"></span>Xóa
        </a>
        </td>
      </tr>
<?php 
	$i++;
	}
?>
    </table>
  <?php 
	$sql="select * from binhluan ";
	$dong=mysql_query($sql);
	$dem=mysql_num_rows($dong);
	$sotrang=ceil($dem/$num);
		?>
	<?php 
		$i=1;
	    while ($i<=$sotrang){
		?>
     <ul class="pagination" style="margin-top:2px;margin-left:5px;">
 		 <li><a href="index.php?quanly=binhluan&ac=lietke&trang=<?php echo $i;?>"><?php echo $i; ?></a></li>
	</ul>    
    <?php 
		$i++;
	     } 
	?>
