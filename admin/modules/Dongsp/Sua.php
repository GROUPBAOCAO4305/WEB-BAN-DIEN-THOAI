<?php 
	include("modules/editor/editor1.php");
	$sql="select * from tbldongsanpham where Madong='$_GET[id]'";
	$Dongsp=mysql_query($sql);
	$dong=mysql_fetch_array($Dongsp);
?>
<div class="panel panel-default">
  <div class="panel-heading"><img src="image/BlackBerry.png">SỬA DÒNG SẢN PHẨM</div>
  <div class="panel-body">  
        <form action="modules/Dongsp/xuly.php?id=<?php echo $dong["Madong"]?>" method="post" >
              <table width="483" border="0">
                  <tr>
                    <th width="209" height="32" scope="row">Tên dòng sản phẩm</th>
                    <td colspan="2"><input type="text" name="tendongsp" value="<?php  echo $dong["Tendong"]?>" size="50"></td>
                  </tr>
                  <tr>
                    <th scope="row">&nbsp;</th>
                    <td width="257">
                      <input type="submit" name="sua" class="button" value="     Sửa     ">
                      
                        <input type="reset" name="reset" class="button" value="      Xóa     ">
                        <input type="button" onclick="window.location='index.php?quanly=Dongsp&ac=lietke'" name="quaylai" class="button" value="      Quay lại     ">
                    </td>
                    <td width="3">&nbsp;</td>
                  </tr>
                </table>
        </form>
  </div>
</div>