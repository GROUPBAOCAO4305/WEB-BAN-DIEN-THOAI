<script type="text/javascript">
$(document).ready(function()
{
    $("#nut").click(function(){
        var dataString = jQuery("form").serialize();
        $.ajax({
            type: "POST",
            url: "modules/phukien/timkiemphukien.php",
            data: dataString,
            success: function(html){
                $("#load").html(html);
            }
        });
        return false;
    });
});
</script>
<?php 
	error_reporting(0);
	$num=10;
	if(isset($_GET["trang"]))
		{
			$trang=$_GET["trang"];
		}
		else{
				$trang=1;
			}
		$batdau=($trang-1)*$num;
	$sql="select * from chitietphukien where Maphukien='$_GET[id]' limit $batdau,$num  ";
	$phukien=mysql_query($sql);	
	$sql1="select * from loaiphukien where Maphukien='$_GET[id]'";
	$loai=mysql_query($sql1);
	$dong1=mysql_fetch_array($loai);  
?>
<div class="panel panel-info" >
  <div class="panel-heading" > 
  	<table>
    	<tr>
        	<td style="color:#00F;"><img src="image/muiten3.png"> <?php  echo $dong1["Loaiphukien"]?> cho BLackberry</td>
            <td style="font-size:12px;font-style:italic;"><?php echo "(Có tất cả ".mysql_num_rows($phukien)." )"?></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td align="right">
            	<form class="navbar-form navbar-right" role="search"  id="timkiem" method="post">
                <div class="form-group">
                  <input type="text" name="key" class="form-control" placeholder="Nhập phụ kiện muốn tìm vào đây">
                </div>
                <button type="submit" id="nut" class="btn btn-default">Tìm kiếm</button>
              </form>
            </td>
  		</tr>
  	</table> 
    		
    </div>
    <div class="panel-body" id="load">
    	<?php 
		while($dong=mysql_fetch_array($phukien)) {
			if($dong["Maphukien"]==$_GET["id"]){
		?>
        <div class="boxhienthi">
      <a href="index.php?xem=chitietphukien&id=<?php echo $dong["Maphukien"]?>"><div style="width:130px;height:80px;"><center><img src="uploads/<?php echo $dong["Hinhanh"]?>" width="100px" height="100px"></center><br></div>
      <div style="width:130px;height:40px;margin-top:30px;"><h6 style="font-size:14px;text-align:center;"><?php  echo $dong["Tenphukien"]?></h6><br></div></a>
       <div style="width:130px;height:10px;margin-top:10px; color:#F00;"><p align="center"><?php  echo number_format($dong["Gia"])?> VNĐ</p><br></div>
       <a href="modules/giohang/giohang.php?item=<?php echo $dong["Maphukien"]?>" " style="text-decoration:none;"><div class="datmua"><img src="image/dathang.png" width="70px" height="20px"></div></a>         		
    </div>
    <?php 
		}
		}
	 ?>
    </div>	
</div>
<?php 
	$sql="select * from chitietphukien where Maphukien='$_GET[id]'";
	$dong=mysql_query($sql);
	$dem=mysql_num_rows($dong);
	$sotrang=ceil($dem/$num);
		?>
	<?php 
		$i=1;
	    while ($i<=$sotrang){
		?>
     <ul class="pagination" style="margin-top:2px;margin-left:5px; ;">
 		 <li><a href="index.php?xem=phukien&id=<?php echo $_GET["id"]?>&trang=<?php echo $i;?>"><?php echo $i; ?></a></li>
	</ul>    
    <?php 
		$i++;
	     } 
	?>

