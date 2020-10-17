<?php
require_once 'admin/connect.php';
$detailId = $_GET['detailId'];
$result = mysqli_query($con, 'select * from db_animal where id = ' . $detailId);
$products = array();
while ($product = mysqli_fetch_array($result)) {
    array_push($products, $product);
}
echo json_encode($products);