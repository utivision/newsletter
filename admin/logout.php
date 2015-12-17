<?php
/**
 * Created by PhpStorm.
 * User: yildiz
 * Date: 16.12.15
 * Time: 21:10
 */

    require_once 'config.php';
    $_SESSION = array();
    session_destroy();
    header('Location: login.php');
?>