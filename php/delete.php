<?php
include "../include/Header.php";


//echo 'delete';

$product_id = $_GET['product_id'];

$delete = $connect->query("DELETE FROM products WHERE id = $product_id");

if ($delete){
    header("location:../pages/Products.php");
}
