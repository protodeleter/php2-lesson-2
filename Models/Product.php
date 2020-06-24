<?php

namespace Models;

class Product extends \Model implements HasPriceInterface, HasTitle
{

    use HasPriceTrait;

    protected const TABLE = 'product';

    public string $title;
    public int $price;

    public function getTitle(): string
    {
        return $this->title;
    }

}
