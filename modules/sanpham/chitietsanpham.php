<?php 
	error_reporting(0);
	if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		$sql="select * from chitietsanpham where Masanpham='$id'";
		$chitiet=mysql_query($sql);
		$dong=mysql_fetch_array($chitiet);
	}
?>

<div class="panel panel-info">
  <div class="panel-heading"><img src="image/muiten3.png"> <?php  echo $dong["Tensp"]?></div>
  <div class="panel-body">
    <div class="row">
    	<div class="col-md-4">
        	<div id="border" ><img src="uploads/<?php echo $dong["Hinhanh"]?>" height="200px"/>
   							<p style="font-size:18px;color:#F00;text-align:center"><?php echo number_format($dong["Gia"])?>VNĐ</p>
                             <a href="modules/giohang/giohang.php?item=<?php echo $dong["Masanpham"]?>"><div class="datmua"><img src="image/dathang.png" width="150px" height="20px" ></div></a> 
        	</div>
         </div>
        <div class="col-md-8">
        	<div id="border" >
        	<table id="chitiet">
            	<tr>
                	<td>Tình trạng:</td>
                    <td><?php echo $dong["Tinhtrang"] ?></td>
                </tr>
                <tr>
                	<td>Loại hàng:</td>
                    <td><?php echo $dong["Loaihang"] ?></td>
                </tr>
                <tr>
                	<td>Bảo hành:</td>
                    <td><?php echo $dong["Baohanh"] ?></td>
                </tr>
                <tr>
                	<td>Ngày sản xuất:</td>
                    <td><?php $sqldate = strtotime($dong["NgaySX"]);
								$date = date('d/m/Y', $sqldate);
								echo $date; 
						?>
                    </td>
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
        <li class="active"><a href="#home" data-toggle="tab">Bình luận</a>
        </li>
        <li><a href="#profile" data-toggle="tab">Thông số kỹ thuật</a>
        </li>
        <li><a href="#messages" data-toggle="tab">Nhận xét</a>
        </li>
        </li>
        <li><a href="#mota" data-toggle="tab">Mô tả</a>
        </li>
    </ul>
