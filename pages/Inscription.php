<?php
include "../include/Header.php";

// print_r($_SESSION);
// echo "<pre>";
// print_r($_POST);
if (isset($_POST['username'])) {

    $nom = $_POST['nom'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    if ($password != $password2) {
        echo 'mot de passe erroné';
    } else {
        // $insert = $connect->exec("INSERT INTO client (nom,username,password,phone,email) Values ('$nom','$username','$password','$phone','$email')"); 
        $insert = $connect->query("INSERT INTO `client` (`nom`,`username`,`password`,`phone`,`email`) Values ('$nom','$username','$password','$phone','$email')");
        if ($insert){
            $_SESSION['username'] = $username;
            $_SESSION['nom'] = $nom;
            header("location:Accueil.php");
        }

    }

}

?>

<section>

    <div style="text-align: center;margin-top: 4em;">
        <h2>Inscrivez - vous</h2>
        <p>Vous êtes déja membre? </p>   
        <p><a href="Login.php" >Se connecter</a></p>
    </div>

    <form action="" method="post" class="log-form">

        <div class="group log-input">
            <input type="text" id="nom" name="nom" placeholder="saisir votre nom et prénom">
        </div>

        <div class="group log-input">
            <input type="text" id="username" name="username" placeholder="saisir votre idantifient">
        </div>

        <div class="group log-input">
            <input type="password" id="password" name="password" placeholder="saisir votre mot de passe">
        </div>

        <div class="group log-input">
            <input type="password" id="password2" name="password2" placeholder="confirmer votre mot de passe">
        </div>

        <div class="group log-input">
            <input type="email" id="email" name="email" placeholder="saisir votre adresse mail">
        </div>

        <div class="group log-input">
            <input type="text" id="phone" name="phone" placeholder="saisir votre numero de téléphone">
        </div>

        <button class="btn btn-outline-secondary"> Enregistrer</button>

    </form>


</section>
    <div class="row">
      <?php
         include('../include/footer.php');       
       ?>
    </div>
</body>
</html>
