<?php
include "../inclide/Header.php";

$product_id = $_GET['product_id'];
$product = $connect->query("SELECT * FROM products WHERE id = $product_id")->fetch_assoc();

// print_r($product);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produit</title>
</head>
<body>


<form action="../php/update.php" method="POST" enctype="multipart/form-data" class="col-6 mt-4" style="margin: auto">

    <h2 style="text-align: center">Page de l'update de produit</h2>

<!--    تایپ این اینپوت به صورت هیدن گذاشتیم که در صفحه دیده نشود ولی همراه فرم ارسال شود-->

    <input name="product_id" value="<?php echo $product['id']?>" type="hidden">

    <div class="group log-input">
        <label for="name">nome de produit : </label>
        <input id="name" type="text" name="name" value="<?php echo $product['name']?>">
    </div>

    <div class="group log-input">
        <label for="info">info de produit :  </label>
        <textarea id="info" type="text" name="info">
            <?php echo $product['info']?>
        </textarea>
    </div>

    <div class="group log-input">
        <label for="price">prix de produit : </label>
        <input id="price" type="text" name="price" value="<?php echo $product['price']?>">
    </div>

    <div class="group log-input">
        <label for="pic">pic. : </label>
        <input id="pic" type="file" name="pic">
        <!-- in width border ra baraye zibayi axs safhe product dadam -->
        <img src="../assets/pics/<?php echo $product['pic']?>" width="100px" height="100px" style="border-radius: 10px">
    </div>

    <div class="group log-input">
        <label for="count">nombre d'article : </label>
        <input id="count" type="number" name="count" value="<?php echo $product['count']?>">
    </div>

    <button class="btn btn-outline-secondary" type="submit"> update</button>
    <a class="btn btn-outline-danger" href="../php/delete.php?product_id=<?php echo $product['id']?>"> delete </a>

</form>

   <div class="row">
      <?php
         include('../include/footer.php');       
       ?>
    </div>
</body>
</html>
