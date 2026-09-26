<?php

require_once '../vendor/autoload.php';
require_once '../lib/database.php';

$dbh = connect_db();

$config = new \PHPAuth\Config($dbh);
$auth   = new \PHPAuth\Auth($dbh, $config);

if (!$auth->isLogged()) {
    header('HTTP/1.0 403 Forbidden');
    echo "Forbidden";

    exit();
}
?>