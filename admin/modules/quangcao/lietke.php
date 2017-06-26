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
	$sql="select * from quangcao  limit $batdau,$num";
	$qc=mysql_query($sql);
?>
<div class="panel panel-default">
  <div class="panel-body">
   <h5>DANH SÁCH HÌNH ẢNH QUẢNG CÁO</h5>
  </div>
</div>
     <table class="table  table-bordered table-hover">
      <tr class="active">
        <th width="31" scope="col"><div align="center">STT</div></th>
        <th width="57" scope="col">Địa chỉ web</th>
        <th width="57" scope="col">Vị trí quảng cáo</th>
        <th width="70" scope="col">Ngày đăng</th>
        <th width="91" scope="col">Hình ảnh</th>
        <th colspan="2" scope="col">Quản lý</th>
      </tr>
<?php 
	$i=1;
	while($dong=mysql_fetch_array($qc))
	{
?>
	<tr>
        <th scope="row"><div align="center"><?php echo $i?></div></th>
        <td><?php echo $dong["diachi"]?></td>
        <td><?php echo $dong["loai"]?></td>
        <td><?php 
			$sqldate = strtotime($dong["ngaydang"]);
			$date = date('d/m/Y', $sqldate);
			echo $date; 
			?>
        </td>
        <td><img src="../uploads/<?php echo $dong["hinhanh"]?>" width="86" height="50"/>
        </td>
        <td width="29">
            <a  href="index.php?quanly=quangcao&ac=Sua&id=<?php echo $dong["id"]?>">
             <span class="glyphicon glyphicon-wrench"></span>Sửa
            </a>
        </td>
        <td width="30">
        <a onclick="return xoa();" href="modules/quangcao/xuly.php?xoa=quangcao&id=<?php echo $dong["id"]?>">
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
    <input type="button" onclick="window.location='index.php?quanly=quangcao&ac=Them'" value="  Thêm mới  " name="themmoi" class="button">
	</div>
  <?php 
	$sql="select * from quangcao ";
	$dong=mysql_query($sql);
	$dem=mysql_num_rows($dong);
	$sotrang=ceil($dem/$num);
		?>
	<?php 
		$i=1;
	    while ($i<=$sotrang){
		?>
     <ul class="pagination" style="margin-top:2px;margin-left:5px; ;">
 		 <li><a href="index.php?quanly=quangcao&ac=lietke&trang=<?php echo $i;?>"><?php echo $i; ?></a></li>
	</ul>    
    <?php 
		$i++;
	     } 
	?>
