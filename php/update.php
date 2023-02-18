<?php
// Conection je vien decouvert plus facile context a memoriser
// version mon decouvert mysqli_connect
$connect = mysqli_connect('localhost', 'root', 'root', 'Anneaux');

/
//"هر موقع از سشن استفاده میکنیم باید حتما قبل از آن سشن استارت شود"
session_start();
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../assets/css/my_css.css" rel="stylesheet">


</head>

<body>



    <div id="main" class="container-fluid">
        <!-- class="img-fluid" barayeh pic responsive :touyeh pic accueil et logo estefadeh cardam-->
        <img id="logo-main" src="../assets/pics/banniere-site-anneaux.gif" class="img-fluid">
        <nav class="nav my_nav">
            <a class="nav-link" href="Accueil.php">Accueil</a>
            <a class="nav-link" href="Products.php">Bijoux</a>

            <?php if (!isset($_SESSION['username'])) : ?>
                <a class="nav-link" href="Login.php">Login</a>
            <?php endif; ?>

            <?php if (!isset($_SESSION['username'])) : ?>
                <a class="nav-link" href="Inscription.php">Inscription</a>
            <?php endif; ?>

            <?php if (isset($_SESSION['admin'])) : ?>
                <a class="nav-link" href="Manage.php">Admin</a>
            <?php endif; ?>

            <?php if (isset($_SESSION['username'])) : ?>
                <a class="nav-link" href="Logout.php">LogOut</a>
            <?php endif; ?>

            <?php if (isset($_SESSION['username'])) : ?>
                <a class="nav-link" href="Panier.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg></a>
            <?php endif; ?>
        </nav>
      
    </div>
    <?php
    //session_start();
    if (isset($_POST["submit"])) {

        $product_id = $_GET['product_id'];
        $name = $_POST['name'];
        $info = $_POST['info'];
        $design = $_POST['design'];
        $price = $_POST['price'];
        $count = $_POST['count'];
        $filename = $_FILES['pic']['name'];

        $update = $connect->query("UPDATE products SET name= '$name',
        design = '$design',
        info = '$info',
        price = '$price',
        count = '$count',
        pic = '$filename'
         WHERE id= '$product_id'");

        if (!$update) {
            die("Echec de la requête : " . $connect->error);
        }
        echo "Mise à jour réussie";


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
    }
