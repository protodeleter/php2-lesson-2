<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 22.06.2020
 * Time: 22:26
 */

namespace App;

class Config
{
    public $data;
    public function __construct ()
    {
        $this->data = include __DIR__.'../../Config/db_details.php';
    }

}