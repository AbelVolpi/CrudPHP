<?php
    if (isset($_POST['user']) && $_POST['password'] && $_POST['user'] == 'admin' && $_POST['password'] == 'admin') {
        session_start();
        $_SESSION['user_id'] = true;
        header('Location: ../php/list_screen.php');
    } else{
        header('Location: ../php/login_screen.php'); 
    }
?>