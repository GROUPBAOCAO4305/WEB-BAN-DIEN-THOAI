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
		 var validator = $("#dangky").validate({ 
        rules: { 
            hoten:{
				required:true,
				minlength:6,
			},
			tendangnhap: {
    			required:true,
   				remote:{   //gọi AJAX tương tự $.ajax của jquery
        	    url: "modules/quantrivien/kiemtra.php",// gọi đến trang kiểm tra username
        type: "post",
        //data :  nếu cần
    } 
    },
            email: { 
                required: true, 
                email: true
            },
			matkhau: { 
                required: true, 
                minlength: 6, 
            }, 
            nhaplaimatkhau: { 
                equalTo: "#password" 
            }, 
			ngaysinh:"required",
			check:"required", 
        }, 
        messages: { 
            hoten:{
				required:"Hãy điền họ tên đầy đủ.",
				minlength:"Họ tên ít nhất 6 ký tự"
				},
			tendangnhap:{
            required:"Hãy điền tên đăng nhập.", 
            remote:"Tên đăng nhập đã có người sử dụng"// thông báo lỗi
    },
            email: { 
                required: "Hãy nhập 1 địa chỉ email hợp lệ", 
                email:"Địa chỉ email không hợp lệ"
            },
			 matkhau: { 
                required: "Hãy điền mật khẩu", 
                minlength: "Mật khẩu ít nhất 6 ký tự"
            }, 
            nhaplaimatkhau: { 
                equalTo: "Mật khẩu xác nhận không chính xác" 
            }, 
			ngaysinh:"Bạn phải nhập ngày sinh của bạn",
			check:"Bạn phải chọn trường này"
        }
    }); 
})
</script>
<div class="panel panel-default">
      <div class="panel-heading"><img src="image/BlackBerry.png">THÊM MỚI TÀI KHOẢN QUẢN TRỊ</div>
          <div class="panel-body">
          <form id="dangky" action="modules/quantrivien/xuly.php" method="post"> 
            <table>
                	<tr>
                    	<td colspan="2">THÔNG TIN TÀI KHOẢN</td>
                    </tr>
                    <tr>
                    	<td width="14%" height="50"><label>*</label><span class="label label-primary">Tên đăng nhập</span></td>
                      <td width="86%"><input name="tendangnhap" type="text" size="60"  id="tendangnhap" ></td>
                    </tr>
                    <tr>
                    	<td ><label>*</label><span class="label label-primary">Mật khẩu</span></td>
                        <td><input name="matkhau" type="password" size="60" id="password"  ></td>
                    </tr>
                    <tr>
                    	<td height="50"><label>*</label><span class="label label-primary">Nhập lại mật khẩu</span></td>
                        <td><input name="nhaplaimatkhau" type="password" size="60" ></td>
                    </tr>
                    <tr>
                    	<td colspan="2">THÔNG TIN CHUNG</td>
                    </tr>
                    <tr>
                    	<td height="50"><label>*</label><span class="label label-primary">Họ tên</span></td>
                        <td><input name="hoten" type="text" size="60"></td>
                    </tr>
                     <tr>
                    	<td><label>*</label><span class="label label-primary">Email</span></td>
                        <td><input name="email" type="text" size="60"></td>
                    </tr>
                     <tr>
                    	<td height="50">&nbsp;&nbsp;&nbsp;<span class="label label-primary">Địa chỉ</span></td>
                        <td><input name="diachi" type="text" size="60"></td>
                    </tr>
                     <tr>
                       <td height="50">&nbsp;&nbsp;&nbsp;<span class="label label-primary">SĐT</span></td>
                       <td><input type="text" name="sdt"></td>
                     </tr>
                     <tr>
                    	<td height="50"><label>*</label><span class="label label-primary">Ngày sinh</span></td>
                        <td><input name="ngaysinh" type="text" id="date"></td>
                    </tr>
                     <tr>
                    	<td><label>*</label><span class="label label-primary">Quyền</span></td>
                        <td>
                        	<select name="quyen">
                            	<?php for ($i=1; $i<7;$i++){?>
                            	<option><?php echo $i;?></option>
                                <?php }?>
                        	</select>
                        </td>
                    </tr>
                </table>
                 <div style="margin-top:10px;">
            <button class="btn btn-primary" type="submit" name="them" style="margin:5px;" >Thêm</button><button class="btn btn-primary" type="reset" >Nhập lại</button><button class="btn btn-primary" type="button" onClick="window.location='index.php?quanly=quantrivien&ac=lietke'" >Quay về</button></div>
            </form>
          </div>
</div>