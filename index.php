<?php
header('Content-Type: text/html; charset=utf-8');

$servername = "localhost";
$username = "site";
$password = "Sql_760165";
$dbname = "amazing_plants";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8"); // Procedural approach
$conn->set_charset("utf8");        // Object-oriented approach

// Check connection
if ($conn->connect_error) {
	die("Connection failed now: " . $conn->connect_error);
}

?>
<!DOCTYPE html> <!-- Эта версия будет разрабатываться с PHP!!! -->
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<title>Интересные растения</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<p class="logotyp">
		<a href="index.html">
			<img src="images/logo.png" alt="" class="logo" />
			<br />
			<span>Amazing <sub>plants</sub></span>
		</a>
	</p>
	<div class="border">
		<h2>Растения:</h2>
		<ul>

<?php
$sql = "SELECT name from plants where visible=1 order by sort";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
	echo "<li><a href=\"\">".$row["name"]."</a></li>";
} 
?>
		</ul>
		<h2>Деревья:</h2>
		<ul>

<?php
$sql = "SELECT name from trees where visible=1 order by sort";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
	echo "<li><a href=\"\">".$row["name"]."</a></li>";
} 
?>

		</ul>
	</div>
	<br />
	<br />
	<br />
	
<!-- span:hover {
	 color: white;
	} -->
</body>
</html>