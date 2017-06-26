<?php 
	$sql="select * from quantri where Tendangnhap='{$_SESSION['tendangnhap']}'";
	$query=mysql_query($sql);
	$dong=mysql_fetch_array($query);
?>
<script type="text/javascript">
  $(function() {
		$("#date").datepicker({ dateFormat: "dd-mm-yy" }).val()
		});
</script>
<div class="panel panel-default">
      <div class="panel-heading"><img src="image/BlackBerry.png">THÔNG TIN TÀI KHOẢN</div>
  <div class="panel-body">
      <div class="row">
            <div class="col-md-6">
                <table class="table  table-bordered table-hover" width="100%">
                <tr class="info">
                    <td>Tên đăng nhập</td>
                    <td>Họ tên</td>
                    <td>Email</td>
                    <td>Địa chỉ</td>
                    <td>Số điện thoại</td>
                    <td>Ngày sinh</td>
                 </tr>
                 <tr class="active">
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
                 </tr>
                </table>	
            </div>
            <div class="col-md-6">
            		<form id="dangky" action="modules/quantrivien/xulythongtin.php?id=<?php echo $dong["id"]?>" method="post"> 
            <table>
                	<tr>
                    	<td colspan="2"> SỬA THÔNG TIN TÀI KHOẢN</td>
                    </tr>
                    <tr>
                    	<td width="22%" height="50"><label>*</label><span class="label label-primary">Tên đăng nhập</span></td>
                      <td width="78%"><input name="tendangnhap" type="text" size="60"  id="tendangnhap" value="<?php echo $dong["Tendangnhap"]?>" ></td>
                    </tr>
                    <tr>
                    	<td colspan="2">THÔNG TIN CHUNG</td>
                    </tr>
                    <tr>
                    	<td height="50"><label>*</label><span class="label label-primary">Họ tên</span></td>
                        <td><input name="hoten" type="text" size="60" value="<?php echo $dong["fullname"]?>"></td>
                    </tr>
                     <tr>
                    	<td><label>*</label><span class="label label-primary">Email</span></td>
                        <td><input name="email" type="text" size="60" value="<?php echo $dong["Email"]?>"></td>
                    </tr>
                     <tr>
                    	<td height="50">&nbsp;&nbsp;&nbsp;<span class="label label-primary">Địa chỉ</span></td>
                        <td><input name="diachi" type="text" size="60" value="<?php echo $dong["diachi"]?>"></td>
                    </tr>
                     <tr>
                       <td height="50">&nbsp;&nbsp;&nbsp;<span class="label label-primary">SĐT</span></td>
                       <td><input type="text" name="sdt" value="<?php echo $dong["sdt"]?>"></td>
                     </tr>
                     <tr>
                    	<td height="50"><label>*</label><span class="label label-primary">Ngày sinh</span></td>
                        <td><input name="ngaysinh" type="text" id="date" value="<?php  $sqldate = strtotime($dong["ngaysinh"]);
                $date = date('d/m/Y', $sqldate);
                echo $date; ?>"></td>
                    </tr>
                </table>
                 <div style="margin-top:10px;">
            <button class="btn btn-primary" type="submit" name="sua" style="margin:5px;" >Sửa</button><button class="btn btn-primary" type="reset" >Nhập lại</button><button class="btn btn-primary" type="button" onClick="window.location='index.php'"  style="margin:5px;">Quay về</button></div>
            </form>
            </div>
      </div>
  </div>
</div>