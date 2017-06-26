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
	$sql="select * from quantri limit $batdau,$num";
	$query=mysql_query($sql);
?>
<div class="panel panel-default">
  <div class="panel-body">
   <h5>DANH SÁCH QUẢN TRỊ VIÊN</h5>
  </div>
</div>
     <table class="table  table-bordered table-hover" width="100%">
      <tr class="active">
        <th width="30" scope="col"><div align="center">STT</div></th>
        <th width="48" scope="col">Tên đăng nhập</th>
        <th width="43" scope="col">Họ tên</th>
        <th width="58" scope="col">Email</th>
        <th width="52" scope="col">Địa chỉ</th>
        <th width="35" scope="col">Số điện thoại</th>
        <th width="70" scope="col">Ngày sinh</th>
        <th width="44"  scope="col">Quyền</th>
        <td colspan="2">Quản lý</td>
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
        <td><?php echo $dong["diachi"]?></td>
         <td><?php echo $dong["sdt"]?></td>
        <td><?php 
			$sqldate = strtotime($dong["ngaysinh"]);
			$date = date('d/m/Y', $sqldate);
			echo $date; 
			?>
        </td>
        <td><?php echo $dong["Quyen"]?></td>
        <td width="29">
            <a href="index.php?quanly=quantrivien&ac=Suaquyen&id=<?php echo $dong["id"]?>">
             <span class="glyphicon glyphicon-wrench"></span>Sửa
            </a>
        </td>
        <td width="30">
        <a onclick="return xoa();" href="modules/quantrivien/xulyxoa.php?xoa=quantrivien&id=<?php echo $dong["id"]?>">
        <span class="glyphicon glyphicon-remove"></span>Xóa
        </a>
        </td>
      </tr>
<?php 
	$i++;
	}
?>


    </table>
    <div>
    <input type="button" onclick="window.location='index.php?quanly=quantrivien&ac=Them'" value="  Thêm mới  " name="themmoi" class="button">
	</div>
  <?php 
	$sql="select * from quantri ";
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
