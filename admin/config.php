<?php
/**
 * Created by PhpStorm.
 * User: yildiz
 * Date: 16.12.15
 * Time: 21:01
 */


    // DB Settings
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', 'newsletter');

    define('FROM_EMAIL', 'ihyildiz@me.com');
    define('FROM_NAME', 'oh yeah email!');


    session_start();
    require_once 'classes.php';
    $mini = false;
    $nonav = false;
    error_reporting(E_ALL);