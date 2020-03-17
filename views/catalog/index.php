
<?php include ROOT.'/views/layouts/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <ul>
            <?php foreach ($categories as $categoryItem): ?>
            <li><a href="/category/<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?></a></li>
            <?php endforeach; ?>
            </ul>
        </div>
        <div cless="col-sm-9">
           <div class="row">
           Опа получилось
           </div>
        </div>
    </div>
</div>
<?php include ROOT.'/views/layouts/footer.php'; ?>