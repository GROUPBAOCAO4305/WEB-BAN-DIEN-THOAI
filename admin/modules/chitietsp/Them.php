<script>
  $(function() {
$("#date").datepicker({ dateFormat: "dd-mm-yy" }).val()
});
  </script>
  <script type="text/javascript">
	$(document).ready(function(){
		 var validator = $("#themsanpham").validate({ 
        rules: { 
            tensanpham:"required",
        }, 
        messages: { 
            tensanpham:"Hãy điền tên sản phẩm đầy đủ.",
        }
    }); 
})
</script>
<form action="modules/chitietsp/xuly.php" method="post" enctype="multipart/form-data" id="themsanpham">
    <div class="capnhat">
    	<div class="panel panel-default">
          <div class="panel-body">
           <h5>THÊM MỚI SẢN PHẨM</h5>
          </div>
        </div>
      		<div class="box-them">
            	<h3 style="text-align:center; font-size:14px;color:#0CF;">Đặc điểm chính</h3>
              <table  border="0">
                  <tr>
                        <td width="69" height="33">Tên sản phẩm</td>
                        <td ><input type="text" name="tensanpham" size="30" class="validate[required] text-input"></td>
                       
                       
                        
                  </tr>
                  <tr>
                    <td width="114" height="33">Loại sản phẩm</td>
                    <td width="152">
                    <?php 
                        $sql="select * from tbldongsanpham";
                        $loaisp=mysql_query($sql);
                    ?>
                    <select name="loaisp" >
                        <?php 
                            while($dong_sp=mysql_fetch_array($loaisp)){
                        ?>
                        <option value="<?php echo $dong_sp["Madong"]?>"><?php  echo $dong_sp["Tendong"]?></option>
                        <?php 
                            }
                        ?>
                    </select></td>
                  </tr>
                  <tr>                 	                  	 <td width="69" height="33">Loại hàng</td>
                  	<td>
                    	<select name="loaihang">
                        	<option>Hàng cao cấp</option>
                            <option>Hàng phổ thông</option>
                            <option>Hàng giá rẻ</option>
                        </select>
                    </td>
                  </tr>
                  <tr>
                  	 <td width="69" height="33">Ngày SX</td>
                     <td><p><input type="text" name="ngaysanxuat"  id="date"/></p>
 </td>
                  </tr>
               </table>
            </div>
            <div class="box-them">
   	    <h3 style="text-align:center; font-size:14px;color:#0CF;">Bộ nhớ-Memory</h3>
        <table  border="0">
            <tr>
                  <td width="114" height="33">Rom-Ram </td>
                  <td ><input type="text" name="ram" size="30"></td>       
            </tr>
            <tr>
              <td width="114" height="33">Bộ nhớ trong</td>
              <td width="152"><input type="text" name="bonhotrong" size="30"></td>
            </tr>
            <tr>                 	                  	 <td width="114" height="33">Camera</td>
           	  <td><input type="text" name="camera" size="30"></td>
            </tr>
            <tr>
           	   <td width="114" height="33">Thẻ nhớ</td>
               <td><input type="text" name="thenho"/>
 </td>
            </tr>
        </table>
        </div>
        <div class="box-them">
   	    <h3 style="text-align:center; font-size:14px;color:#0CF;">Kết nối mạng</h3>
        <table  border="0">
            <tr>
                  <td width="114" height="33">Wifi</td>
                  <td ><input type="text" name="wifi" size="30"></td>       
            </tr>
            <tr>
              <td width="114" height="33">Bluetooth</td>
              <td width="152"><input type="text" name="bluetooth" size="30"></td>
            </tr>
             <tr>
                    <td height="33">GPS</td>
                    <td><select name="gps">
                    		<option>Có</option>
                            <option>Không</option>
                    	</select>
                    </td>
                  </tr>
            <tr>
           	   <td width="114" height="33">Java</td>
               <td><input type="text" name="java"/>
 </td>
            </tr>
        </table>
        </div>
      <div class="box-them">
   	    <h3 style="text-align:center; font-size:14px;color:#0CF;">Thông số kỹ thuật</h3>
        <table  border="0">
            <tr>
                  <td width="114" height="33">Mạng</td>
                  <td ><input type="text" name="mang" size="30"></td>
                       
                       
                        
            </tr>
            <tr>
              <td width="114" height="33">Pin</td>
              <td width="152"><input type="text" name="pin" size="30"></td>
            </tr>
            <tr>                 	                  	 <td width="114" height="33">Radio</td>
           	  <td><input type="text" name="radio" size="30"></td>
            </tr>
            <tr>
           	   <td width="114" height="33">Video</td>
               <td><input type="text" name="video"/>
 </td>
            </tr>
            <tr>
              <td height="33">Audio</td>
              <td><input type="text" name="audio"/></td>
            </tr>
                 
            <tr>
              <td height="33">Màn hình</td>
              <td><input type="text" name="manhinh"/></td>
            </tr>
            <tr>
              <td height="33">Ghi âm</td>
              <td><select name="ghiam">
               		  <option>Có</option>
                      <option>Không</option>
               	  </select>
              </td>
            </tr>
                  <tr>
                    <td height="33">Kích thước</td>
                    <td><input type="text" name="kichthuoc"/></td>
                  </tr>
                  <tr>
                    <td height="33">Trọng lượng</td>
                    <td><input type="text" name="trongluong"/></td>
                  </tr>
         </table>
            </div>
         <div class="box-them" >
   	    <h3 style="text-align:center; font-size:14px;color:#0CF;">Bộ xử lý</h3>
        <table >
            <tr>
                  <td width="108" height="33">CPU</td>
                  <td ><input type="text" name="cpu" size="30"></td>       
            </tr>
            <tr>
              <td width="108" height="33">Hệ điều hành</td>
              <td width="285"><input type="text" name="hedieuhanh" size="30"></td>
            </tr>
             <tr>
                    <td height="33" colspan="2"><h3 style="text-align:center; font-size:14px;color:#0CF;"> Thông tin khác</h3></td>
                  </tr>
            <tr>
               <td height="33">Mô tả</td>
               <td><textarea name="nd" cols="40" rows="3"></textarea>></td>
          </tr>
            <tr>
              <td height="33">Bảo hành</td>
              <td><input type="text" name="baohanh"/></td>
            </tr>
            <tr>
              <td height="33">Trạng thái</td>
              <td><select name="trangthai" >
            <option>Còn hàng</option>
            <option>Hết hàng</option>
            </select></td>
            </tr>
            <tr>
              <td height="33">Tình trạng</td>
              <td><select name="tinhtrang" >
            <option>Mới 100%</option>
            <option>Mới 99%</option>
            <option>Cũ</option>
            </select></td>
            </tr>
            <tr>
              <td height="33">Giá</td>
              <td><input type="text" name="gia"/> 
                VNĐ</td>
            </tr>
            <tr>
              <td height="33">Hình ảnh</td>
              <td><input type="file" name="hinhanh"/></td>
            </tr>
        </table>
        </div> 
      	<div class="xoa"></div>
              <input type="submit" name="them" class="button" value="     Thêm     ">
              
                <input type="reset" name="reset" class="button" value="      Xóa     ">
                 <input type="button" onClick="window.location='index.php?quanly=chitietsp&ac=lietke'" name="quaylai" class="button" value="      Quay lại     ">
    </div>
</form>
