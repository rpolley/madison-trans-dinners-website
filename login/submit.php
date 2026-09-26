<?php
require_once '../vendor/autoload.php';
require_once '../lib/database.php';

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    header('HTTP/1.0 400 Bad Request');
    echo "Bad Request";

    exit();
}

$dbh = connect_db();

$config = new \PHPAuth\Config($dbh);
$auth   = new \PHPAuth\Auth($dbh, $config);

$email=$_POST['email'];
$password=$_POST['password'];

$auth->login($email, $password, 1, '');
?>