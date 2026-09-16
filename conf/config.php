<?php
$db = require 'database.php';
$db_host = $db['db_host'];
$db_name = $db['db_name'];
$db_user = $db['db_user'];
$db_pass = $db['db_pass'];
$charset = 'utf8mb4';

return [
    'db_dsn' => "mysql:host=$db_host;dbname=$db_name;charset=$charset",
    'db_user' => $db_user,
    'db_pass' => $db_pass,
    'db_options' => [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ],
    'next_dinner_date' => '2026-09-17',
];
?>