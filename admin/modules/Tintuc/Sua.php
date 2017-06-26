<?php 
	include("modules/editor/editor1.php");
	$sql="select * from tbltintuc where MaTintuc='$_GET[id]'";
	$Tintuc=mysql_query($sql);
	$dong=mysql_fetch_array($Tintuc);
?>
<script>
  $(function() {
$("#date").datepicker({ dateFormat: "dd-mm-yy" }).val()
});
  </script>
<div class="panel panel-default">
  <div class="panel-heading"><img src="image/BlackBerry.png">SỬA TIN TỨC</div>
  <div class="panel-body">
    <form action="modules/Tintuc/xuly.php?id=<?php echo $dong["MaTinTuc"]?>" method="post" enctype="multipart/form-data" >
           <table width="616" border="0">
              <tr>
                <th width="217" height="32" scope="row">Tiêu đề</th>
                <td colspan="2">
                  <input type="text" name="tieude" id="tieude" value="<?php  echo $dong["TieuDe"]?>" size="50">
                </td>
              </tr>
              <tr>
                <th height="33" scope="row">Tóm tắt</th>
                <td colspan="2">
                  <textarea name="tomtat" id="tomtat" cols="45" rows="5" >
                    <?php  echo $dong["TomTat"]?>
                  </textarea>
                </td>
              </tr>
              <tr>
                <th height="31" scope="row">Nội dung</th>
                <td colspan="2">
                  <textarea name="noidung"  cols="45" rows="5" >
                  <?php  echo $dong["NoiDung"]?>
                  </textarea>
                </td>
              </tr>
              <tr>
                <th height="33" scope="row">Ngày đăng tin</th>
                <td colspan="2">
                  <input type="text" name="ngaydangtin" id="date" value="<?php  $sqldate = strtotime($dong["NgayDangTin"]);
                $date = date('d/m/Y', $sqldate);
                echo $date; ?>">
               </td>
              </tr>
              <tr>
                <th height="31" scope="row">Tác giả</th>
                <td colspan="2">
                  <input type="text" name="tacgia" id="tacgia" value="<?php  echo $dong["TacGia"]?>">
               </td>
              </tr>
              <tr>
                <th scope="row">Hình ảnh</th>
                <td colspan="2"><img src="../uploads/<?php
                  echo $dong['HinhAnh']?>"  width="60px">
                <input type="file" name="anh"></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td width="218">
                  <input type="submit" name="sua" class="button" value="     Sửa     ">
                  
                    <input type="reset" name="reset" class="button" value="      Xóa     ">
                    <input type="button" onclick="window.location='index.php?quanly=Tintuc&ac=lietke'" name="quaylai" class="button" value="      Quay lại     ">
                </td>
                <td width="167">&nbsp;</td>
              </tr>
            </table>
    </form>
 </div>
</div>
