<?php
include "../include/Header.php";
// echo "<pre>";
// print_r($_POST);
if (isset($_POST['username'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin'){
        $_SESSION['username'] = $username;
        $_SESSION['admin'] = 'ok';
        header("location:Accueil.php");
        return;
    }

    $select_client = $connect->query("SELECT * FROM client WHERE username = '$username' AND password='$password'")->fetch_assoc();
    if ($select_client){
        $_SESSION['username'] = $username;
        $_SESSION['nom'] = $select_client['nom'];
        header("location:Accueil.php");
        return;
    }else{
        echo "username ou mot de passe erroné";
        
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../assets/css/my_css.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>

<div style="text-align: center;margin-top: 4em;">
    <h2>Se connecter</h2>
    <p>Veuillez saisir vos informations pour vous connecter à votre compte</p>
    <p>Pas encore membre chez Anneaux?<br><u><a href="Inscription.php">Inscrivez Vous</a></u></p>

</div>

<form action="" method="POST" class="log-form">

    <div class="group log-input">
        <input type="text" id="username" name="username" placeholder="saisir votre idantifient">
    </div>

    <div class="group log-input">
        <input type="password" id="password" name="password" placeholder="saisir votre mot de passe">
    </div>

    <button type="submit" name="sub" value="ok" class="btn btn-outline-secondary"> Login</button>

</form>
    <div class="row">
      <?php
         include('../include/footer.php');       
       ?>
    </div>

</body>
</html>
