<?php
//include "../include/Header.php";
session_start();
//echo 'update';
// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);

if (isset($_post['submit'])) {

    $product_id = $_GET['product_id'];
    echo  $product_id;
    /*
    $name = $_POST['name'];
    $info = $_POST['info'];
    $design = $_POST['design'];
    $price = $_POST['price'];
    $count = $_POST['count'];

    //    in pic marboot b pic ghabliye mahsool ast
    $pic = $connect->query("SELECT pic FROM products WHERE id = $product_id")->fetch_assoc()['pic'];

    print_r($pic);


    //    if baraye new pic ast va else baraye pic ghabli ast

    if ($_FILES['pic']['name'] != null) {
        $picname = time() . $_FILES['pic']['name'];
        $pictmp = $_FILES['pic']['tmp_name'];
        move_uploaded_file($pictmp, "../assets/pics/$picname");
    } else {
        $picname = $pic;
    }
    echo 'test1';
    $update = $connect->query("UPDATE products SET name='$name', info='$info', design='$design', price='$price', count='$count',pic ='$picname'  WHERE id='$product_id'");

    echo 'test2';
    if ($update) {
        header("location: ./pages/Products.php");
        exit;
    } else {
        echo 'il y a quelque chose qui cloche';
    }*/
}
