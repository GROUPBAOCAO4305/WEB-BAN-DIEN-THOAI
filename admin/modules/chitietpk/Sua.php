<?php 
	include("modules/editor/editor1.php");
	$sql="select * from chitietphukien where Mahang='$_GET[id]'";
	$chitietpk=mysql_query($sql);
	$dong=mysql_fetch_array($chitietpk);
?>
<div class="panel panel-default">
  <div class="panel-heading"><h4 style="color:#F00;">SỬA PHỤ KIỆN</h4></div>
  <div class="panel-body">
    <form action="modules/chitietpk/xuly.php?id=<?php echo $dong["Mahang"]?>" method="post" enctype="multipart/form-data">
    	  <table width="726" border="0">
          <tr>
            <th width="144" height="33" scope="row">Tên  phụ kiện</th>
            <td colspan="2"><input type="text" name="tenphukien" value ="<?php  echo $dong["Tenphukien"]?>" size="50"></td>
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
						if($dong_phukien["Maphukien"]==$dong["Maphukien"]){
				?>
            	<option value="<?php echo $dong_phukien["Maphukien"]?>" selected="selected"><?php  echo $dong_phukien["Loaiphukien"]?></option>
                <?php 
						}else{
				?>
                	<option value="<?php echo $dong_phukien["Maphukien"]?>" ><?php  echo $dong_phukien["Loaiphukien"]?></option>
                <?php 
						}
					}
				?>
            </select>
            </td>
          </tr>
          <tr>
            <th height="33" scope="row">Mô tả</th>
            <td colspan="2"><textarea name="mota"  cols="70" rows="5">
            	<?php echo $dong["Mota"]?>
            </textarea>
            </td>
          </tr>
          <tr>
            <th height="33" scope="row">Bảo hành</th>
            <td colspan="2"><input type="text" name="baohanh" value="<?php echo $dong["Baohanh"]?>" /></td>
          </tr>
          <tr>
            <th height="33" scope="row">Tình trạng</th>
            <td colspan="2"><select name="tinhtrang" >
            <?php if($dong["Tinhtrang"]=="Mới 100%"){?>
               		 <option selected="selected">Mới 100%</option>
                	 <option>Mới 99%</option>
               		 <option>Cũ</option>
            <?php }else if($dong["Tinhtrang"]=="Mới 99%"){?>
           		 	<option >Mới 100%</option>
                	<option selected="selected">Mới 99%</option>
               		<option>Cũ</option>
             <?php }else{?>  
             		<option >Mới 100%</option>
                	<option>Mới 99%</option>
               		<option selected="selected">Cũ</option> 
              <?php }?> 	
            </select></td>
          </tr>
          <tr>
            <th height="33" scope="row">Trạng thái</th>
            <td colspan="2"><select name="trangthai" >
            <?php if( $dong["Trangthai"=="Còn hàng"]){?>
            <option selected="selected">Còn hàng</option>
            <option>Hết hàng</option>
            <?php }else{?>
            	<option>Còn hàng</option>
            	<option  selected="selected">Hết hàng</option>
            <?php }?>
            </select></td>
          </tr>
          <tr>
            <th height="33" scope="row">Giá</th>
            <td colspan="2"><input type="text" name="gia" value="<?php echo $dong["Gia"]?>"></td>
          </tr>
          <tr>
            <th height="33" scope="row">Hình ảnh</th>
            <td colspan="2"><img src="../uploads/<?php
              echo $dong['Hinhanh']?>"  width="60px"><input type="file" name="hinhanh"></td>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <td width="271">
              <input type="submit" name="sua" class="button" value="     Sửa     ">
              
                <input type="reset" name="reset" class="button" value="      Xóa     ">
                 <input type="button" onclick="window.location='index.php?quanly=chitietpk&ac=lietke'" name="quaylai" class="button" value="      Quay lại     ">
            </td>
            <td width="297">&nbsp;</td>
          </tr>
        </table>
</form>
  </div>
</div>

