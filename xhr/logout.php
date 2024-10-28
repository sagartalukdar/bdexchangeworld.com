<?php
session_start();

    unset( $_SESSION['this_user_id']);
    unset($_SESSION['user_email']);
    unset($_SESSION['username']);


    // session_destroy();
    header('location: ../index.php');
    exit();

?>
