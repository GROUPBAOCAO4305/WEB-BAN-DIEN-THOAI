<?php 
	error_reporting(0);
	if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		$sql="select * from chitietphukien where Maphukien='$id'";
		$chitiet=mysql_query($sql);
		$dong=mysql_fetch_array($chitiet);
	}
?>

<div class="panel panel-info">
  <div class="panel-heading"><img src="image/muiten3.png"> <?php  echo $dong["Tenphukien"]?></div>
  <div class="panel-body">
    <div class="row">
    	<div class="col-md-4">
        	<div id="border" ><img src="uploads/<?php echo $dong["Hinhanh"]?>" height="200px"/>
   							<p style="font-size:18px;color:#F00;text-align:center"><?php echo number_format($dong["Gia"])?>VNĐ</p>
                             <a href="index.php?xem=giohang&item=<?php echo $id; ?>"><div class="datmua"><img src="image/dathang.png" width="150px" height="20px" ></div></a> 
        	</div>
         </div>
        <div class="col-md-8">
        	<div id="border" >
        	<table id="chitiet">
            	<tr>
                	<td width="129">Mô tả</td>
                    <td width="324"><?php echo $dong["Mota"] ?></td>
                </tr>
                <tr>
                	<td>Tình trạng:</td>
                    <td><?php echo $dong["Tinhtrang"] ?></td>
                </tr>
                <tr>
                	<td>Bảo hành:</td>
                    <td><?php echo $dong["Baohanh"] ?></td>
                </tr>
                <tr>
                	<td>Trạng thái:</td>
                    <td><?php echo $dong["Trangthai"] ?></td>
                </tr>
                <tr>
                	<td colspan="2">
                    	
                    </td>
                </tr>
            </table>
            </div>   
        </div>
    </div>                          
    <!-- Nav tabs -->
<div id="border">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Hình ảnh</a>
        </li>
        
    </ul>
<!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="home">
            <center><img src="uploads/<?php echo $dong["Hinhanh"]?>" height="200px"/></center> 
    </div>
    </div>
</div>
                     
  </div>
</div>