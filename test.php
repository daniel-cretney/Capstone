<?php
	include 'pdosetup.php';
?>
<!DOCTYPE html>
<html>
<body>
<?php
	 $stmt = $pdo->query('SELECT Name FROM Inventory');
while ($row = $stmt->fetch())
{
    echo $row['Name'] . "\n";
}
?>
</body>
</html>
