<script type="text/javascript">
	$(document).ready(function(){
		 var validator = $("#lienhe").validate({ 
        rules: { 
            hoten:{
				required:true,
				minlength:6,
			}, 
            email: { 
                required: true, 
                email: true
            },
			diachi:"required",
			phone:{
				required: true, 
                number: true
				},
			tieude:"required",
        }, 
        messages: { 
            hoten:{
				required:"Hãy điền họ tên đầy đủ.",
				minlength:"Họ tên ít nhất 6 ký tự"
				}, 
            email: { 
                required: "Hãy nhập 1 địa chỉ email hợp lệ", 
                email:"Địa chỉ email không hợp lệ"
            },
			diachi:"Hãy nhập địa chỉ nơi ở hiện tại của khách hàng",
			phone:{ 
                required: "Không được boe trống số diện thoại", 
                number:"Chỉ nhập số"
            },
			tieude:"Hãy điền tiêu đề cho liên hệ"
        }
    }); 
})
</script>
<div class="panel panel-info">
      <div class="panel-heading"><img src="image/muiten3.png"> LIÊN HỆ VỚI CHÚNG TÔI</div>
          <div class="panel-body">
          	<h6 style="color:#666;">Vui lòng nhập đúng thông tin, để bộ phận CSKH có thể hỗ trợ bạn nhanh chóng nhất.</h6>
          			<form id="lienhe" action="modules/lienhe/xuly.php" method="post">
                        	<table width="100%">
                            	<tr>
                                	<td width="76" height="27" ><span class="label label-primary">Họ và tên</span></td>          
                                    <td width="320">
                                        <div class="input-group">
                                          <input type="text" name="hoten"  placeholder="Họ tên"  size="50" class="required minlength" >
                                        </div>
									</td>
                                    <td width="200"  rowspan="5"><img src="image/BlackBerry-logo.png" width="200px" height="150px"></td>
                                </tr>
                                <tr>
                                	<td height="24"><span class="label label-primary">Email</span></td>
                                    <td>
                                    	<div class="input-group">
                                             <input type="text" name="email" class="required email" placeholder="Email"  size="50">
                                        </div>
                                    </td>
                                   
                                </tr>
                                <tr>
                                	<td height="40"><span class="label label-primary">Địa chỉ</span></td>
                                    <td>
                                    	<div class="input-group">
                                             <input type="text" name="diachi" class="reqiured" placeholder="Địa chỉ"  size="50">
                                        </div>
                                    </td>
                                    
                                </tr>
                                <tr>
                                	<td height="40"><span class="label label-primary">Điện thoại</span></td>
                                    <td>
                                    	<div class="input-group">
                                             <input type="text" name="phone" class="required number" placeholder="Điện thoại"  size="50">
                                        </div>
                                    </td>
                                    
                                </tr>
                                <tr>
                                	<td height="40"><span class="label label-primary">Tiêu đề</span></td>
                                    <td>
                                    	<div class="input-group">
                                             <input type="text" name="tieude" class="form-control" placeholder="Tiêu đề" size="50" class="required">
                                        </div>
                                    </td>
                                    
                                </tr>
                                <tr>
                                	<td><span class="label label-primary">Nội dung</span></td>
                                    <td colspan="2">
                                    	<textarea rows="5" cols="70" name="noidung"></textarea></td>                                                                   
                                </tr>
                            </table>
                            <div style="margin-top:10px;">
                            <button class="btn btn-primary" type="submit" name="gui" style="margin:5px;" >Gửi liên hệ</button><button class="btn btn-primary" type="reset" >Nhập lại</button></div>
        </form>	
          </div>
</div>
