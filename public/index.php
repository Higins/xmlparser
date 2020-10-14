<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "../bootstrap.php";
$products = $entityManager->getRepository('Product')->findAll();

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>XML Parser</title>
</head>
<body>
<h1>Products</h1>
<?php
foreach ($products as $product) {
?>
<div class="card" style="width: 18rem;">
    <div class="card-header">
        name: <?= $product->getName(); ?>
        <br>
        id: <?= $product->getPid();?>
    </div>
    <?php
    $relProducts = $entityManager->getRepository('RelProduct')->findBy(['pid'=>$product->getId()]);
    foreach ($relProducts as $relProduct) {
        if($relProduct->getPid() == $product->getId()) {
            $productRelList = $entityManager->getRepository('Product')->findBy(['pid'=>$relProduct->getRid()]);
    ?>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">RelID: <?= $productRelList[0]->getPid();?> / Name: <?= $productRelList[0]->getName(); ?></li>
    </ul>
        <?php
    }
    }
    ?>
</div>
<?php
}
?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>