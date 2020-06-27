
<ul>



<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 27.06.2020
 * Time: 14:49
 */


foreach ($data as $datum) {?>

    <li>
        <a href="single.php?art_id=<?php echo $datum->id; ?>"> <?php echo 'Title: ' . $datum->Title . '<br/>' ; ?> </a>

        <?php echo 'Content: ' . $datum->Content. '<br/>'; ?>
    </li>

<?php
}
?>

</ul>

