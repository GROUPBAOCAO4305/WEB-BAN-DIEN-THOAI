<?php 
	$sql="select fullname,Email,Diachi,Ngaysinh from thanhvien where Tendangnhap='{$_SESSION['user']}'";
	$query=mysql_query($sql);
	$dong=mysql_fetch_array($query);
	$sqldate = strtotime($dong["Ngaysinh"]);
	$date = date('d/m/Y', $sqldate);
?>
<script>
  $(function() {
$("#date").datepicker({ dateFormat: "dd-mm-yy" }).val()
});
  </script>
<div class="panel panel-info">
      <div class="panel-heading"><img src="image/muiten3.png"> ĐỔI THÔNG TIN TÀI KHOẢN THÀNH VIÊN</div>
          <div class="panel-body">
          <div class="col-md-4" style="border:1px solid #999; border-radius:10px; padding-top:10px;">
          <form action="modules/taikhoan/suataikhoan.php" method="post" name="form1">
          		  <table  width="100%">
                    <tr>
                        <td height="40"><span class="label label-primary">Họ và tên</span></td>
                      <td><input name="hoten" type="text" value="<?php echo $dong["fullname"]?>"></td>
                    </tr>
                    <tr>
                        <td><span class="label label-primary">Ngày sinh</span></td>
                        <td><input name="ngaysinh" id="date" type="text" value="<?php echo $date;?>"></td>
                    </tr>
                    <tr>
                        <td height="40"><span class="label label-primary">Địa chỉ</span></td>
                        <td><input name="diachi" type="text" value="<?php echo $dong["Diachi"]?>"></td>
                    </tr>
                    <tr>
                        <td><span class="label label-primary">Email</span></td>
                        <td><input name="email" type="text" value="<?php echo $dong["Email"]?>"></td>
                    </tr>
				</table>
                 <div style="margin-top:10px; float:left">
                            <button class="btn btn-primary" type="submit" name="sua" style="margin:5px;">Sửa thông tin</button><button class="btn btn-primary" type="reset" >Nhập lại</button></div>
          </div>
          <div class="col-md-8">
                <table class="table table-bordered" width="100%">
                <tr>
                	<td>Họ tên</td>
                    <td>Ngày sinh</td>
                    <td>Địa chỉ</td>
                    <td>Email</td>
                </tr>
                <tr>
                	<td><?php echo $dong["fullname"]?></td>
                    <td><?php 
							echo $date; ?>
                    </td>
                    <td><?php echo $dong["Diachi"]?></td>
                    <td><?php echo $dong["Email"]?></td>
                </tr>
				</table>
          </div>		
          </div>
</div>
