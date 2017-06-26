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
	$sql="select * from tbldongsanpham limit $batdau,$num";
	$Dongsp=mysql_query($sql);
?>
<div class="panel panel-default">
  <div class="panel-body">
   <h5>DANH SÁCH DÒNG SẢN PHẨM</h5>
  </div>
</div>
     <table class="table  table-bordered table-hover">
      <tr class="active">
        <th width="68" scope="col"><div align="center">STT</div></th>
        <th width="96" scope="col">Mã dòng</th>
        <th width="228" scope="col">Tên dòng sản phẩm</th>
        
        <th colspan="2" scope="col">Quản lý</th>
      </tr>
<?php 
	$i=1;
	while($dong=mysql_fetch_array($Dongsp))
	{	
?>
      <tr>
        <th scope="row"><div align="center"><?php echo $i?></div></th>
        <td><?php echo $dong["Madong"]?></td>
        <td><?php echo $dong["Tendong"]?></td>      
        <td width="29">
            <a href="index.php?quanly=Dongsp&ac=Sua&id=<?php echo $dong["Madong"]?>">
            <span class="glyphicon glyphicon-wrench"></span>Sửa
            </a>
        </td>
        <td width="30">
        <a onclick="return xoa();" href="modules/Dongsp/xuly.php?xoa=Dongsp&id=<?php echo $dong["Madong"]?>">
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
     <input type="button" onclick="window.location='index.php?quanly=Dongsp&ac=Them'" value="  Thêm mới  " name="themmoi" class="button">
	</div>
  <?php 
	$sql="select * from tbldongsanpham ";
	$dong=mysql_query($sql);
	$dem=mysql_num_rows($dong);
	$sotrang=ceil($dem/$num);
		?>
	<?php 
		$i=1;
	    while ($i<=$sotrang){
		?>
     <ul class="pagination" style="margin-top:2px;margin-left:5px; ;">
 		 <li><a href="index.php?quanly=Dongsp&ac=lietke&trang=<?php echo $i;?>"><?php echo $i; ?></a></li>
	</ul>    
    <?php 
		$i++;
	     } 
	?>
