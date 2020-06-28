<?php
require_once ('getProduct.php');

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
                                <form action="" method="GET" role="form">

                                    <div class="input-seach">
                                        <input type="text" name="s" id="" class="form-control">
                                        <button type="submit" class="btn-search-pro"><i
                                                class="fa fa-search"></i></button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-2 order-1"
                            style="text-align: right">
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
                            <li><a href="index.php">Trang chủ</a></li>
                            <li class="current-menu-item">
                                <a href="adminview.php">Sản phẩm</a>
                            </li>
                            <li ><a href="adminInput.php">Thêm sản phẩm</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            
        </header>
        <div class="container">
            <div class="content-product-box">
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên SP</th>
                                <th>Hình ảnh</th>
                                <th>Giá</th>
                                <th>trả góp</th>
                                <th width="60px"></th>
                                <th width="60px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
if (isset($_GET['s']) && $_GET['s'] != '') {
	$sql = 'select * from book where bookName like "%'.$_GET['s'].'%"';
} else {
	$sql = 'select * from book';
}

$index = 0;
foreach ($proList as $product) {
	echo '<tr>
			<td>'.(++$index).'</td>
			<td>'.$product['name'].'</td>
			<td><img src="'.$product['linkImg'].'" alt=""></td>
			<td>'.$product['price'].'</td>
            <td>'.$product['installment'].'%</td>
			<td><button class="btn btn-warning" onclick=\'window.open("adminInput.php?id='.$product['id'].'","_self")\'>Edit</button></td>
			<td><button class="btn btn-danger" onclick="deletePro('.$product['id'].')">Delete</button></td>
		</tr>';
}
?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <footer>

        <div class="copyright">
            <p>Copyright © 2020 HKSHOP All Rights Reserved - Design by THIETKEWEB43.COM</p>
        </div>
    </footer>
    <script type="text/javascript">
		function deletePro(id) {
			option = confirm('Bạn có muốn xoá sản phẩm này không')
			if(!option) {
				return;
			}

			console.log(id)
			$.post('deleteProduct.php', {
				'id': id
			}, function(data) {
				alert(data)
				location.reload()
			})
		}
	</script>
    </div>
    <script src="libs/jquery-3.4.1.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0">
    </script>
</body>

</html>