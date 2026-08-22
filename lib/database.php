<?php
function connect_db() {
    $config = require '../conf/config.php';
    $dsn =  $config['db_dsn'];
    $user = $config['db_user'];
    $pass = $config['db_pass'];
    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        return $pdo;
    } catch (\PDOException $e) {
        throw new \PDOException($dsn . ": " . $e->getMessage(), (int)$e->getCode());
    }
}
?>