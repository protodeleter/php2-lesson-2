<?php

namespace Models;

trait HasPriceTrait
{

    public int $price;

    public function getPrice(): int
    {
        return $this->price;
    }

}
