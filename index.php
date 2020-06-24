<?php

declare(strict_types=1);

use Models\HasPriceInterface;
use Models\Product;
use Models\Service;
use App\Config;

require __DIR__ . '/autoload.php';


//$config = new \App\Config;
//print_r($config);


$db = \Db::instance();


$product = new Product();

$product->id = 1;
//$product->title = 'jopaasdasd 2';
//$product->price = 42000;


//$product->insert();

$product->delete();


//var_dump($product);
