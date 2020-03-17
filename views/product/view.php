<?php include ROOT.'/views/layouts/header.php'; ?>

<div class="container">
 <h2><?php echo $product['name']; ?></h2>
    <div class="row">
        <div class="col-sm-5">
            <img src="" alt="">
        </div>
        <div class="col-sm-7">
            <p>Цена: <?php echo $product['price']; ?></p>
            <p>Размер: <?php echo $product['size']; ?></p>
        </div>
    </div>

</div>


<?php include ROOT.'/views/layouts/footer.php'; ?>