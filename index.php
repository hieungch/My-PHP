<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$db = parse_url(getenv("DATABASE_URL"));

$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));
// your spl query
$sql = "SELECT studentname, course FROM registercourse";
$stmt = $pdo >prepare($sql);
//execute the query on thr server and return the result
$stmt->setFetchMode(PDO::FETCH_ASS0C);
$stmt->execute();
$resultSet = $stmt->fetchAll();
?>
<ul>
	<?php
	foreach ($resultSet as $row)
	{
		echo "<li>".
			$row["studentname"] . '--'. $row["course"] 
		."</li>";
	}
	?>
</ul>>

</body>
</html> 