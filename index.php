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

var_dump ($product);

$product->id = 2;
$product->title = 'test 2 testest';
$product->price = 523523;

$product->insert ();

var_dump ($product);

