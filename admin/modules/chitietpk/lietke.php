<?php
$num=7;
	if(isset($_GET["trang"]))
		{
			$trang=$_GET["trang"];
		}
		else{
				$trang=1;
			}
		$batdau=($trang-1)*$num;
	$sql="select Mahang,Tenphukien,Loaiphukien,Baohanh,Tinhtrang,Trangthai,Hinhanh,Gia from chitietphukien,loaiphukien where chitietphukien.Maphukien=loaiphukien.Maphukien limit $batdau,$num";
	$chitietpk=mysql_query($sql);
?>
	<div class="panel panel-default">
      	<div class="panel-body">
       <h5>DANH SÁCH PHỤ KIỆN</h5>
    	</div>
    </div>
     <table class="table  table-bordered table-hover">
      <tr class="active">
        <th width="29" scope="col"><div align="center">STT</div></th>
        <th width="41" scope="col">Tên phụ kiện</th>
        <th width="37" scope="col">Loại phụ kiện</th>
        <th width="32" scope="col">Bảo hành</th>
        <th width="35" scope="col">Tình trạng</th>
        <th width="44" scope="col">Trạng thái</th>
        <th width="69" scope="col">Giá(VNĐ)</th>
        <th width="75" scope="col">Hình ảnh</th>
        
        <th colspan="2" scope="col">Quản lý</th>
      </tr>
<?php 
	$i=1;
	while($dong=mysql_fetch_array($chitietpk))
	{	
?>
	<tr>
        <th scope="row"><div align="center"><?php echo $i?></div></th>
        
        <td><?php echo $dong["Tenphukien"]?></td>
        <td><?php echo $dong["Loaiphukien"]?></td>        
        <td><?php echo $dong["Baohanh"]?></td>
        <td><?php echo $dong["Tinhtrang"]?></td>
        <td><?php echo $dong["Trangthai"]?></td>
         <td><?php echo $dong["Gia"]?></td>
        <td><img src="../uploads/<?php echo $dong["Hinhanh"]?>" width="75" height="50"></td>      
        <td width="29">
            <a href="index.php?quanly=chitietpk&ac=Sua&id=<?php echo $dong["Mahang"]?>">
                     <span class="glyphicon glyphicon-wrench"></span>Sửa
            </a>
        </td>
        <td width="30">
        <a onclick="return xoa();" href="modules/chitietpk/xuly.php?xoa=chitietpk&id=<?php echo $dong["Mahang"]?>">
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
     <input type="button" onclick="window.location='index.php?quanly=chitietpk&ac=Them'" value="  Thêm mới  " name="themmoi" class="button">
	</div>
  <?php 
	$sql="select * from chitietphukien  ";
	$dong=mysql_query($sql);
	$dem=mysql_num_rows($dong);
	$sotrang=ceil($dem/$num);
		?>
	<?php 
		$i=1;
	    while ($i<=$sotrang){
		?>
     <ul class="pagination" style="margin-top:2px;margin-left:5px; ;">
 		 <li><a href="index.php?quanly=chitietpk&ac=lietke&trang=<?php echo $i;?>"><?php echo $i; ?></a></li>
	</ul>    
    <?php 
		$i++;
	     } 
	?>