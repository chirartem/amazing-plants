<?php
$servername = "192.168.1.209";
$username = "site";
$password = "Sql_760165";
$dbname = "amazing_plants";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed now: " . $conn->connect_error);
}

$sql = "SELECT name";
$result = $conn->query($sql);

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
			<li><a href="">Самые большие</a></li>
			<li><a href="">Самые маленькие</a></li>
			<li><a href="">Самые долгоживущие</a></li>
			<li><a href="">Самые светлолюбивые</a></li>
			<li><a href="">Самые тёмнолюбивые</a></li>
			<li><a href="">Самые заcухоустойчивые</a></li>
			<li><a href="">Самые влагоустойчивые</a></li>
			<li><a href="">Самые пушистые</a></li>
			<li><a href="">Самые распространённые</a></li>
			<li><a href="">Самые простые</a></li>
			<li><a href="">Самые сложноустроенные</a></li>
			<li><a href="">Самые быстрорастущие</a></li>
			<li><a href="">Без корней</a></li>
			<li><a href="">Насекомоядные</a></li>
		</ul>
		<h2>Деревья:</h2>
		<ul>
			<li><a href="">Самые твёрдые</a></li>
			<li><a href="">Самые мягкие</a></li>
			<li><a href="">Самые большие</a></li>
			<li><a href="">Самые маленькие</a></li>
			<li><a href="">Самые распространённые</a></li>
			<li><a href="">Самые высокие</a></li>
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