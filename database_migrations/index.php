<table>
    <thead>
        <tr>
            <th>Migration number</th>
            <th>Ran on</th>
        </tr>
    </thead>
    <tbody>
<?php
require_once "../lib/database.php";
$pdo = connect_db();
$migrations = $pdo->query("SELECT * FROM migration");
while ($row = $migrations->fetch(PDO::FETCH_ASSOC)){
    ?>
    <tr>
        <td><?php echo $row['migration']?></td>
        <td><?php echo $row['ran_on']?></td>
    </tr>
    <?php
}?>
    </tbody>
</table>