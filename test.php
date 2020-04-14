<?php
	include 'pdosetup.php';
?>
<!DOCTYPE html>
<html>
<body>
<?php
	 $stmt = $pdo->query('SELECT Name FROM inventory');
while ($row = $stmt->fetch())
{
    echo $row['Name'] . "\n";
}
?>
</body>
</html>
