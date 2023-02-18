<?php
// Conection je vien decouvert plus facile context a memoriser
// version mon decouvert mysqli_connect
$connect = mysqli_connect('localhost', 'root', 'root', 'Anneaux');

// version ecole
// $connect = new PDO('mysql:host=localhost;dbname=Anneaux;charset=utf8', 'root', 'root');

// version ecole shoper  les error
// try {
//     $connect = new PDO('mysql:host=localhost;dbname=Anneaux;charset=utf8', 'root', 'root');
//   } catch (Exception $e) {
//            die('Erreur : ' . $e->getMessage());
//     }

//"هر موقع از سشن استفاده میکنیم باید حتما قبل از آن سشن استارت شود"
session_start();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../assets/css/my_css.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/pics/favicon.ico" />

</head>
<body>



<div id="main" class="container-fluid" >
<!-- class="img-fluid" barayeh pic responsive :touyeh pic accueil et logo estefadeh cardam-->
<img id="logo-main" src="../assets/pics/banniere-site-anneaux.gif" class="img-fluid">
    <nav class="nav my_nav" >
        <a class="nav-link" href="Accueil.php">Accueil</a>
        <a class="nav-link" href="Products.php">Bijoux</a>

        <?php if (!isset($_SESSION['username'])) :?>
        <a class="nav-link" href="Login.php">Login</a>
        <?php endif; ?>

        <?php if (!isset($_SESSION['username'])) :?>
        <a class="nav-link" href="Inscription.php">Inscription</a>
        <?php endif; ?>

        <?php if (isset($_SESSION['admin'])) :?>
        <a class="nav-link" href="Manage.php">Admin</a>
        <?php endif; ?>

        <?php if (isset($_SESSION['username'])) : ?>
            <a class="nav-link" href="Logout.php">LogOut</a>
        <?php endif; ?>
    </nav>
    <!-- chetori dokme panier= sabad kharid khoshgel ezafe konam va koja? -->
    <br>
                <!-- <div background="">
                <a Panier.php> <font size="4" id="panierTxt">Votre panier</font></a>
                    <button id="btnTotal" onclick="scrollToRecap()">0€ <img src="../assets/pics/panier.png" alt="Panier" width="20" height="20"></button>
                </div> -->
 </div>







 