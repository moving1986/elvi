
<?php include ROOT.'/views/layouts/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-3">
            <ul>
            <?php foreach ($categories as $categoryItem): ?>
            <li><a href="/category/<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?></a></li>
            <?php endforeach; ?>
            </ul>
        </div>
        <div cless="col-sm-9">
           <div class="row">
           <?php foreach ($productsList as $productsItem): ?>
                <div class="col-sm-4">
                <img src="<?php echo $productsItem['image_catalog']; ?>" class="card-img-top" alt="...">
                <h4><?php echo $productsItem['name']; ?></h4>
                <p><?php echo $productsItem['description']; ?></p>
                <a href="/product/<?php echo $productsItem['id']; ?>" class="btn btn-primary">Подробнее...</a>
                </div>
            <?php endforeach; ?>
           </div>
        </div>
    </div>
</div>
<?php include ROOT.'/views/layouts/footer.php'; ?>