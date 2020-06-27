<?php

declare(strict_types=1);

use Models\HasPriceInterface;
use Models\Product;
use Models\Service;
use Models\News;
use App\Config;

require __DIR__ . '/autoload.php';

$news = new News();
//$news->id = 1;
//$news->Title = 'test 2 new';
//$news->save ();



if ( isset( $_POST ) && !empty($_POST) ) {
    $news->Title = $_POST['Title'];
    $news->Content = $_POST['Content'];
    $news->insert ();

    header("Refresh:0");
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <div class="all_news">
        <?php $allNews = $news->findAll(); ?>
    </div>


    <form action="" method="post">
        <input type="text" name="Title" placeholder="Title">
        <input type="text" name="Content" placeholder="Contetn">
        <input type="submit" value="Submit">
    </form>



</body>
</html>

