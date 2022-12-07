<?php

include_once "data_base.php";

if (!(!isset($_GET['id']) || !isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['phone']) || !isset($_POST['birth_date']))) {
    editPerson($_GET['id'], $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['birth_date']);
}
header("Location:../php/list_screen.php");

?>