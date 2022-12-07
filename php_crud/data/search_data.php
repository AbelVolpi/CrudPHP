<?php

if (isset($_GET['searchString'])) {
    $string = $_GET['searchString'];
    header("Location:../php/list_screen.php?searchString={$string}");
}

?>