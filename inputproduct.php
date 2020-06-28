<?php
require_once ('dbhelper.php');
if (!empty($_POST)) {
  // code...
  $sql=$proid=$proname = $url=$price=$installment='';
  if (isset($_POST['proname'])) {
    // code...
    $proname =$_POST['proname'];
  }
  if (isset($_POST['url'])) {
    // code...
    $url =$_POST['url'];
  }
  if (isset($_POST['price'])) {
    // code...
    $price = $_POST['price'];
  }
  if (isset($_POST['installment'])) {
    // code...
    $installment =$_POST['installment'];
  }
  if (isset($_POST['proid'])) {
    // code...
    $proid =$_POST['proid'];
  }
  require_once ('getProduct.php');

$ischeck = false;
foreach ($proList as $product) {
  # code...
  if ($product['id']==$proid) {
    $sql = 'update product set name ="'.$proname.'" , linkImg = "'.$url.'" , price="'.$price.'" , installment = "'.$installment.'" where id = "'.$proid.'" ';
    $ischeck = true;
  
  }
}
if (!$ischeck) {
  # code...
  $sql = 'insert into product(name, linkImg, price, installment) values ("'.$proname.'","'.$url.'","'.$price.'","'.$installment.'") ';

}
execute($sql);
}
header('Location: adminview.php ');
die();

 ?>
