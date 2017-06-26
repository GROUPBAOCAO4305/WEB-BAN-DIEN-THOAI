<?php 
	$sql="select * from quantri where id='$_GET[id]'";
	$query=mysql_query($sql);
	$dong=mysql_fetch_array($query);
?>
<div class="panel panel-default">
      <div class="panel-heading"><img src="image/BlackBerry.png">THAY ĐỔI QUYỀN QUẢN TRỊ</div>
  <div class="panel-body">
          <form  action="modules/quantrivien/xulysuaquyen.php?id=<?php echo $dong["id"]?>" method="post"> 
            <table>
                	<tr>
                    	<td colspan="2"> SỬA QUYỀN QUẢN TRỊ</td>
                    </tr>
                     <tr>
                    	<td><label>*</label><span class="label label-primary">Quyền</span></td>
                        <td>
                        	<select name="suaquyen">
                            <?php if($dong["Quyen"]==1){?>
                            	<option selected="selected">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <?php }else if($dong["Quyen"]==2){?>
                                <option selected="selected">2</option>
                                <option>1</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <?php }else if($dong["Quyen"]==3){?>
                                <option selected="selected">3</option>
                                <option>1</option>
                                <option>2</option>

                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <?php }else if($dong["Quyen"]==4){?>
                                <option selected="selected">4</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>5</option>
                                <option>6</option>
                                <?php }else if($dong["Quyen"]==5){?>
                                <option selected="selected">5</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>6</option>
                                <?php }else  {?>
                                <option selected="selected">6</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>6</option>
                                <?php }?>
                        	</select>
                        </td>
                    </tr>
                </table>
                 <div style="margin-top:10px;">
            <button class="btn btn-primary" type="submit" name="sua" style="margin:5px;" >Sửa</button><button class="btn btn-primary" type="button" onClick="window.location='index.php?quanly=quantrivien&ac=lietke'"  style="margin:5px;">Quay về</button></div>
</form>
  </div>
</div>