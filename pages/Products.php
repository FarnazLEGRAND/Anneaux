<?php
include "../include/Header.php";

// $products = $connect->query("SELECT * FROM products ORDER BY design DESC");
$bracelet = $connect->query("SELECT * FROM products WHERE design='bracelet'");
$boucle = $connect->query("SELECT * FROM products WHERE design='boucle'");
$collier = $connect->query("SELECT * FROM products WHERE design='collier'");
$products['bracelet'] = $bracelet;
$products['boucle'] = $boucle;
$products['collier'] = $collier;

//تست برای گرفتن محصولات از دیتابیس

// print_r('$products');

// foreach ($products as $item){
//    echo '<pre>';
//    print_r($item);
//    echo "<br>";
// }


?>

<div class="container-fluid" style="width:100vw">


    <div class="container text-center">

        <?php foreach ($products as $items) : ?>

            <div class="row align-items-start  contaiter">

                <?php foreach ($items as $item) : ?>
                    <!-- float:left ezafe cardam vali left nemiaya -->
                    <div class="row" style="margin: 20px; width:30% ">
                        <?php if (isset($_SESSION['admin'])) : ?>
                            <a href="Product.php?product_id=<?php echo $item['id'] ?>">
                            <?php endif; ?>

                            <div class="card m-0" style="width: 18rem;">
                                <img src="../assets/pics/bijoux/<?php echo $item['pic'] ?>" class="card-img-top" width="100%" height="200px">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $item['name'] ?></h5>
                                    <p class="card-text"><?php echo $item['info'] ?></p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?php echo $item['price'] ?> &euro;</li>
                                </ul>

                                <?php if (isset($_SESSION['username'])) : ?>



                                    <?php

                                    $is_paneir = false;
                                    foreach ($_SESSION['paniers'] as $panier) {
                                        if ($panier == $item['id']) {
                                            $is_paneir = true;
                                        }
                                    }

                                    if ($is_paneir == true) : ?>


                                        <button class=​"btn btn-primary" type="button">​
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                            </svg>
                                            <div>
                                                &nbsp;&nbsp; Ce produit a déjà été ajouté au panier
                                            </div>
                                        </button>

                                    <?php else : ?>

                                        <button class="btn btn-primary" type="button" onclick="window.location.href = '../php/Buy.php?product_id=<?php echo $item['id'] ?>'">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                            </svg>

                                            <div>
                                                &nbsp;&nbsp; Ajouter au panier
                                            </div>
                                        </button>

                                    <?php endif; ?>

                                <?php else : ?>


                                    <button class="btn btn-primary" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                        </svg>

                                        <div>
                                            &nbsp;&nbsp; Vous devez devenir membre
                                        </div>
                                    </button>



                                <?php endif; ?>

                            </div>

                            <?php if (isset($_SESSION['admin'])) : ?>

                            <?php endif; ?>

                    </div>

                <?php endforeach; ?>

            </div>


            <hr>
        <?php endforeach; ?>
    </div>

</div>







<div class="row">
    <?php
    include('../include/footer.php');
    ?>
</div>
</body>

</html>