<?php 
	include("modules/editor/editor1.php");
	$sql="select * from loaiphukien where Maphukien='$_GET[id]'";
	$Loaiphukien=mysql_query($sql);
	$dong=mysql_fetch_array($Loaiphukien);
?>
<div class="panel panel-default">
  <div class="panel-heading"><h5>THÊM MỚI LOẠI PHỤ KIỆN</h5></div>
  <div class="panel-body">  
    <form action="modules/Loaiphukien/xuly.php?id=<?php echo $dong["Maphukien"]?>" method="post" >
          <table width="503" border="0">
              <tr>
                <th width="121" height="32" scope="row">Tên loại phụ kiện</th>
                <td colspan="2"><input type="text" name="tenloaiphukien" value="<?php  echo $dong["Loaiphukien"]?>" size="50"></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td width="345">
                  <input type="submit" name="sua" class="button" value="     Sửa     ">
                  
                    <input type="reset" name="reset" class="button" value="      Xóa     ">
                     <input type="button" onclick="window.location='index.php?quanly=Loaiphukien&ac=lietke'" name="quaylai" class="button" value="      Quay lại     ">
                </td>
                <td width="23">&nbsp;</td>
              </tr>
            </table>
    </form>
 </div>
</div>

