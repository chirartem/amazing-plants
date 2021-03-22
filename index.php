

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

<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Интересные растения</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="script/script.js"></script>
	<link rel="stylesheet" href="style/nullstellen.css">
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
	<header><h1></h1></header>
	<div id="menu">
		<h2>Растения:</h2>
		<ul>

			<?php
			$sql = "SELECT id, name from plants where visible=1 order by sort";
			$result = $conn->query($sql);

			while($row = $result->fetch_assoc()) {
				echo "<li><a href=\"/?type=plants&id=".$row["id"]."\">".$row["name"]."</a></li>";
			} 
			?>
		</ul>
		<h2>Деревья:</h2>
		<ul>

			<?php
			$sql = "SELECT id, name from trees where visible=1 order by sort";
			$result = $conn->query($sql);

			while($row = $result->fetch_assoc()) {
				echo "<li><a href=\"/?type=trees&id=".$row["id"]."\">".$row["name"]."</a></li>";
			} 
			?>

		</ul>
	</div>
	<div id="main">
		<?php
		if (isset($_GET['type']))
			$link_type = $_GET["type"];
		else
			$link_type = 0;

		if (isset($_GET['id']))
			$link_id = $_GET["id"];
		else
			$link_id = 0;

		if (($link_type) && ($link_id)) {
			$sql = "SELECT name, content from $link_type where visible=1 and id=$link_id";
			$result = $conn->query($sql);

			$row = $result->fetch_assoc();
			echo $row["name"];
			echo "<br />";
			echo $row["content"];
			//echo "<img src='/images/{$link_type}_{$link_id}.jpg'>"
		}
		?>
		<?php
		if ($link_id == 0) {
			?>
			<?php 
		} 
		?>
	</div>
	<footer></footer>
	<a href="#" id="back-to-top"></a>
</body>
</html>