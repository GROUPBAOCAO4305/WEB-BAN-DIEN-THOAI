<?php 
	$sql="select * from quangcao where id='$_GET[id]'";
	$query=mysql_query($sql);
	$dong=mysql_fetch_array($query);
?>
<div class="panel panel-default">
  <div class="panel-heading"><img src="image/BlackBerry.png">THÊM MỚI QUẢNG CÁO</div>
  <div class="panel-body">
        <form name="form" action="modules/quangcao/xuly.php?id=<?php echo $dong["id"]?>" method="post" enctype="multipart/form-data"  id="tintuc" >
              <table width="601" border="0">
                  <tr>
                    <th width="233" height="32" scope="row">Địa chỉ web</th>
                    <td colspan="2">
                      <input type="text" name="diachi" size="50" value="<?php echo $dong["diachi"]?>" >
                    </td>
                  </tr>
                  <tr>
                    <th height="31" scope="row">Vị trí quảng cáo</th>
                    <td colspan="2">
                      <select name="vitri">
                      <?php if($dong["loai"]=="Slide"){?>
                      <option selected="selected">Slide</option>
                      <option>left</option>
                      <option>right</option>
                      <?php }else if($dong["loai"]=="left"){?>
                      <option>Slide</option>
                      <option selected="selected">left</option>
                      <option>right</option>
                      <?php }else{?>
                      <option>Slide</option>
                      <option>left</option>
                      <option selected="selected">right</option>
                      <?php }?>
                      </select>
                   </td>
                  </tr>
                  <tr>
                    <th height="33" scope="row">Hình ảnh</th>
                    <td colspan="2"><img src="../uploads/<?php
                  echo $dong['hinhanh']?>"  width="60px"><input type="file" name="anh" > </td>
                  </tr>
                  <tr>
                    <th scope="row">&nbsp;</th>
                    <td width="312">
                      <input type="submit" onclick="tieude()" name="sua" class="button" value="    Sửa     " >
                      
                        <input type="reset" name="reset" class="button" value="      Xóa     ">
                        
                        <input type="button" onclick="window.location='index.php?quanly=quangcao&ac=lietke'" name="quaylai" class="button" value="      Quay lại     ">
                    </td>
                    <td width="42">&nbsp;</td>
                  </tr>
                </table>
        </form>
</div>
</div>
