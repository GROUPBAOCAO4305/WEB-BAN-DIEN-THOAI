<?php
	$num=10;
	if(isset($_GET["trang"]))
		{
			$trang=$_GET["trang"];
		}
		else{
				$trang=1;
			}
		$batdau=($trang-1)*$num;
	$sql="select donhang.id,fullname,ngaydat from donhang,thanhvien where donhang.idthanhvien=thanhvien.id limit $batdau,$num";
	$hoadon=mysql_query($sql);
	mysql_query("SET NAMES utf8_general_ci");
?>
<div class="panel panel-default">
  <div class="panel-body">
   <h5>DANH SÁCH HÓA ĐƠN</h5>
  </div>
</div>
     <table class="table  table-bordered table-hover">
      <tr class="active">
        <th width="68" scope="col"><div align="center">STT</div></th>
        <th width="96" scope="col">Tên thành viên</th>
        <th width="228" scope="col">Ngày đặt</th>
        
        <th>Quản lý</th>
      </tr>
<?php 
	$i=1;
	while($dong=mysql_fetch_array($hoadon))
	{	
?>
      <tr>
        <th scope="row"><div align="center"><?php echo $i?></div></th>
        <td><?php echo $dong["fullname"]?></td>
        <td><?php echo $dong["ngaydat"]?></td>      
        <td width="30">
        <a href="modules/hoadon/xuly.php?xoa=hoadon&id=<?php echo $dong["id"]?>" onclick="return xoa();">
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
	$sql="select donhang.id,fullname,ngaydat from donhang,thanhvien where donhang.idthanhvien=thanhvien.id";
	$dong=mysql_query($sql);
	$dem=mysql_num_rows($dong);
	$sotrang=ceil($dem/$num);
		?>
	<?php 
		$i=1;
	    while ($i<=$sotrang){
		?>
     <ul class="pagination" style="margin-top:2px;margin-left:5px; ;">
 		 <li><a href="index.php?quanly=hoadon&ac=lietke&trang=<?php echo $i;?>"><?php echo $i; ?></a></li>
	</ul>    
    <?php 
		$i++;
	     } 
	?>
