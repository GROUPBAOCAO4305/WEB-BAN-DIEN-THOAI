<?php 
	include("modules/editor/editor1.php");
?>
<script>
		$(document).ready(function(){
			$("#themdongphukien").validate();
		});
</script>
<div class="panel panel-default">
  <div class="panel-heading"><img src="image/BlackBerry.png">THÊM MỚI LOẠI PHỤ KIỆN</div>
  <div class="panel-body">  
  <form action="modules/Loaiphukien/xuly.php" method="post" id="themdongphukien" >    
  	<table width="481" border="0">
          <tr>
            <th width="108" height="32" scope="row">Mã phụ kiện</th>
            <td colspan="2">
              <input type="text" name="maphukien" class="required" >
            </td>
          </tr>
          <tr>
            <th height="33" scope="row">Tên loại phụ kiện</th>
            <td colspan="2"><input type="text" name="tenloaiphukien" size="50" class="required"></td>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <td width="358">
              <input type="submit" name="them" class="button" value="     Thêm     ">
              
                <input type="reset" name="reset" class="button" value="      Xóa     ">
                 <input type="button" onclick="window.location='index.php?quanly=Loaiphukien&ac=lietke'" name="quaylai" class="button" value="      Quay lại     ">
            </td>
            <td width="1">&nbsp;</td>
          </tr>
        </table>
</form>
 </div>
</div>
