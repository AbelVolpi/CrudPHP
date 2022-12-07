<?php

include_once "data_base.php";

if (isset($_GET['id'])) {
    deletePerson($_GET['id']);
}
header("Location:../php/list_screen.php");

?>