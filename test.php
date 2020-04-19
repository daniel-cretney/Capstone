<?php
	include 'pdosetup.php';
?>
<!DOCTYPE html>
<html>
<body>
<?php
	 $stmt = $pdo->query('SELECT FName FROM Inventory');
while ($row = $stmt->fetch())
{
    echo $row['FName'] . "\n";
}
?>
</body>
</html>