<!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="home">
            <h4>Bình luận</h4>  
            <hr>
            <div id="comments">
            	<table>
            	<?php 
					
						$sql="select Tendangnhap,Noidung from  binhluan,thanhvien where binhluan.Mathanhvien=thanhvien.id and Masanpham='$id' limit 10";
						$bl=mysql_query($sql);
						while ($dong1=mysql_fetch_array($bl)){
					
				?>
                <tr><td style="color:#00C;"><?php echo $dong1["Tendangnhap"]?>:</td></tr>
                <tr><td><?php echo $dong1["Noidung"]?></td></tr>
                
                <?php }?>
                </table>
            </div>
            <hr>
            <form name="form1" action ="modules/sanpham/insertbinhluan.php?id=<?php echo $id;?>" method ="post">
            <table>
                <tr>
                    <td>
                        Nội dung:
                    </td>
                    <td>
                        <input name="content" onblur="if (this.value!='') nhay()" type="text" size="30" id="nd">
                    </td>
                    <td>
                        &nbsp;<input  type="submit" onclick="nhay();" value="Gửi" name="gui">
                    </td>
                </tr>
            </table>
        </form>
    </div>
        <div class="tab-pane fade" id="profile">
            <h4 style="text-align:center;">Thông số kỹ thuật</h4>
            <hr>
           <table id="thongso" class="table table-striped" border="1">
              <tr>
                <td width="151"  rowspan="4" >Bộ nhớ</td> 
                <td width="413" >Rom-Ram:<?php echo $dong["RomRam"]?>
                </td>
              </tr>
              <tr>
                <td>Bộ nhớ trong:<?php echo $dong["Bonhotrong"]?></td>
              </tr>
              <tr>
                <td>Camera:<?php echo $dong["Camera"]?></td>
              </tr>
              <tr>
                <td>Thẻ nhớ:<?php echo $dong["Thenho"]?></td>
              </tr>
              <tr>
                <td rowspan="9">Thông số kỹ thuật</td>
                <td>Mạng:<?php echo $dong["Mang"]?></td>
              </tr>
              <tr>
                <td>Pin:<?php echo $dong["Pin"]?></td>
              </tr>
              <tr>
                <td>Radio:<?php echo $dong["Radio"]?></td>
              </tr>
              <tr>
                <td>Video:<?php echo $dong["Video"]?></td>
              </tr>
              <tr>
                <td>Audio:<?php echo $dong["Audio"]?></td>
              </tr>
              <tr>
                <td>Màn hình:<?php echo $dong["Manhinh"]?></td>
              </tr>
              <tr>
                <td>Ghi âm:<?php echo $dong["Ghiam"]?></td>
              </tr>
              <tr>
                <td>Kích thước:<?php echo $dong["Kichthuoc"]?></td>
              </tr>
              <tr>
                <td>Trọng lượng:<?php echo $dong["Trongluong"]?></td>
              </tr>
              <tr>
                <td rowspan="6">Bộ xử lý và kết nối mạng</td>
                <td>CPU:<?php echo $dong["CPU"]?></td>
              </tr>
              <tr>
                <td>Hệ điều hành:<?php echo $dong["Hedieuhanh"]?></td>
              </tr>
              <tr>
                <td>Wifi:<?php echo $dong["Wifi"]?></td>
              </tr>
              <tr>
                <td>Bluetooth:<?php echo $dong["Bluetooth"]?></td>
              </tr>
              <tr>
                <td>GPS:<?php echo $dong["GPS"]?></td>
              </tr>
              <tr>
                <td>Java:<?php echo $dong["Java"]?></td>
              </tr>
            </table>

        </div>
        <div class="tab-pane fade" id="messages">
            <h4 style="color:#F00; text-transform:uppercase; text-align:center;">Nhận xét về sản phẩm <?php  echo $dong["Tensp"]?></h4>
            <h5>Nếu quý khách đã có tài khoản, xin vui lòng đăng nhập tại <a href="index.php?xem=dangnhap">đây</a> để có thể gửi nhận xét. Nếu chưa vui lòng đăng ký tại <a href="index.php?xem=dangky">đây</a></h5>
           <form action="modules/sanpham/xulynhanxet.php?id=<?php  echo $dong["Masanpham"]?>" method="post" name="form2">
            <table >
                <tr>
                    <td height="55"><span class="label label-primary">Tiêu đề</span></td>
                  <td ><input name="tieude" id="td" type="text" size="50" onblur="if (this.value!='') nhay2()"></td>
                </tr>
                <tr>
                    <td><span class="label label-primary">Nội dung</span></td>
                    <td><textarea name="noidung" cols="70" rows="5" id="nd" onblur="if (this.value!='') nhay2()"></textarea></td>
               </tr>
           </table>
              <div style="margin-top:10px;">
                        <button class="btn btn-primary" type="submit" name="gui" style="margin:5px;" >Gửi liên hệ</button><button class="btn btn-primary" type="reset" onclick="nhay2();" >Nhập lại</button></div>
            
           </form>
        </div>
         <div class="tab-pane fade" id="mota">
            <h4 style="color:#F00; text-align:center;"><?php echo $dong["Tensp"]?></h4>
            <center><img src="uploads/<?php echo $dong["Hinhanh"]?>" /></center>
            <p style="text-indent:30px; text-align:justify;"><?php echo $dong["Mota"]?></p>
        </div>
    </div>
</div>
                     
  </div>
</div>
<script type="text/javascript">
	function nhay()
	{
		var form1=document.form1;
		var a=form1.nd.value;
		var b=a.substr(0,1);
		if ((b=="'" )||(b=='"')) alert("Không được nhập dấu nháy đầu tiên");
	
	}
	function nhay2()
	{
		var form2=document.form2;
		var a=form2.td.value;
		var b=a.substr(0,1);
		var c=form2.nd.value;
		var d=c.substr(0,1);
		if ((b=="'" )||(b=='"')||(d=="'")||(d=='"')) alert("Không được nhập dấu nháy đầu tiên");
	
	}
</script>