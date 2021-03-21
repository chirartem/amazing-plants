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
	<meta charset="UTF-8" />
	<title>Интересные растения</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
	<header></header>
	<div class="display-flex">
<<<<<<< HEAD
		<div id="menu">
			<h2>Растения:</h2>
			<ul>
=======
		<div class="menu">
			<h2 class="menu-h2">Растения:</h2>
			<ul class="menu-ul">
>>>>>>> origin/white-background

				<?php
				$sql = "SELECT id, name from plants where visible=1 order by sort";
				$result = $conn->query($sql);

				while($row = $result->fetch_assoc()) {
					echo "<li><a href=\"/?type=plants&id=".$row["id"]."\">".$row["name"]."</a></li>";
				} 
				?>
<<<<<<< HEAD
			</ul>
			<h2>Деревья:</h2>
=======
			</ul class="menu-ul">
			<h2 class="menu-h2">Деревья:</h2>
>>>>>>> origin/white-background
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
	</div>
	<div id="content">
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
			<div class="cards">
				<div class="flex-wrap card" style="width: 18rem;">
					<img src="images/card-avatars/icon_1.png" class="card-img-top" alt="Самые большие">
					<div class="card-body">
						<div class="button-align-card"><a href="#" class="btn btn-primary">Самые большие</a></div>
					</div>
				</div>
				<div class="flex-wrap card" style="width: 18rem;">
					<img src="images/card-avatars/icon_3.png" class="card-img-top" alt="Самые маленькие">
					<div class="card-body">
						<div class="button-align-card"><a href="#" class="btn btn-primary">Самые маленькие</a></div>
					</div>
				</div>
				<div class="flex-wrap card" style="width: 18rem;">
					<img src="images/card-avatars/icon_3.png" class="card-img-top" alt="Самые маленькие">
					<div class="card-body">
						<div class="button-align-card"><a href="#" class="btn btn-primary">Самые маленькие</a></div>
					</div>
				</div>
				<div class="flex-wrap card" style="width: 18rem;">
					<img src="images/card-avatars/icon_3.png" class="card-img-top" alt="Самые маленькие">
					<div class="card-body">
						<div class="button-align-card"><a href="#" class="btn btn-primary">Самые маленькие</a></div>
					</div>
				</div>
			</div>
<<<<<<< HEAD
			<?php 
		} 
		?>
=======
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et dolor, odit nisi reiciendis harum illum voluptate, ut, ipsum iure quaerat, sit. Praesentium totam vero, ipsum in ullam voluptatibus cupiditate. Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Veritatis eligendi, quis, consectetur voluptatum quo corrupti porro velit excepturi. Nemo ad quidem dolorum tempora similique possimus nam modi eaque, placeat architecto!
				Sint tenetur itaque, vel, fugit, minus a dolore impedit repellendus illum cupiditate sunt eaque neque quod? Hic, omnis. Modi expedita, similique ea amet rem molestias vel nobis ipsa in totam?
				Amet saepe laborum perferendis hic, unde laudantium laboriosam vitae vel adipisci itaque eos tenetur expedita temporibus nulla perspiciatis impedit ex consectetur, rerum harum magnam quod? Molestiae aspernatur qui architecto at. Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, aperiam repellendus corrupti aspernatur, esse tempore itaque? Quod ipsum autem eius facilis, molestiae quae asperiores! Fuga doloremque, nisi aperiam animi provident?
				Perspiciatis sit odit exercitationem amet quidem voluptas sunt autem, nam fugit, labore reprehenderit! Mollitia provident libero culpa corporis soluta ullam harum. Nihil earum doloribus itaque ratione maiores aspernatur, laudantium commodi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus impedit quidem, esse laborum sit hic nesciunt, aperiam nulla, harum quos facere explicabo. Voluptas earum, sed minima enim similique sit, placeat!
				Eaque, sit doloremque similique sed dolores dolorum, expedita rem itaque! Dolores sint similique explicabo consequuntur, laboriosam ducimus sequi ipsum possimus corporis quas enim, accusamus voluptate impedit magni temporibus, deleniti. Dolorem.
				Id minus doloribus at numquam vero, expedita error hic amet enim illum ipsum ullam, sunt earum laboriosam nam iste. Autem numquam iure unde ullam omnis harum repellat hic quod cupiditate. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem minus consequuntur asperiores fuga aliquid, tempora neque non nobis sapiente maiores qui vitae aut earum dolore, laboriosam atque mollitia repellat cum?
				Nobis incidunt ut officia tempora omnis, voluptates eaque magnam labore vero esse quos doloremque ullam minima obcaecati, alias saepe excepturi fuga cumque tenetur cupiditate, rerum. Voluptates aspernatur vel ad autem.
				Quidem ullam ea error iste eum ipsam magni porro. Nisi ipsum, enim quos excepturi. Esse voluptatem veritatis perspiciatis libero nihil aut dignissimos odio accusamus animi nemo cumque laborum natus, iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil totam voluptatum dolore dolorum nisi? Ullam quo molestiae quisquam, illum, iste recusandae reiciendis blanditiis suscipit culpa sunt accusamus alias ut.
				Non neque velit, nisi unde. Blanditiis, assumenda ad dolores molestias accusantium ipsam, sunt, ipsa repellat inventore labore dolorem numquam, cupiditate ab unde quia saepe. Sint velit exercitationem asperiores dolorum quaerat.
				Excepturi commodi et hic minima corporis delectus, repellat optio ipsa consequuntur laudantium nisi, quos. Modi deserunt aspernatur sapiente nam odio sunt, ratione deleniti inventore. Consectetur corrupti, unde quam perferendis nam.
			Quam voluptatem dolorum accusamus adipisci sunt rerum ea ullam ipsam, enim mollitia, necessitatibus perferendis ipsa, fuga blanditiis obcaecati autem! Optio, sed amet magni maxime corrupti placeat iste in laudantium alias?</p>
		</div>
		<!----------------------------------------------------------------------------------------------------------------------------------------->
		<a href="#" class="back-to-top"><img src="images/solid.svg" alt=""></a>
		<script src="script/script.js"></script>
>>>>>>> origin/white-background
	</div>
	<footer></footer>
	<a href="#" id="back-to-top"></a>
	<script src="script/script.js"></script>
</body>
</html>