<?php
$id =[];
if (!empty($_POST)) {
  // code...
  if (isset($_POST['id'])) {
    // code...
    setcookie('id',$_POST['id'],time()+60*60,'/');
  }
}
if (isset($_COOKIE['id'])) {
  // code...
  $id[] = $_COOKIE['id'];
}
 ?>
 <!DOCTYPE html>
 <html lang="vi">
 	<head>
 		<meta charset="utf-8">
 		<meta http-equiv="X-UA-Compatible" content="IE=edge">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<title>Product</title>
 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i">
 		<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
 		<link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
 		<link rel="stylesheet" href="css/main.css">
 		<link rel="stylesheet" href="css/responsive.css">

 	</head>
 	<body>
 		<div id="wallpaper">
 			<header>
 				<div class="top">
 					<div class="container">
 						<div class="row">
 							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
 								<p>Chào mừng đến với shop bán hàng!</p>
 							</div>
 							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
 								<div class="top-menu">
 									<ul>
 										<li><a href="#">Giỏ hàng</a></li>
 										<li><a href="#">Cửa hàng</a></li>
 										<li><a href="#">Tài khoản</a></li>
 										<li><a href="#">Liên hệ</a></li>
 									</ul>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 				<div class="main-header">
 					<div class="container">
 						<div class="row">
 							<div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-0 order-0">
 								<div class="logo">
 									<a href="#"><img src="images/logo.png" alt=""></a>
 									<h1>Website bán hàng</h1>
 								</div>
 							</div>
 							<div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 order-md-1 order-2">
 								<div class="form-seach-product">
 									<form action="/" method="GET" role="form">
 										<select name="" id="input" class="form-control" required="required">
 											<option value="">Chọn danh mục</option>
 											<option value="1">Điện thoại</option>
 											<option value="2">Máy tính bản</option>
 											<option value="3">Lap top</option>
 											<option value="4">Phụ kiện</option>
 										</select>
 										<div class="input-seach">
 											<input type="text" name="s" id="" class="form-control">
 											<button type="submit" class="btn-search-pro"><i class="fa fa-search"></i></button>
 										</div>
 										<div class="clear"></div>
 									</form>
 								</div>
 							</div>
 							<div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-2 order-1" style="text-align: right">
 								<a href="cart.php" class="icon-cart">
 									<div class="icon">
 										<i class="fa fa-shopping-cart" aria-hidden="true"> </i>
 										<span>3</span>
 									</div>
 									<div class="info-cart">
 										<p>Giỏ hàng</p>
 										<span>2.500.000đ</span>
 									</div>
 									<span class="clear"></span>
 								</a>
 							</div>
 						</div>
 					</div>
 				</div>
 				<div class="main-menu-header">
 					<div class="container">
 						<div id="nav-menu">
 							<ul>
 								<li ><a href="index.php">Trang chủ</a></li>
 								<li><a href="#">Giới thiệu</a></li>
 								<li>
 									<a href="#">Sản phẩm</a>
 									<ul>
 										<li><a href="#">Điện thoại</a></li>
 										<li><a href="#">Máy tính bảng</a></li>
 										<li><a href="#">Laptop</a></li>
 										<li><a href="#">Sản phẩm khác</a></li>
 									</ul>
 								</li>
 								<li class="current-menu-item"><a href="#">Thêm sản phẩm</a></li>
 								<li><a href="#">Tin tức</a></li>
 								<li><a href="#">Tuyển dụng</a></li>
 								<li><a href="#">Liên hệ</a></li>
 							</ul>
 							<div class="clear"></div>
 						</div>
 					</div>
 				</div>
 			</header>
      <div class="container">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h2 class="text-center"> Input Product's Detail Information</h2>
          </div>
          <div class="panel-body">

            <table class="table table-bordered">
              <thead>
                <tr>

                  <th>Tên sản phảm</th>
                  <th style="width:auto;height:auto">Hình ảnh</th>
                  <th>Giá 1 sản phẩm</th>
                  <th>Số lượng</th>

                </tr>
              </thead>
              <tbody>
                <?php
                require_once ('getProduct.php');
                foreach ($id as  $value) {
                  // code...
                  foreach ($proList as  $product) {
                    // code...
                    if ($value == $product['id']) {
                      // code...
                      echo '<tr>
                        <td>'.$product['name'].'</td>
                        <td> <img src="'.$product['linkImg'].'" alt="'.$product['name'].'"> </td>
                        <td>'.$product['price'].'</td>
                        <td><input type="number" name="" value="1"></td>
                      </tr>';
                    }
                  }
                }
                echo "</br>";
                echo "</br>";
                echo "</br>";
                echo "</br>";

                 ?>
                 <script type="text/javascript">
                 function clear(){
                    $.post('#', {
                     'id': a
                   }, function(data) {
                     alert(data)
                     location.reload()
                   })
                 }
                 </script>

              </tbody>
            </table>
            <button style="font-size:24px" >CLEAR<i class="fa fa-close" onclick="clear()"></i></button>
            <button style="font-size:24px" style="margin-top:40px;margin-bottom: 400px;">PAYMENT <i class="fa fa-cc-amex" ></i></button>

        </div>
      </div>
 			</div>
 			<footer>
 				<div class="container">
 					<div class="row">
 						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
 							<div class="box-footer info-contact">
 								<h3>Thông tin liên hệ</h3>
 								<div class="content-contact">
 									<p>Website chuyên cung cấp thiết bị điện tử hàng đầu Việt Nam</p>
 									<p>
 										<strong>Địa chỉ:</strong> blue sky
 									</p>
 									<p>
 										<strong>Email: </strong> Quadeptraicom@gmail.com
 									</p>
 									<p>
 										<strong>Điện thoại: </strong> 03xxxxxx
 									</p>

 								</div>
 							</div>
 						</div>
 						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
 							<div class="box-footer info-contact">
 								<h3>Thông tin khác</h3>
 								<div class="content-list">
 									<ul>
 										<li><a href="#"><i class="fa fa-angle-double-right"></i> Chính sách bảo mật</a></li>
 										<li><a href="#"><i class="fa fa-angle-double-right"></i> Chính sách đổi trả</a></li>
 										<li><a href="#"><i class="fa fa-angle-double-right"></i> Phí vẫn chuyển</a></li>
 										<li><a href="#"><i class="fa fa-angle-double-right"></i> Hướng dẫn thanh toán</a></li>
 										<li><a href="#"><i class="fa fa-angle-double-right"></i> Chương trình khuyến mãi</a></li>
 									</ul>
 								</div>
 							</div>
 						</div>
 						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
 							<div class="box-footer info-contact">
 								<h3>Form liên hệ</h3>
 								<div class="content-contact">
 									<form action="/" method="GET" role="form">
 										<div class="row">
 											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 												<input type="text" name="" id="" class="form-control" placeholder="Họ và Tên">
 											</div>
 											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
 												<input type="email" name="" id="" class="form-control" placeholder="Địa chỉ mail">
 											</div>
 											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
 												<input type="text" name="" id="" class="form-control" placeholder="Số điện thoại">
 											</div>
 											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 												<input type="text" name="" id="" class="form-control" placeholder="Tiêu đề">
 											</div>
 											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 												<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
 											</div>
 										</div>
 										<button type="submit" class="btn-contact">Liên hệ ngay</button>
 									</form>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 				<div class="copyright">
 					<p>Copyright © 2020 HKSHOP All Rights Reserved - Design by THIETKEWEB43.COM</p>
 				</div>
 			</footer>
 		</div>
 		<script src="libs/jquery-3.4.1.min.js"></script>
 		<script src="libs/bootstrap/js/bootstrap.min.js"></script>
 		<script src="js/main.js"></script>
 		<div id="fb-root"></div>
 		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>
 	</body>
 </html>
