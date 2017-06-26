<?php 
	$sql="select * from chitietsanpham where Masanpham='$_GET[id]'";
	$chitietsp=mysql_query($sql);
	$dong=mysql_fetch_array($chitietsp);
?>
<script>
  $(function() {
$("#date").datepicker({ dateFormat: "dd-mm-yy" }).val()
});
  </script>
<form action="modules/chitietsp/xuly.php?id=<?php echo $dong["Masanpham"]?>" method="post" enctype="multipart/form-data" >
    <div class="capnhat">
    	<div class="panel panel-default">
          <div class="panel-body">
           <h5>SỬA SẢN PHẨM</h5>
          </div>
        </div>
      		<div class="box-them">
            	<h3 style="text-align:center; font-size:14px;color:#0CF;">Đặc điểm chính</h3>
              <table  border="0">
                  <tr>
                        <td width="69" height="33">Tên sản phẩm</td>
                        <td ><input type="text" name="tensanpham" value="<?php echo $dong["Tensp"] ?>"size="30"></td>                  
                  </tr>
                  <tr>
                    <td width="114" height="33">Loại sản phẩm</td>
                    <td width="152">
                    <select name="loaisp">
                        <?php 
							 $sql="select * from tbldongsanpham";
                        	$loaisp=mysql_query($sql);
                            while($dong_sp=mysql_fetch_array($loaisp)){
								if($dong_sp["Madong"]==$dong["Madong"]){
                        ?>
                        <option value="<?php echo $dong_sp["Madong"]?>" selected="selected"><?php  echo $dong_sp["Tendong"]?></option>
                        <?php 
								}else{
                        ?>
                        <option value="<?php echo $dong_sp["Madong"]?>" ><?php  echo $dong_sp["Tendong"]?></option>
                        <?php 
								}
							}
						?>
                    </select></td>
                  </tr>
                  <tr>
                  	<td width="69" height="33">Loại hàng</td>
                  	<td>
                    	<select name="loaihang">
                        <?php if($dong["Loaihang"]=="Hàng cao cấp"){ ?>
                        	<option selected="selected">Hàng cao cấp</option>
                            <option>Hàng phổ thông</option>
                            <option>Hàng giá rẻ</option>
                            <?php }else if($dong["Loaihang"]=="Hàng phổ thông"){?>
                            <option >Hàng cao cấp</option>
                            <option selected="selected">Hàng phổ thông</option>
                            <option>Hàng giá rẻ</option>
                            <?php }else{?>
                             <option >Hàng cao cấp</option>
                            <option >Hàng phổ thông</option>
                            <option selected="selected">Hàng giá rẻ</option>
                            <?php }?>
                        </select>
                    </td>
                  </tr>
                  <tr>
                  	 <td width="69" height="33">Ngày SX</td>
                     <td><p><input type="text" name="ngaysanxuat"  id="date" value="<?php $sqldate = strtotime($dong["NgaySX"]);
			$date = date('d-m-Y', $sqldate);
			echo $date; ?>"/></p>
 </td>
                  </tr>
               </table>
                <div class="xoa"></div>
            </div>
            <div class="box-them">
   	    <h3 style="text-align:center; font-size:14px;color:#0CF;">Bộ nhớ-Memory</h3>
        <table  border="0">
            <tr>
                  <td width="114" height="33">Rom-Ram </td>
                  <td ><input type="text" name="ram" size="30" value="<?php echo $dong["RomRam"]?>"></td>       
            </tr>
            <tr>
              <td width="114" height="33">Bộ nhớ trong</td>
              <td width="152"><input type="text" name="bonhotrong" size="30" value="<?php echo $dong["Bonhotrong"]?>"></td>
            </tr>
            <tr>                 	                  	 <td width="114" height="33">Camera</td>
           	  <td><input type="text" name="camera" size="30" value="<?php echo $dong["Camera"]?>"></td>
            </tr>
            <tr>
           	   <td width="114" height="33">Thẻ nhớ</td>
               <td><input type="text" name="thenho" value="<?php echo $dong["Thenho"]?>"/>
 </td>
            </tr>
        </table>
        </div>
        <div class="box-them">
   	    <h3 style="text-align:center; font-size:14px;color:#0CF;">Kết nối mạng</h3>
        <table  border="0">
            <tr>
                  <td width="114" height="33">Wifi</td>
                  <td ><input type="text" name="wifi" size="30" value="<?php echo $dong["Wifi"]?>"></td>       
            </tr>
            <tr>
              <td width="114" height="33">Bluetooth</td>
              <td width="152"><input type="text" name="bluetooth" size="30" value="<?php echo $dong["Bluetooth"]?>"></td>
            </tr>
             <tr>
                    <td height="33">GPS</td>
                    <td><select name="gps">
                    <?php if ($dong["GPS"]=="Có"){?>
                    		<option selected="selected">Có</option>
                            <option>Không</option>
                            <?php }else{ ?>
                            <option >Có</option>
                            <option selected="selected">Không</option>
                            <?php }?>
                    	</select>
                    </td>
                  </tr>
            <tr>
           	   <td width="114" height="33">Java</td>
               <td><input type="text" name="java" value="<?php echo $dong["Java"]?>"/>
 </td>
            </tr>
        </table>
        <div class="xoa"></div>
        </div>
      <div class="box-them">
   	    <h3 style="text-align:center; font-size:14px;color:#0CF;">Thông số kỹ thuật</h3>
        <table  border="0">
            <tr>
                  <td width="114" height="33">Mạng</td>
                  <td ><input type="text" name="mang" size="30" value="<?php echo $dong["Mang"]?>"></td>
                       
                       
                        
            </tr>
            <tr>
              <td width="114" height="33">Pin</td>
              <td width="152"><input type="text" name="pin" size="30" value="<?php echo $dong["Pin"]?>"></td>
            </tr>
            <tr>                 	                  	 <td width="114" height="33">Radio</td>
           	  <td><input type="text" name="radio" size="30" value="<?php echo $dong["Radio"]?>"></td>
            </tr>
            <tr>
           	   <td width="114" height="33">Video</td>
               <td><input type="text" name="video" value="<?php echo $dong["Video"]?>"/>
 </td>
            </tr>
            <tr>
              <td height="33">Audio</td>
              <td><input type="text" name="audio" value="<?php echo $dong["Audio"]?>"/></td>
            </tr>
                 
            <tr>
              <td height="33">Màn hình</td>
              <td><input type="text" name="manhinh" value="<?php echo $dong["Manhinh"]?>"/></td>
            </tr>
            <tr>
              <td height="33">Ghi âm</td>
              <td><select name="ghiam">
              <?php if ($dong["Ghiam"]=="Có"){?>
               		  <option selected="selected">Có</option>
                      <option>Không</option>
                      <?php }else{?>
                        <option >Có</option>
                      <option selected="selected">Không</option>
                      <?php }?>
               	  </select>
              </td>
            </tr>
                  <tr>
                    <td height="33">Kích thước</td>
                    <td><input type="text" name="kichthuoc" value="<?php echo $dong["Kichthuoc"]?>"/></td>
                  </tr>
                  <tr>
                    <td height="33">Trọng lượng</td>
                    <td><input type="text" name="trongluong" value="<?php echo $dong["Trongluong"]?>"/></td>
                  </tr>
         </table>
          <div class="xoa"></div>
            </div>
         <div class="box-them">
   	    <h3 style="text-align:center; font-size:14px;color:#0CF;">Bộ xử lý</h3>
        <table  border="0">
            <tr>
                  <td width="114" height="33">CPU</td>
                  <td ><input type="text" name="cpu" size="30" value="<?php echo $dong["CPU"]?>"></td>       
            </tr>
            <tr>
              <td width="114" height="33">Hệ điều hành</td>
              <td width="360"><input type="text" name="hedieuhanh" size="30" value="<?php echo $dong["Hedieuhanh"]?>"></td>
            </tr>
             <tr>
                    <td height="33" colspan="2"><h3 style="text-align:center; font-size:14px;color:#0CF;"> Thông tin khác</h3></td>
                  </tr>
            <tr>
               <td height="33">Mô tả</td>
               <td>
               		<textarea name="nd" cols="45" rows="3">
                    	<?php echo $dong["Mota"] ?>
                    </textarea></td>
          </tr>
            <tr>
              <td height="33">Bảo hành</td>
              <td><input type="text" name="baohanh" value="<?php echo $dong["Baohanh"]?>"/></td>
            </tr>
            <tr>
              <td height="33">Trạng thái</td>
              <td>
                 <select name="trangthai" >
                 <?php if($dong["Trangthai"]=="Còn hàng"){?>
                    <option selected="selected">Còn hàng</option>
                    <option>Hết hàng</option>
                    <?php }else{ ?>
                     <option >Còn hàng</option>
                    <option selected="selected">Hết hàng</option>
                    <?php } ?>
                </select>
              </td>
            </tr>
            <tr>
              <td height="33">Tình trạng</td>
              <td>
              	<select name="tinhtrang">
                <?php if ($dong["Tinhtrang"]=="Mới 100%"){?>
                    <option selected="selected">Mới 100%</option>
                    <option>Mới 99%</option>
                    <option>Cũ</option>
                    <?php }else if($dong["Tinhtrang"]=="Mới 99%"){?>
                     <option >Mới 100%</option>
                    <option selected="selected">Mới 99%</option>
                    <option>Cũ</option>
                    <?php }else{?>
                     <option >Mới 100%</option>
                    <option >Mới 99%</option>
                    <option selected="selected">Cũ</option>
                    <?php }?>
            	</select>
               </td>
            </tr>
            <tr>
              <td height="33">Giá</td>
              <td><input type="text" name="gia" value="<?php echo $dong["Gia"]?>"/> VNĐ</td>
            </tr>
            <tr>
              <td height="33">Hình ảnh</td>
              <td colspan="2"><img src="../uploads/<?php
              echo $dong['Hinhanh']?>"  width="60px">
            <input type="file" name="hinhanh"/></td>
            </tr>
        </table>
        <div class="xoa"></div>
        </div> 
        <div class="xoa"></div>
              <input type="submit" name="sua" class="button" value="     Sửa     ">
              
                <input type="reset"  class="button" value="      Xóa     ">
                 <input type="button" onClick="window.location='index.php?quanly=chitietsp&ac=lietke'" name="quaylai" class="button" value="      Quay lại     ">
</div>
</form>