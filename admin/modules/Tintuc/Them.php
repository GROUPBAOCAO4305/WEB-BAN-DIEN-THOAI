<?php 
	include("modules/editor/editor1.php");
?>
<script type="text/javascript">
  $(function() {
		$("#date").datepicker({ dateFormat: "dd-mm-yy" }).val()
		});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		 var validator = $("#tintuc").validate({ 
        rules: { 
			tieude: {
    			required:true,
   				remote:{   //gọi AJAX tương tự $.ajax của jquery
        	    url: "modules/Tintuc/kiemtra.php",// gọi đến trang kiểm tra username
        type: "post",
        //data :  nếu cần
   						 } 
    			},
        }, message:{
			tieude:{
            required:"Hãy điền tiêu đề cho bài viết.", 
            remote:"Tiêu đề đã trùng"// thông báo lỗi
			}
        }
    }); 
})
</script>
<div class="panel panel-default">
  <div class="panel-heading"><img src="image/BlackBerry.png">THÊM MỚI TIN TỨC</div>
  <div class="panel-body">
        <form name="form" action="modules/Tintuc/xuly.php" method="post" enctype="multipart/form-data"  id="tintuc" >
              <table width="601" border="0">
                  <tr>
                    <th width="233" height="32" scope="row">Tiêu đề</th>
                    <td colspan="2">
                      <input type="text" name="tieude" id="tieude"size="50" >
                    </td>
                  </tr>
                  <tr>
                    <th height="33" scope="row">Tóm tắt</th>
                    <td colspan="2"><textarea name="tomtat"  cols="50" rows="10"></textarea></td>
                  </tr>
                  <tr>
                    <th height="31" scope="row">Nội dung</th>
                    <td colspan="2">
                      <textarea name="noidung"  cols="50" rows="20"></textarea>
                   </td>
                  </tr>
                  <tr>
                    <th height="33" scope="row">Ngày đăng tin</th>
                    <td colspan="2">
                      <input type="text" name="ngaydangtin" id="date" class="required">
                   </td>
                  </tr>
                  <tr>
                    <th height="31" scope="row">Tác giả</th>
                    <td colspan="2">
                      <input type="text" name="tacgia" id="tacgia">
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
