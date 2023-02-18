<?php
include "../include/Header.php";


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
    <title>Accueil</title>
</head>
<body>



  
<div style="text-align: center;margin-top: 4em;"> <marquee behavior="front" direction="" style="color:#EF465A; margin-top:-200px" > <center><h2> Bienvenue chez Anneaux!
      <br><?php if (isset($_SESSION['nom'])){echo $_SESSION['nom'];}?><br></h2></center></marquee>
   <!-- style="margin-top:-50px"  style pour type marquer shenavar-->
  
      <img src="../assets/pics/anneauxbag.gif" class="img-fluid" alt="..." >
      
   
      <h1>Bienvenue dans la Capitale verte de l'Europe !</h1>
      Si tu aimes le vélo, bienvenue chez Anneaux! 
      <br>  tous les transports de colis ne se feront qu'avec ECOVELO.
      <br>
      <br>
      <h1>Vendez en ligne sans frais cachés</h1>
      Le puissant créateur e-commerce d'Anneaux dispose de tout 
      <br> ce dont vous avez besoin pour lancer, gérer et développer 
      <br> votre activité en ligne sans prélever une partie de vos bénéfices.
      <br>
      <br>
      <h1>Vente de bijoux fait-main !</h1>
      Colliers, bracelets, boucles d’oreilles,… 
      <br> Retrouvez les propriétés des pierres naturelles utilisées, 
      <br>lors de la confection de vos bijoux. 
      <br>
      <br>Si fabriquer vos créations à la main est devenue votre passion depuis un
      <br> certain temps et que vos copines et copains sont de véritables fans de vos bijoux, 
      <br> l'heure est peut-être venue d'apprendre à les vendre !
<br><br>
      Boutique en ligne, places de marché, réseaux sociaux : 
      Internet recèle de lieux où vendre ses bijoux fait-main.
      <br><br>

<!--esme oun user minviser vaghtui connaict mishe -->
    <div class="row">
      <?php
         include('../include/footer.php');       
       ?>
    </div>

</body>
</html>
