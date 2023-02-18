<?php
include "../include/Header.php";


//echo "<pre>";
//print_r($_POST);
//print_r($_FILES);

if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $info = $_POST['info'];
    $price = $_POST['price'];
    $count = $_POST['count'];

    $picname = time().$_FILES['pic']['name'];
    $pictmp = $_FILES['pic']['tmp_name'];
    move_uploaded_file($pictmp,"../assets/pics/bijoux/$picname");

    $insert_new_product = $connect->query("INSERT INTO products (name,info,price,pic,count) VALUES  ('$name','$info','$price','$picname','$count')");
    if ($insert_new_product){
        header("location:Accueil.php");
    }else{
        echo 'il y a quelque chose qui cloche';
    }


}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>


<form action="" method="POST" enctype="multipart/form-data" class="col-6 mt-4" style="margin: auto">

    <h2 style="text-align: center">Insert Nouveau Produit</h2>

    <div class="group log-input">
        <label for="name">nome de produit : </label>
        <input id="name" type="text" name="name">
    </div>

    <div class="group log-input">
        <label for="info">info de produit : </label>
        <textarea id="info" type="text" name="info"></textarea>
    </div>

    <div class="group log-input">
        <label for="price">prix de produit : </label>
        <input id="price" type="text" name="price">
    </div>

    <div class="group log-input">
        <label for="pic">pic. : </label>
        <input id="pic" type="file" name="pic">
    </div>

    <div class="group log-input">
        <label for="count">nombre d'article : </label>
        <input id="count" type="number" name="count" value="1">
    </div>

    <button type="submit" name="submit" value="ok" class="btn btn-outline-secondary"> ajouter le produit </button>

</form>

<div class="row">
      <?php
         include('../include/footer.php');       
       ?>
    </div>

</body>
</html>
