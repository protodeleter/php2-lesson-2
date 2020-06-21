<?php

namespace Models;

class Product extends \Model implements HasPriceInterface, HasTitle
{

    use HasPriceTrait;

    protected const TABLE = 'products';

    public string $title;

    public function getTitle(): string
    {
        return $this->title;
    }

}
