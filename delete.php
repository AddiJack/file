<?php
if (!empty($_POST)){
    unlink('uploads/' . $_POST['image']);
}
header('Location: index.php');
?>