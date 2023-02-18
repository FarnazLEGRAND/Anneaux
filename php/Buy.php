

//"اگر آرایه سشن خانه یوزرنیم مقدار نگرفت (هیزست نشد!)"

// if (!isset($_SESSION['username'])){
//     header("location:Accueil.php");
// }


<?php

$product_id = $_GET['product_id'];
session_start();

if (is_array($_SESSION['paniers'])){
    array_push($_SESSION['paniers'],$product_id);
}else{
    $_SESSION['paniers'] = [];
    array_push($_SESSION['paniers'],$product_id);
}
header('location:../pages/Products.php');



print_r($_SESSION);
