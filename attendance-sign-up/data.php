Signup count: <?php
require_once "../lib/database.php";
$pdo = connect_db();
$sql = "SELECT COUNT(*) FROM signup WHERE for_date='09-17-2026'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetch();
echo $result[0];
?>