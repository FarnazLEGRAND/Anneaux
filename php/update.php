<?php
include "../include/Header.php";

//echo 'update';

//echo "<pre>";
//print_r($_POST);
//print_r($_FILES);

if (isset($_POST['name'])) {

    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $info = $_POST['info'];
    $price = $_POST['price'];
    $count = $_POST['count'];

//    in pic marboot b pic ghabliye mahsool ast
    $pic = $connect->query("SELECT pic FROM products WHERE id = $product_id")->fetch_assoc()['pic'];

//    print_r($pic);


//    if baraye new pic ast va else baraye pic ghabli ast

    if ($_FILES['pic']['name'] != null) {
        $picname = time() . $_FILES['pic']['name'];
        $pictmp = $_FILES['pic']['tmp_name'];
        move_uploaded_file($pictmp, "../assets/pics/$picname");
    } else {
        $picname = $pic;
    }

    $update = $connect->query("UPDATE products SET name='$name' , info='$info' ,price='$price', count='$count',pic ='$picname'  WHERE id='$product_id'");

    if ($update) {
        header("location:../pages/Products.php");
    } else {
        echo 'il y a quelque chose qui cloche';
    }


}

