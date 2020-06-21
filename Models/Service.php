<?php

namespace Models;

class Service extends \Model implements HasPriceInterface
{
    use HasPriceTrait;

    protected const TABLE = 'services';

    public string $title;

}
