<div class="panel panel-info">
  <div class="panel-heading"><img src="image/muiten3.png">&nbsp;GIỎ HÀNG</div>
  <div class="panel-body">
   <table class="table table-bordered table-hover " border="1">
   		<tr>
        	<td></td>
            <td>Tên sản phẩm</td>
            <td>Số lượng</td>
            <td>Giá</td>
            <td></td>
            <td></td>
        </tr>
        <?php
		if(isset($_SESSION['giohang'])){
			if(isset($_SESSION['giohang']["id"])){
				$tongtien=0;
				for($i = 0; $i < count($_SESSION['giohang']);$i++)
				{
				 $truyvan=mysql_query("select * from chitietsanpham where Masanpham=".$_SESSION['giohang'][$i]['id']);
				$dong=mysql_fetch_array($truyvan);
				$tongtien=$tongtien+($_SESSION['giohang'][$i]["soluong"]*$dong["Gia"]);
				}
			}
		}else
			{
				echo "Giỏ hàng bạn chưa có sản phẩm nào";
			}
		?>
   	<?php 
	if(isset($_SESSION['giohang']))
	{
			for($i=0; $i < count($_SESSION['giohang']);$i++){
				if(isset($_SESSION['giohang'][$i]["id"])){
				$truyvan=mysql_query("select * from chitietsanpham where Masanpham=".$_SESSION['giohang'][$i]['id']);
				$dong=mysql_fetch_array($truyvan)
	?>
   		<tr >
        	<td align="center"><a href="modules/giohang/giohang.php?conggiohang=<?php echo $dong["Masanpham"]?>"><span class="glyphicon glyphicon-plus"></span></a></td>
            <td><?php echo $dong["Tensp"]?></td>
            <td id="load"><?php 
			echo $_SESSION['giohang'][$i]["soluong"]?>
            </td>
            <td><?php echo number_format($dong["Gia"])?>&nbsp;VNĐ</td>
            <td align="center" ><a href="modules/giohang/giohang.php?xoagiohang=<?php echo $dong["Masanpham"]?>"><span class="glyphicon glyphicon-minus"></span></a></td>
            <td><a href="modules/giohang/giohang.php?xoasanpham=<?php echo $_SESSION['giohang'][$i]['id'] ?>"">Xóa</a></td>
        </tr>
               <?php }} ?>
       <tr>
       		<td colspan="3">Tổng tiền:</td>
            <td colspan="3"><?php echo number_format($tongtien);?>&nbsp;VNĐ</td>
       </tr>
       <?php  }?>
   </table>
    <div style="margin-top:10px; float:right;">
                            <a href="modules/giohang/datmua.php"><span class="label label-primary">Thanh toán</span></a><a href="index.php"><span class="label label-primary" style="margin-left:10px;">Mua tiếp</span></a></div>
  </div>
</div>
