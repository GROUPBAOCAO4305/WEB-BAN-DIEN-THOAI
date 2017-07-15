# PHÂN TÍCH VÀ THIẾT KẾ HỆ THỐNG

## Đặc tả hệ thống
   VNBlackBerry là doanh nghiệp chuyên phân phối, buôn bán các thiết bị di động (bao gồm điện thoại, máy tính bản, phụ kiện…) của hãng BlackBerry. 
   Website bán hàng trực tuyến của VNBlackBerry là loại hình kinh doanh qua mạng bằng cách xây dựng một trang web bán hàng để mọi người có thể vào đó xem các sản phẩm mà VNBlackBerry phân phối, có thể lựa chọn sản phẩm để mua hàng. Với trang web bán hàng trực tuyến, nhà kinh doanh sẽ đưa thông tin của các thiết bị di động lên trang web của mình. Việc đưa thông tin lên cũng phải theo một trật tự hợp lý, đảm bảo tính thẩm mỹ, khoa học. Cụ thể là các thông tin về sản phẩm của hãng BlackBerry mà nhà kinh doanh đang kinh doanh, các tin tức công nghệ, tông tin về danh nghiệp, cơ chế mua bán, bảo hành, chăm sóc khách hàng... Các thông tin về sản phẩm bao gồm: tên sản phẩm, cấu hình, hình ảnh, chức năng, giá cả, tình trạng hàng trong kho… Người quản trị website cũng có quyền thêm mới, sửa đổi  dữ liệu hay xóa các mặt hàng sản phẩm. Mọi sự thay đổi đều được ghi nhận trong cơ sở dữ liệu để đến với người sử dụng.
   Với khách vãng lai (guest) thì được xem website, xem thông tin về các loại sản phẩm, tin tức.. nhưng không có quyền mua hàng trực tuyến. Để mua hàng hay lựa chọn các sản phẩm mình thích, người dùng phải đăng kí là thành viên của website. Khi đã là thành viên của website, người dùng đăng nhập theo tài khoản và mật khẩu đã đăng ký. Khi đó người dùng có quyền mua hàng. Với các mặt hàng, người dùng có quyền chọn mua hàng, đưa nó vào trong giỏ hàng của mình theo số lượng  các mặt hàng, đồng thời cũng có thể xóa sản phẩm trong giỏ hàng. Người dùng có thể thanh toán qua thẻ tín dụng bằng cách đưa thông tin về loại thẻ tín dụng của bạn (Visa, Master Card,…) như: mã số thẻ, mã bảo mật, thời hạn thẻ. Ngoài ra bạn cũng phải đưa các thông tin về địa chỉ giao hàng, số điện thoại của mình để tiện cho việc giao hàng.
   Khi có một đơn đặt hàng, người quản lý sẽ đối chiếu thông số về loại thẻ tín dụng thanh toán xem có đúng không. Nếu đúng thì người quản lý sẽ nhận phiếu chuyển khoản và giao hàng cho người đặt hàng. Như vậy quá trình mua bán đã hoàn thành.
   Ngoài ra, website còn dùng là nơi quảng bá cho cửa hàng điện thoại VNBlackBerry, đồng thời nhận các ý kiến đóng góp của người xem để website và cửa hàng ngày càng hoàn thiện hơn.
   Website còn là diễn đàn trao đổi kinh nghiệm về cách sử dụng điện thoại BlackBerry, các phần mềm, thủ thuật, sự kiện…
   ## Biểu đồ phân rã chắc năng hệ thống
   ![](https://uphinhnhanh.com/images/2017/07/15/1439f2.png)
   
   ## Biểu đồ ngữ cảnh
   ![](https://uphinhnhanh.com/images/2017/07/15/25be4a.png)
   
   ## Biểu đồ luồn dữ liệu mức đỉnh
   ![](https://uphinhnhanh.com/images/2017/07/15/3e47ef.png)
   
   ## Biểu đồ luồng dữ liệu mức 1 chức năng giao dịch
   ![](https://uphinhnhanh.com/images/2017/07/15/4eed5c.png)
   
   ## Biểu đồ luồng dữ liệu mức một chức năng quản trị
   ![](https://uphinhnhanh.com/images/2017/07/15/5.png)
   
   ## Biểu đồ luồng dữ liệu chức năng tìm kiếm
   ![](https://uphinhnhanh.com/images/2017/07/15/62bcf9.png)
