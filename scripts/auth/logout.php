<?php

    session_start();

    // Unsetting the data in $SESSION global variable.
    $_SESSION = array();

    session_destroy();

    header('Location:/admin-dashboard/login.php');

?>