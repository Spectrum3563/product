<?php
require_once ('dbhelper.php');
$proList = [];
$sql = "Select * from product";
$proList = execute_result($sql);
 ?>
