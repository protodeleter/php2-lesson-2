<?php
require_once 'autoload.php';

use \Models\News;

$s_new = new News();


if (isset( $_GET['art_id'] ) && !empty( $_GET['art_id'] ) ) {

    $s_new->id = $_GET['art_id'];

    $s_new->findById ();

}


?>