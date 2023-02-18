<?php
include "../include/Header.php";

// print_r($_SESSION['paniers']);

$products = [];
foreach ($_SESSION['paniers'] as $item) {
    $product = $connect->query("SELECT pic,name,price FROM products WHERE id = '$item'")->fetch_assoc();
    array_push($products, $product);
}

// print_r($products)

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Panier</title>
</head>
<body>


<section class="h-100">

    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black" id="recapTxt">Récapitulatif de votre commande:</h3>
                    <div>
                        <p class="mb-0"><span class="text-muted">Trier par : </span> <a href="#!" class="text-body">prix<i
                                        class="fas fa-angle-down mt-1"></i></a></p>
                    </div>
                </div>

                <?php foreach ($products as $product) : ?>
                    <div class="card rounded-3 mb-4" style="background-color: #eee;">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="../assets/pics/bijoux/<?php echo $product['pic']?>" class="card-img-top" width="100%"
                                         height="150px">
                                    <!-- <img
                                      src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                      class="img-fluid rounded-3" alt="Cotton T-shirt"> -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <input name="product_id" value="" type="hidden">
                                    <input id="name" type="text" name="name" value="">
                                    <p class="lead fw-normal mb-2"><?php echo $product['name']?></p> 
                                    
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                    <button class="btn btn-link px-2">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <input id="" min="0" name="quantity" value="1" type="number"
                                           class="form-control form-control-sm"/>

                                    <button class="btn btn-link px-2">
                                        <i class="fas fa-plus"> </i>
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1"><br>
                                    <li class="list-group-item"></li>
                                    <h5 class="mb-0"><?php echo $product['price']?> &euro;</h5>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                    <a href="#!" class="text-danger" href="../php/delete.php?product_id=<?php echo $product['id']?>"><i class='fas fa-trash-alt'> </i></a>
                             

                                </div>
                               
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="card mb-4">
                    <div class="card-body p-4 d-flex flex-row">
                        <div class="form-outline flex-fill">
                            <input type="text" id="form1" class="form-control form-control-lg"/>
                            <!-- <label class="form-label" for="form1">Discound code</label> -->
                        </div>
                        <span class="small text-muted me-2">Total de la commande:</span> <span
                                class="lead fw-normal"><php $total?> &euro;</span>
                        <!-- <button type="button" class="btn btn-outline-warning btn-lg ms-3"  style="background-color:#EF465A; text-decoration:whit;">Apply</button> -->
                    </div>
                </div>

                <h3>Un commentaire à ajouter? </h3>
                <textarea name="" id="" cols="72" rows="10" class="form-control form-control-lg"></textarea>

                <br><br>

                <h3>Pour quelle heure?</h3>
                <input type="time" name="time" id="">
                <br><br>
                <div class="card">
                    <div class="card-body">
                        <!-- <button type="button" class="btn btn-warning btn-block btn-lg" style="background-color:#EF465A;">Modes de paiement:</button> -->
                        <h3>Modes de paiement:</h3>
                        <table>
                            <tr>
                                <td><input type="radio" name="pay" id=""></td>
                                <td>Le Cairn, Monnaie locale et citoyenne</td>
                                <td><img src="../assets/pics/lecairn.png" alt="Le Cairn" width="67" height="67"></td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="pay" id=""></td>
                                <td>Carte Bleue</td>
                                <td><img src="../assets/pics/cb.jpg" alt="Carte Bleue" width="67" height="46"></td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="pay" id=""></td>
                                <td>Visa</td>
                                <td><img src="../assets/pics/visa.jpg" alt="Visa" width="67" height="46"></td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="pay" id=""></td>
                                <td>American Express</td>
                                <td><img src="../assets/pics/ae.jpg" alt="American Express" width="67" height="46"></td>
                            </tr>
                        </table>

                    </div>
                </div>
                <br><br>
                <h3><label for="email">Saisissez votre adresse email pour recevoir votre facture:</label></h3>
                <input type="email" name="email" id="" placeholder="adresse@email.com"
                       class="form-control form-control-lg">
                <br><br>
                <h3> livraison de commande avec Ecovelo:</h3>
                <img src=../assets/pics/ecovelo.png width="150px" height="150px">
            </div>
        </div>
    </div>
</section>


<div class="row">
    <?php
    include('../include/footer.php');
    ?>
</div>

</body>
</html>
