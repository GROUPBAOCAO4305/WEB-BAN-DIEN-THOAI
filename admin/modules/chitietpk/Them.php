<?php 
	include("modules/editor/editor1.php");
?>
<script type="text/javascript">
	$(document).ready(function(){
		 var validator = $("#them").validate({ 
        rules: { 
            tenphukien:"required",
        }, 
        messages: { 
            tenphukien:"Hãy điền tên phụ kiện đầy đủ.",
        }
    }); 
})
</script>
<div class="panel panel-default">
  <div class="panel-heading"><img src="image/BlackBerry.png">THÊM MỚI PHỤ KIỆN</div>
  <div class="panel-body">
    <form action="modules/chitietpk/xuly.php" method="post"enctype="multipart/form-data" id="them" >
    	 <table width="614" border="0">
          <tr>
            <th width="114" height="33" scope="row">Tên  phụ kiện</th>
            <td colspan="2"><input type="text" name="tenphukien" ></td>
          </tr>
          <tr>
            <th height="33" scope="row">Loại phụ kiện</th>
            <td colspan="2">
            <?php 
				$sql="select * from loaiphukien";
				$loaiphukien=mysql_query($sql);
			?>
            <select name="loaiphukien" >
            	<?php 
					while($dong_phukien=mysql_fetch_array($loaiphukien)){
				?>
            	<option value="<?php echo $dong_phukien["Maphukien"]?>"><?php  echo $dong_phukien["Loaiphukien"]?></option>
                <?php 
					}
				?>
            </select></td>
          </tr>
          <tr>
            <th height="33" scope="row">Mô tả</th>
            <td colspan="2"><textarea name="mota"  cols="60" rows="5"></textarea></td>
          </tr>
          <tr>
            <th height="33" scope="row">Bảo hành</th>
            <td colspan="2"><input type="text" name="baohanh" /></td>
          </tr>
          <tr>
            <th height="33" scope="row">Tình trạng</th>
            <td colspan="2"><select name="tinhtrang" >
            <option>Mới 100%</option>
            <option>Mới 99%</option>
            <option>Cũ</option>
            </select></td>
          </tr>
          <tr>
            <th height="33" scope="row">Trạng thái</th>
            <td colspan="2"><select name="trangthai" >
            <option>Còn hàng</option>
            <option>Hết hàng</option>
            </select></td>
          </tr>
          <tr>
            <td><div align="center"><strong>Giá</strong></div></td>
            <td colspan="2"><input type="text" name="gia" /></td>
          </tr>
          <tr>
            <th height="33" scope="row">Hình ảnh</th>
            <td colspan="2"><input type="file" name="hinhanh"></td>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <td width="299">
              <input type="submit" name="them" class="button" value="     Thêm     ">
              
                <input type="reset" name="reset" class="button" value="      Xóa     ">
                 <input type="button" onclick="window.location='index.php?quanly=chitietpk&ac=lietke'" name="quaylai" class="button" value="      Quay lại     ">
            </td>
            <td width="187">&nbsp;</td>
          </tr>
        </table>
     </form>
  </div>
</div>

      
