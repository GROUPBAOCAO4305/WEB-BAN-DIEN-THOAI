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
        	   url: "modules/taikhoan/kiemtra.php",// gọi đến trang kiểm tra username
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
			check:"Bạn phải chọn trường này",
        },
    }); 
})
</script>
<script>
  $(function() {
$("#date").datepicker({ dateFormat: "dd-mm-yy" }).val()
});
</script>
<div class="panel panel-info">
      <div class="panel-heading"><img src="image/muiten3.png">ĐĂNG KÝ TÀI KHOẢN</div>
          <div class="panel-body">
          		<h6>Nếu đã có tài khoản xin vui lòng đăng nhập tại <a href="index.php?xem=dangnhap">đây</a></h6>
          <form id="dangky" action="modules/taikhoan/xulydangky.php" method="post"> 
            <table width="100%">
                	<tr>
                    	<td colspan="2"><h5 style="color:#F00">THÔNG TIN TÀI KHOẢN</h5></td>
                    </tr>
                    <tr>
                    	<td width="14%" height="50"><label>*</label><span class="label label-primary">Tên đăng nhập</span></td>
                      <td width="86%"><input name="tendangnhap" type="text" size="60"  id="tendangnhap" onblur="if (this.value!='') makeRequest()"></td>
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
                    	<td colspan="2"><h5 style="color:#F00">THÔNG TIN NGƯỜI DÙNG</h5></td>
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
                    	<td height="50"><label>*</label><span class="label label-primary">Ngày sinh</span></td>
                        <td><input name="ngaysinh" type="text" id="date"></td>
                    </tr>
                    <tr>
                    	<td colspan="2" align="right">Tôi đã đọc và đồng ý với các điều khoản<input name="check" type="checkbox" style="margin-left:10px" >
                    	</td>
                    </tr>
                </table>
                 <div style="margin-top:10px; float:right;">
                            <button class="btn btn-primary" type="submit" name="dangky" style="margin:5px;" >Đăng ký</button><button class="btn btn-primary" type="reset" >Nhập lại</button></div>
            </form>
          </div>
</div>
