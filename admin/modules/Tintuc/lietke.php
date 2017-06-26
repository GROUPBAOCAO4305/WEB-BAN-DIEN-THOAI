<?php
	$num=1;
	if(isset($_GET["trang"]))
		{
			$trang=$_GET["trang"];
		}
		else{
				$trang=1;
			}
		$batdau=($trang-1)*$num;
	$sql="select * from tbltintuc order by MaTinTuc desc limit $batdau,$num";
	$Tintuc=mysql_query($sql);
?>
<div class="panel panel-default">
  <div class="panel-body">
   <h5>DANH SÁCH TIN TỨC</h5>
  </div>
</div>
     <table class="table  table-bordered table-hover" width="100%">
      <tr class="active">
        <th width="31" scope="col"><div align="center">STT</div></th>
        <th width="57" scope="col">Tiêu đề</th>
        <th width="57" scope="col">Tóm tắt</th>
        <th width="72" scope="col">Nội dung</th>
        <th width="70" scope="col">Ngày đăng tin</th>
        <th width="37" scope="col">Tác giả</th>
        <th width="91" scope="col">Hình ảnh</th>
        <th colspan="2" scope="col">Quản lý</th>
      </tr>
<?php 
	$i=1;
	while($dong=mysql_fetch_array($Tintuc))
	{
?>
	<tr>
        <th scope="row"><div align="center"><?php echo $i?></div></th>
        <td><?php echo $dong["TieuDe"]?></td>
        <td><?php echo $dong["TomTat"]?></td>
        <td><?php echo $dong["NoiDung"]?></td>
        <td><?php 
			$sqldate = strtotime($dong["NgayDangTin"]);
			$date = date('d/m/Y', $sqldate);
			echo $date; 
			?>
        </td>
        <td><?php echo $dong["TacGia"]?></td>
        <td><img src="../uploads/<?php echo $dong["HinhAnh"]?>" width="86" height="50"/>
        </td>
        <td width="29">
            <a href="index.php?quanly=Tintuc&ac=Sua&id=<?php echo $dong["MaTinTuc"]?>">
             <span class="glyphicon glyphicon-wrench"></span>Sửa
            </a>
        </td>
        <td width="30">
        <a onclick="return xoa();" href="modules/Tintuc/xuly.php?xoa=Tintuc&id=<?php echo $dong["MaTinTuc"]?>">
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
    <input type="button" onclick="window.location='index.php?quanly=Tintuc&ac=Them'" value="  Thêm mới  " name="themmoi" class="button">
	</div>
  <?php 
	$sql="select * from tbltintuc ";
	$dong=mysql_query($sql);
	$dem=mysql_num_rows($dong);
	$sotrang=ceil($dem/$num);
		?>
	<?php 
		$i=1;
	    while ($i<=$sotrang){
		?>
     <ul class="pagination" style="margin-top:2px;margin-left:5px; ;">
 		 <li><a href="index.php?quanly=Tintuc&ac=lietke&trang=<?php echo $i;?>"><?php echo $i; ?></a></li>
	</ul>    
    <?php 
		$i++;
	     } 
	?>
