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
	$sql="select * from thanhvien limit $batdau,$num";
	$query=mysql_query($sql);
?>
<div class="panel panel-default">
  <div class="panel-body">
   <h5>DANH SÁCH THÀNH VIÊN WEB</h5>
  </div>
</div>
     <table class="table  table-bordered table-hover" width="100%">
      <tr class="active">
        <th width="30" scope="col"><div align="center">STT</div></th>
        <th width="48" scope="col">Tên đăng nhập</th>
        <th width="43" scope="col">Họ tên</th>
        <th width="58" scope="col">Email</th>
        <th width="52" scope="col">Địa chỉ</th>
        <th width="70" scope="col">Ngày sinh</th>
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
        <td><?php echo $dong["fullname"]?></td>
        <td><?php echo $dong["Email"]?></td>
        <td><?php echo $dong["Diachi"]?></td>
        <td><?php 
			$sqldate = strtotime($dong["Ngaysinh"]);
			$date = date('d/m/Y', $sqldate);
			echo $date; 
			?>
        </td>
        <td width="30">
        <a onclick="return xoa();" href="modules/thanhvien/xuly.php?xoa=thanhvien&id=<?php echo $dong["id"]?>">
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
 		 <li><a href="index.php?quanly=quantrivien&ac=lietke&trang=<?php echo $i;?>"><?php echo $i; ?></a></li>
	</ul>    
    <?php 
		$i++;
	     } 
	?>
