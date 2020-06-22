<?php
require_once ('dbhelper.php');
if (!empty($_POST)) {
  // code...
  $proname = $url=$price=$installment='';
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
  $sql = "insert into product(name,linkImg,price,installment) values ('$proname','$url','$price','$installment')";
  execute($sql);
}
header('Location: index.php ');
die();

 ?>
