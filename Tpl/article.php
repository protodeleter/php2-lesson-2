<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 27.06.2020
 * Time: 16:46
 */

use Models\News;

$insert = new News();


if ( isset($_POST['update']) && !empty($_POST['update']) ) {

    $insert->id = (int) $_POST['id'];
    $insert->Title = $_POST['Title'];
    $insert->Content = $_POST['Content'];
    $insert->save ();
    header("Refresh:0");
    exit;

} elseif (isset($_POST['delete']) && !empty($_POST['delete'])) {

$insert->id = (int) $_POST['id'];
$insert->delete ();
header("Location: http://php2.local/lesson-2/php2-lesson-2/");
exit;
}
?>

<div class="single">
    <h1>
        <?php echo $data->Title; ?>
    </h1>
    <p>
        <?php echo $data->Content; ?>
    </p>
</div>
<form action="" method="post">
    <input type="text" name="Title" value="<?php echo $data->Title; ?>" placeholder="<?php echo $data->Title; ?>" />
    <textarea name="Content" id="" > <?php echo $data->Content; ?> </textarea>
    <input type="hidden" name="id" value="<?php echo $data->id; ?>">
    <input type="submit" name="update" value="Update">
    <input type="submit" name="delete" value="Delete">
</form>