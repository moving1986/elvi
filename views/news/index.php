<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  <?php foreach ($newsList as $newsItem):?>  
    <div>
        <h1><?php echo $newsItem['title'];?></h1>
        <p><?php echo $newsItem['short_content'];?></p>
        <div><?php echo $newsItem['date'];?></div>
        <span><?php echo $newsItem['author_name'];?></span>
    </div>
</body>
</html>
  <?php endforeach;?>