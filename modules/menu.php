<div id="menu1">
            <nav class="navbar navbar-inverse" role="navigation">
              <a class="navbar-brand" href="index.php">BlackberryVN.com</a>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?xem=Tintuc">Tin tức</a></li>
                <li><a href="index.php?xem=muahang">Mua hàng</a></li>
                 <li><a href="index.php?xem=baohanh">Bảo hành</a></li>
                 <li><a href="index.php?xem=lienhe">Liên hệ</a></li>
              </ul>
            </div>
        </nav>
    </div> 
<script language="javascript">
    $('.dropdown-toggle').dropdown();
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
      });
</script>
<script>
	function batloi()
	{
	  if ( document.form.dn.value=="")
	   {
		alert( "Vui lòng nhập tên đăng nhập");
		document.form.dn.focus( );
		return false;
	   }

		If ( document.form.pa.value=="")
		 {
			alert( "Vui lòng nhập password");
			document.form.pa.focus( );
			return false;
		 }
	   return true;
	}

</script>