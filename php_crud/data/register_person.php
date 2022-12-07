<?php

include_once "data_base.php";

if (!(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['phone']) || !isset($_POST['birth_date']))) {
    insertPerson($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['birth_date']);
}
header("Location:../php/list_screen.php");

?>