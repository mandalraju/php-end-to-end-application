<?php
    if(!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])){
        $url = 'https://';
    }else{
        $url = 'http://';
    }
    $url .= $_SERVER['HTTP_HOST']; // http://localhost
    header('Location:'.$url.'/admin-dashboard/login.php'); // http://localhost/admin-dashboard/login.php
    exit;

// HTTP is Hyper Text Transfer Protocol and it run on PORT 80

// HTTS is Hyper Text Transfer Protocol (Secured) and it runs on PORT 443

?>