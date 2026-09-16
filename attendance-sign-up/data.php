Signup count: <?php
require_once "../lib/database.php";
$config = require "../conf/config.php";
$pdo = connect_db();
$sql = "SELECT COUNT(*) FROM signup WHERE for_date=:for_date";
$stmt = $pdo->prepare($sql);
$stmt->execute([':for_date' => $config['next_dinner_date']]);
$result = $stmt->fetch();
echo $result[0];
?>