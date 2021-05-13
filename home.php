<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<!-- <meta http-equiv="refresh" content="5"> -->
		<title>Weather point</title>
		<script
			src="https://code.jquery.com/jquery-3.5.1.min.js"
			integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			crossorigin="anonymous"
		></script>
		

		<script src="script.js" defer></script>

		<link rel="Stylesheet" href="home.css" />
	</head>

	<body>
		<header>
			
			<h1>Weather BroadCast</h1>
			<div id="user">
			<?php echo "<h3>Welcome," . $_SESSION['username'] . "</h3>"; ?>
			<button id="logout"><a href="logout.php">Logout</a></button>
			</div>
		
		</header>
		
		<div class="weather-block">
			<section class="zero">
				<div id="0"></div>
				<button id="hide">Hide</button>
				<button id="show">Show</button>
				<br />
				<form id="form_0">
					Enter City:
					<input type="text" id="city0" placeholder="serach for city " />
				</form>
			</section>

			<section class="one">
				<div id="nd">
					<h2 class="city1"></h2>
					<img class="icon1" />
					<p class="description1"></p>
					<p class="temp1"></p>
				</div>
				<button id="hide1">slideUp</button>
				<button id="show1">slideDown</button>

				<br />
			</section>

			<section id="second">
				<div id="2_nd"></div>
				<form id="form_3">
					Enter City:
					<input type="text" id="city2" placeholder="serach city" />
				</form>
				<button id="hide2">slideUp</button>
				<button id="show2">slideDown</button>
			</section>
		</div>

		<footer>
			<h4>Copyright &copy; 2020, All Rights Reserved.</h4>
		</footer>
	</body>
</html>
