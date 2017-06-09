<?php 
	$sql="select * from quangcao where loai='Slide'";
	$query=mysql_query($sql);
?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-left:-11px;margin-right:-11px; ">
	 <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  	<div class="item active">
      <a href="#"><img src="image/slide/TieuAnh1.jpg" alt="..." width="100%" height="200px;"></a>
       <div class="carousel-caption">
        ....
      </div>
    </div>
    <?php while ($dong=mysql_fetch_array($query)){?>
     <div class="item">
      <a href="<?php echo $dong["diachi"]?>"><img src="uploads/<?php echo $dong["hinhanh"]?>" alt="..." width="100%" height="200px;"></a>
       <div class="carousel-caption">
        ...
      </div>
    </div>
    <?php }?>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>