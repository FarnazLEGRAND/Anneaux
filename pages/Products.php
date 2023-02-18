<?php
include "../include/Header.php";

$products = $connect->query("SELECT * FROM products");

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
        <div class="row align-items-start  contaiter">

            <?php foreach ($products as $item) : ?>
                <!-- float:left ezafe cardam vali left nemiaya -->
                <div class="row" style="margin: 20px; width:30% ">
                    <?php if (isset($_SESSION['admin'])) : ?>
                    <a href="Product.php?product_id=<?php echo $item['id'] ?>">
                        <?php endif; ?>

                        <div class="card m-0" style="width: 18rem;">
                            <img src="../assets/pics/bijoux/<?php echo $item['pic'] ?>" class="card-img-top" width="100%"
                                 height="200px">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item['name'] ?></h5>
                                <p class="card-text"><?php echo $item['info'] ?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?php echo $item['price'] ?> &euro;</li>
                            </ul>
                            <input type="number" placeholder="0" min="0" id="<?php echo $item['id'] ?>" class="article">
                             <button class="btn btn-outline-secondary" onclick="calcul()"><img src="../assets/pics/panier.png" alt="Panier" width="20" height="20"></button>
                        </div>
                 
                        <?php if (isset($_SESSION['admin'])) : ?>
                    </a>
                <?php endif; ?>

                </div>

            <?php endforeach; ?>

        </div>
    </div>

</div>

    <div class="row">
      <?php
         include('../include/footer.php');       
       ?>
    </div>

</body>
</html>
