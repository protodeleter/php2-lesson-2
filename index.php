<?php

declare(strict_types=1);

use Models\HasPriceInterface;
use Models\Product;
use Models\Service;

require __DIR__ . '/autoload.php';

$product = new Product();
$product->title = 'Тестовый товар';
$product->price = 42000;
$product->insert();

var_dump($product);
