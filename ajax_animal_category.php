<?php
require_once 'admin/connect.php';
$categoryId = $_GET['categoryId'];
if ($categoryId == -1) {
    $result = mysqli_query($con, 'select * from db_animal');
} else {
    $result = mysqli_query($con, 'select * from db_animal where category_id = ' . $categoryId);
}
$products = array();
while ($product = mysqli_fetch_array($result)) {
    array_push($products, $product);
}
echo json_encode($products);