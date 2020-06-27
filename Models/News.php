<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 27.06.2020
 * Time: 14:39
 */

namespace Models;


class News extends \Model implements getSingleInterface
{
    use getSingleTrait;
    protected const TABLE = 'news';

    public function getSingle(): object
    {
        return self::findById ();
    }
}
