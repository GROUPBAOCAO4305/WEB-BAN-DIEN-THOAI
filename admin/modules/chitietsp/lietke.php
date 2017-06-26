<?php
	$num=3;
	if(isset($_GET["trang"]))
		{
			$trang=$_GET["trang"];
		}
		else{
				$trang=1;
			}
		$batdau=($trang-1)*$num;
	$sql="select Masanpham,chitietsanpham.Madong,Tendong,Tensp,Manhinh,RomRam,Bonhotrong,CPU,Hedieuhanh,Gia,Kichthuoc,Trongluong,Camera,Thenho,Wifi,Java,Pin,Hinhanh,Baohanh,GPS,Ghiam,Mang,NgaySX,Trangthai,Loaihang,Bluetooth,Audio,Video,Radio,Tinhtrang from chitietsanpham,tbldongsanpham where chitietsanpham.Madong=tbldongsanpham.Madong limit $batdau,$num";
	$chitietsp=mysql_query($sql);
?>
<div class="capnhat">
<div class="panel panel-default">
  <div class="panel-body">
   <h5>DANH SÁCH SẢN PHẨM</h5>
  </div>
</div>
     <table class="table  table-bordered table-hover">
      <tr class="active">
        <th width="29" scope="col"><div align="center">STT</div></td>
        <td width="36" scope="col">Tên sản phẩm</td>
        <th width="36" scope="col">Loại sản phẩm</td>
        <td width="34" scope="col">Loại hàng</td>
        <td align="center">Chi tiết</td>
        <td width="40" scope="col">Ngày SX</td>
        <td width="32" scope="col">Bảo hành</td>
        <td width="35" scope="col">Tình trạng</td>
        <td width="44" scope="col">Trạng thái</td>
        <td width="69" scope="col">Giá(VNĐ)</td>
        <td width="75" scope="col">Hình ảnh</td>
        
        <td colspan="2" scope="col">Quản lý</td>
      </tr>
<?php 
	$i=1;
	while($dong=mysql_fetch_array($chitietsp))
	{	
?>
      <tr>
        <td scope="row"><div align="center"><?php echo $i?></div></td>
          <td><?php echo $dong["Tensp"]?></td>
        <td><?php echo $dong["Tendong"]?></td>
        <td><?php echo $dong["Loaihang"]?></td>
        <td>
        	<table width="100%">
            	<tr>
                	<td>Kích thước</td>
                    <td><?php echo $dong["Kichthuoc"]?></td>
                    <td>Trọng lượng</td>
                    <td><?php echo $dong["Trongluong"]?></td>
                    <td>Camera</td>
                    <td><?php echo $dong["Camera"]?></td>
                    <td>Radio</td>
                    <td><?php echo $dong["Radio"]?></td>
                </tr>
                <tr>
                	<td>Rom-Ram</td>
                    <td><?php echo $dong["RomRam"]?></td>
                    <td>Bộ nhớ trong</td>
                    <td><?php echo $dong["Bonhotrong"]?></td>
                    <td>GPS</td>
                    <td><?php echo $dong["GPS"]?></td>
                    <td>Video</td>
                    <td><?php echo $dong["Video"]?></td>
                </tr>
                <tr>
                	<td>Thẻ nhớ</td>
                    <td><?php echo $dong["Thenho"]?></td>
                    <td>Wifi</td>
                    <td><?php echo $dong["Wifi"]?></td>
                    <td>Mạng</td>
                    <td><?php echo $dong["Mang"]?></td>
                    <td>Audio</td>
                    <td><?php echo $dong["Audio"]?></td>
                </tr>
                 <tr>
                	<td>Màn hình</td>
                    <td><?php echo $dong["Manhinh"]?></td>
                    <td>Ghi âm</td>
                    <td><?php echo $dong["Ghiam"]?></td>
                    <td>CPU</td>
                    <td><?php echo $dong["CPU"]?></td>
                    <td>Hệ điều hành</td>
                    <td><?php echo $dong["Hedieuhanh"]?></td>
                </tr>
                <tr>
                	<td>Java</td>
                    <td><?php echo $dong["Java"]?></td>
                    <td>Pin</td>
                    <td><?php echo $dong["Pin"]?></td>
                    <td>Bluetooth</td>
                    <td><?php echo $dong["Bluetooth"]?></td>
                </tr>
            </table>
        </td>
        <td><?php
			$sqldate = strtotime($dong["NgaySX"]);
			$date = date('d/m/Y', $sqldate);
			echo $date;
		?>      
        </td>
        <td><?php echo $dong["Baohanh"]?></td>
        <td><?php echo $dong["Tinhtrang"]?></td>
        <td><?php echo $dong["Trangthai"]?></td>
         <td><?php echo number_format($dong["Gia"])?></td>
        <td><img src="../uploads/<?php echo $dong["Hinhanh"]?>" width="75" height="50"></td>      
        <td width="29">
            <a href="index.php?quanly=chitietsp&ac=Sua&id=<?php echo $dong["Masanpham"]?>">
                    <span class="glyphicon glyphicon-wrench"></span>Sửa
            </a>
        </td>
        <td width="30">
        <a onclick="return xoa();" href="modules/chitietsp/xuly.php?xoa=chitietsp&id=<?php echo $dong["Masanpham"]?>">
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
     <input type="button" onclick="window.location='index.php?quanly=chitietsp&ac=Them'" value="  Thêm mới  " name="themmoi" class="button">
	</div>
</div>
<?php 
	$sql="select * from chitietsanpham ";
	$dong=mysql_query($sql);
	$dem=mysql_num_rows($dong);
	$sotrang=ceil($dem/$num);
		?>
	<?php 
		$i=1;
	    while ($i<=$sotrang){
		?>
     <ul class="pagination" style="margin-top:2px;margin-left:5px; ;">
 		 <li><a href="index.php?quanly=chitietsp&ac=lietke&trang=<?php echo $i;?>"><?php echo $i; ?></a></li>
	</ul>    
    <?php 
		$i++;
	     } 
	?>
