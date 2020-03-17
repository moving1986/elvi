<?php include ROOT.'/views/layouts/header.php'; ?>

<div class="container center">
    <h1>Уникальные товары из дерева для вас!</h1>
        <div class="center"><img src="/template/images/main-img.jpg" alt=""></div><br><br>
        <div class="center"><img src="/template/images/main-garant.jpg" alt=""></div><br><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At adipisci quas iure iusto eligendi libero rem, deleniti ex. Dignissimos dolores atque nam quas, delectus, culpa architecto inventore blanditiis nisi dicta in ex! Voluptates, nihil recusandae consequuntur unde, quae voluptate. Adipisci illo nobis incidunt corporis distinctio, voluptates tempora quisquam iusto, quidem magni provident consectetur maxime suscipit voluptatum eum blanditiis vel consequatur velit aspernatur laudantium nulla. Ipsa aspernatur, repellendus rem iusto similique rerum, fugiat possimus tempore ex. Eveniet mollitia eligendi modi quia, quo nesciunt, nemo sapiente vitae quas recusandae accusantium eum similique voluptatum, beatae placeat autem voluptatibus quos explicabo dolor iste, pariatur soluta aliquid. Aut qui, dolor totam deserunt fuga cupiditate, illum quod provident nulla error enim ratione debitis ab ipsa consequuntur possimus rerum rem sunt adipisci ut dolorem, itaque odio. Dolor consequatur itaque fugit delectus dolores laudantium cumque numquam quae cum a voluptatem molestias assumenda nobis tempora repudiandae asperiores, suscipit autem.</p>
        <h2>Свежие товары</h2>
        <div class="container">
          <div class="row">
           <?php foreach ($productsList as $productsItem): ?>
                <div class="col-sm-3">
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
</div>

<br><br><br><br>

<?php include ROOT.'/views/layouts/footer.php'; ?>