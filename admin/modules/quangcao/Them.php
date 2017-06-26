<script type="text/javascript">
  $(function() {
		$("#date").datepicker({ dateFormat: "dd-mm-yy" }).val()
		});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		 var validator = $("#tintuc").validate({ 
        rules: { 
			diachi:"required",
			anh:"required"
	
        }, message:{
			diachi:"Địa chỉ URL không được bỏ trống",
			anh:"Chọn đường dẫn file ảnh",
        }
    }); 
})
</script>
<div class="panel panel-default">
  <div class="panel-heading"><img src="image/BlackBerry.png">THÊM MỚI QUẢNG CÁO</div>
  <div class="panel-body">
        <form name="form" action="modules/quangcao/xuly.php" method="post" enctype="multipart/form-data"  id="tintuc" >
              <table width="601" border="0">
                  <tr>
                    <th width="233" height="32" scope="row">Địa chỉ web</th>
                    <td colspan="2">
                      <input type="text" name="diachi" size="50" >
                    </td>
                  </tr>
                  <tr>
                    <th height="31" scope="row">Vị trí quảng cáo</th>
                    <td colspan="2">
                      <select name="vitri">
                      <option>Slide</option>
                      <option>left</option>
                      <option>right</option>
                      </select>
                   </td>
                  </tr>
                  <tr>
                    <th height="33" scope="row">Hình ảnh</th>
                    <td colspan="2"><input type="file" name="anh" > </td>
                  </tr>
                  <tr>
                    <th scope="row">&nbsp;</th>
                    <td width="312">
                      <input type="submit" onclick="tieude()" name="them" class="button" value="     Thêm     " >
                      
                        <input type="reset" name="reset" class="button" value="      Xóa     ">
                        
                        <input type="button" onclick="window.location='index.php?quanly=Tintuc&ac=lietke'" name="quaylai" class="button" value="      Quay lại     ">
                    </td>
                    <td width="42">&nbsp;</td>
                  </tr>
                </table>
        </form>
</div>
</div>
