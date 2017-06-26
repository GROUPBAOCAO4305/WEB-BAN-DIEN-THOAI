<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js" type="text/
javascript"></script>
<?php 
	include("modules/editor/editor1.php");
?>
<script type="text/javascript">
	$(document).ready(function(){
		 var validator = $("#themdongsanpham").validate({ 
        rules: { 
            madong:"required",
			tendongsp:"required",
        }, 
        messages: { 
            madong:"Hãy điền dòng sản phẩm đầy đủ.",
			tendongsp:"Hãy điền tên dòng sản phẩm đầy đủ.",
        }
    }); 
})
</script>
<div class="panel panel-default">
  <div class="panel-heading"><img src="image/BlackBerry.png">THÊM MỚI DÒNG SẢN PHẨM</div>
      <div class="panel-body">  
        <form action="modules/Dongsp/xuly.php" method="post" id="themdongsanpham">
              <table width="484" border="0">
                  <tr>
                    <th width="166" height="32" scope="row">Mã dòng</th>
                    <td colspan="2">
                      <input type="text" name="madong" id="madong">
                    </td>
                  </tr>
                  <tr>
                    <th height="33" scope="row">Tên dòng sản phẩm</th>
                    <td colspan="2"><input type="text" name="tendongsp" size="50" class="validate[required] text-input" ></td>
                  </tr>
                  <tr>
                    <th scope="row">&nbsp;</th>
                    <td width="303">
                      <input type="submit" name="them" class="button" value="     Thêm     ">
                      
                        <input type="reset" name="reset" class="button" value="      Xóa     ">
                         <input type="button" onclick="window.location='index.php?quanly=Dongsp&ac=lietke'" name="quaylai" class="button" value="      Quay lại     ">
                    </td>
                    <td width="1">&nbsp;</td>
                  </tr>
                </table>
        </form>
    </div>
</div>
