<?php
$id='';
if (!empty($_GET)) {
    # code...
    if (isset($_GET['id'])) {
        # code...
        $id = $_GET['id'];
    }
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
										
										<div class="input-seach">
											<input type="text" name="s" id="" class="form-control">
											<button type="submit" class="btn-search-pro"><i class="fa fa-search"></i></button>
										</div>
									
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
										<span></span>
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
								<li>
									<a href="adminview.php">Sản phẩm</a>
								</li>
								<li class="current-menu-item"><a href="#">Thêm sản phẩm</a></li>
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
						<form class="" action="inputproduct.php" method="post">
							<div class="form-group">
								<label for="usr">Name of product : </label>
								<input required="true" type="text" name="proname" class="form-control" id="usr">
							</div>
							 <div class="form-group">
								<label for="image">Url image :</label>
								<input required="true" type="text" name="url" class="form-control" id="image">
							</div>
							 <div class="form-group">
								<label for="usr">Price:</label>
								<input required="true" type="text" name="price" class="form-control" id="price">
							</div>
							<div class="form-group">
								<label for="installment">Installment :</label>
								<input required="true" type="text" name="installment" class="form-control" id="installment" placeholder="%">
                            </div>
                            <div class="form-group">
								<label for="installment">Id :</label>
								<input required="true" type="text" name="proid" class="form-control" id="id" value="<?=$id?>" placeholder="id" readonly >
							</div>
                            <br>
                            



                            <button class="btn btn-success" type="submit">Add</button>
                            <br>
						</div>
                        </form>
                        <br>
                        <br>
				</div>
			</div>
			</div>
			<footer>
				
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
