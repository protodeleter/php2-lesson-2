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
    protected static $config_instance = null;
    public static function conf_instance ()
    {
        if (null === self::$config_instance) {
            self::$config_instance = new self();
        }
        return self::$config_instance;
    }

    public function __construct ()
    {
        $this->data = include __DIR__.'../../Config/db_details.php';
    }

}