<h1>TRANG CHỦ</h1>
    <div class="row">
    <?php if (($_SESSION['quyen']==1) || ($_SESSION['quyen']==2)){?>
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                        <?php 
							$sql="select * from binhluan";
							$query=mysql_query($sql);
							$num=mysql_num_rows($query);
						?>
                            <div class="huge">Có <?php echo $num;?></div>
                            <div>Bình luận</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?quanly=binhluan&ac=lietke">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <?php 
							$sql="select * from nhanxet";
							$query=mysql_query($sql);
							$num=mysql_num_rows($query);
						?>
                        <div class="col-xs-9 text-right">
                            <div class="huge">Có <?php echo $num;?></div>
                            <div>Nhận xét sản phẩm</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?quanly=nhanxet&ac=lietke">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <?php }?>
        <?php if ($_SESSION['quyen']==1){?>
        <div class="col-md-3">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <?php 
							$sql="select * from donhang";
							$query=mysql_query($sql);
							$num=mysql_num_rows($query);
						?>
                        <div class="col-xs-9 text-right">
                            <div class="huge">Có <?php echo $num;?></div>
                            <div>Đơn hàng</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?quanly=hoadon&ac=lietke">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <?php }?>
        <div class="col-md-3">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">13</div>
                            <div>THỐNG KÊ BÁN HÀNG</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?quanly=thongke&ac=lietke">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
  