<div class="col-md-2">
     <div class="panel-group" id="accordion">
		<?php if($_SESSION['quyen']==1){?>
        	<div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="index.php"><span class="glyphicon glyphicon-th">
                        </span>Trang chủ</a>
                    </h4>
                </div>
     		</div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                        </span>Quản trị viên</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                            <?php 
								$sql="select * from quantri";
								$query=mysql_query($sql);
								$num=mysql_num_rows($query);
							?>
                                <td>
                                    <span class="glyphicon glyphicon-user text-primary"></span><a href="index.php?quanly=quantrivien&ac=lietke">Danh sách quản trị <span class="label label-warning"><?php echo $num;?></span></a>
                                </td>
                            </tr>
                            <tr>
                              <?php 
								$sql="select * from thanhvien";
								$query=mysql_query($sql);
								$num=mysql_num_rows($query);
								?>
                                <td>
                                    <span class="glyphicon glyphicon-user text-success"></span><a href="index.php?quanly=thanhvien&ac=lietke">Danh sách thành viên   <span class="label label-success"><?php echo $num;?></span></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                        </span>Sản phấm</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                 <?php 
									$sql="select * from tbldongsanpham";
									$query=mysql_query($sql);
									$num=mysql_num_rows($query);
								?>
                                    <a href="index.php?quanly=Dongsp&ac=lietke">Danh mục sản phẩm</a> <span class="label label-success"><?php echo $num;?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  <?php 
									$sql="select * from chitietsanpham";
									$query=mysql_query($sql);
									$num=mysql_num_rows($query);
								?>
                                    <a href="index.php?quanly=chitietsp&ac=lietke">Chi tiết sản phẩm</a><span class="label label-success"><?php echo $num;?></span>
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <a href="index.php?quanly=binhluan&ac=lietke">Bình luận sản phẩm</a><span class="label label-success"></span>
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <a href="index.php?quanly=nhanxet&ac=lietke">Nhận xét sản phẩm</a><span class="label label-success"></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                        </span>Phụ kiện</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                 <?php 
									$sql="select * from loaiphukien";
									$query=mysql_query($sql);
									$num=mysql_num_rows($query);
								?>
                                    <a href="index.php?quanly=Loaiphukien&ac=lietke">Danh mục phụ kiện</a><span class="label label-success"><?php echo $num;?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  <?php 
									$sql="select * from chitietphukien";
									$query=mysql_query($sql);
									$num=mysql_num_rows($query);
								?>
                                    <a href="index.php?quanly=chitietpk&ac=lietke">Chi tiết phụ kiện</a> <span class="label label-info"><?php echo $num;?></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                        </span>Tin tức</a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                 <?php 
									$sql="select * from tbltintuc";
									$query=mysql_query($sql);
									$num=mysql_num_rows($query);
								?>
                                    <span class="glyphicon glyphicon-usd"></span><a href="index.php?quanly=Tintuc&ac=lietke">Danh mục tin tức</a><span class="label label-info"><?php echo $num;?></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
             <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#4"><span class="glyphicon glyphicon-th">
                        </span>Hóa đơn</a>
                    </h4>
                </div>
                <div id="4" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                  <?php 
									$sql="select * from donhang";
									$query=mysql_query($sql);
									$num=mysql_num_rows($query);
								?>
                                    <a href="index.php?quanly=hoadon&ac=lietke">Danh mục hóa đơn</a> <span class="label label-success"><?php echo $num;?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="index.php?quanly=chitietdonhang&ac=lietke">Chi tiết đơn hàng</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
           	  <div class="panel panel-default">
			 <?php 
                $sql="select * from quangcao";
                $query=mysql_query($sql);
                $num=mysql_num_rows($query);
            ?>
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="index.php?quanly=quangcao&ac=lietke"><span class="glyphicon glyphicon-th">
                        
                        </span>Quảng cáo  <span class="label label-warning"><?php echo $num;?></span></a>
                    </h4>
                </div>
             </div>
        <?php }else if ($_SESSION['quyen']==2){?>
        		 <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="index.php"><span class="glyphicon glyphicon-th">
                        </span>Trang chủ</a>
                    </h4>
                </div>
             </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                        </span>Sản phấm</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                 <?php 
									$sql="select * from tbldongsanpham";
									$query=mysql_query($sql);
									$num=mysql_num_rows($query);
								?>
                                    <a href="index.php?quanly=Dongsp&ac=lietke">Danh mục sản phẩm</a> <span class="label label-success"><?php echo $num;?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  <?php 
									$sql="select * from chitietsanpham";
									$query=mysql_query($sql);
									$num=mysql_num_rows($query);
								?>
                                    <a href="index.php?quanly=chitietsp&ac=lietke">Chi tiết sản phẩm</a><span class="label label-success"><?php echo $num;?></span>
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <a href="index.php?quanly=binhluan&ac=lietke">Bình luận sản phẩm</a><span class="label label-success"></span>
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <a href="index.php?quanly=nhanxet&ac=lietke">Nhận xét sản phẩm</a><span class="label label-success"></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        <?php }else if ($_SESSION['quyen']==3){?>
        		 <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="index.php"><span class="glyphicon glyphicon-th">
                        </span>Trang chủ</a>
                    </h4>
                </div>
             </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                        </span>Phụ kiện</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                 <?php 
									$sql="select * from loaiphukien";
									$query=mysql_query($sql);
									$num=mysql_num_rows($query);
								?>
                                    <a href="index.php?quanly=Loaiphukien&ac=lietke">Danh mục phụ kiện</a><span class="label label-success"><?php echo $num;?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  <?php 
									$sql="select * from chitietphukien";
									$query=mysql_query($sql);
									$num=mysql_num_rows($query);
								?>
                                    <a href="index.php?quanly=chitietpk&ac=lietke">Chi tiết phụ kiện</a> <span class="label label-info"><?php echo $num;?></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
     
        <?php }else if ($_SESSION['quyen']==4){?>
        		 <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="index.php"><span class="glyphicon glyphicon-th">
                        </span>Trang chủ</a>
                    </h4>
                </div>
             </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                        </span>Tin tức</a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                 <?php 
									$sql="select * from tbltintuc";
									$query=mysql_query($sql);
									$num=mysql_num_rows($query);
								?>
                                    <span class="glyphicon glyphicon-usd"></span><a href="index.php?quanly=Tintuc&ac=lietke">Danh mục tin tức</a><span class="label label-info"><?php echo $num;?></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
          
          
        <?php }else if ($_SESSION['quyen']==5){?>
        		 <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="index.php"><span class="glyphicon glyphicon-th">
                        </span>Trang chủ</a>
                    </h4>
                </div>
             </div>
             <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#4"><span class="glyphicon glyphicon-th">
                        </span>Hóa đơn</a>
                    </h4>
                </div>
                <div id="4" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                  <?php 
									$sql="select * from donhang";
									$query=mysql_query($sql);
									$num=mysql_num_rows($query);
								?>
                                    <a href="index.php?quanly=hoadon&ac=lietke">Danh mục hóa đơn</a> <span class="label label-success"><?php echo $num;?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="index.php?quanly=chitietdonhang&ac=lietke">Chi tiết đơn hàng</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        <?php }else if ($_SESSION['quyen']==6){?>
        		 <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="index.php"><span class="glyphicon glyphicon-th">
                        </span>Trang chủ</a>
                    </h4>
                </div>
             </div>
           	  <div class="panel panel-default">
			 <?php 
                $sql="select * from quangcao";
                $query=mysql_query($sql);
                $num=mysql_num_rows($query);
            ?>
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="index.php?quanly=quangcao&ac=lietke"><span class="glyphicon glyphicon-th">
                        
                        </span>Quảng cáo  <span class="label label-warning"><?php echo $num;?></span></a>
                    </h4>
                </div>
             </div>
        <?php }?>
        </div>
</div>

  
