<?php
	include '../forum/functions.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Site Map</title>
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<link rel="stylesheet" href="../style/base.css">
</head>
<body>
	<header>
		<h1>HEMA</h1>
		<nav>
			<ul>
				<li><a href="../index.php">Home</a></li>
				
				<li class="dropdown">
					<a href="#" class="button">HEMA</a>
					<div class="menu">
						<a href="../hema/abouthema/abouthema.php">About HEMA</a>
						<a href="../hema/hemastyles/hemastyles.php">HEMA Styles</a>
						<a href="../hema/hemainbc/hemainbc.php">HEMA in BC</a>
					</div>
				</li>
				
                <li><a href="../aboutus/aboutus.php">About Us</a></li>
			</ul>
		</nav>
		
		<div id="login">
		<?php
			if (isLoggedIn()){
				echo 'Welcome, '. $_SESSION['SESS_FIRST_NAME'] . '  |  ';
				echo '<a href="forum/logout.php">Logout</a><br/>';
			} else {
				echo '<a href="../login/loginorsignup.php">Login / Signup</a>';
			}
		?>

		</div>
		    
	</header>
	
	<main>
		<div id="wrapper">
			<h1>Site Map</h1>
			<ul id = "sitemap">
				<li> <a href = "../index.php">Home</a></li>
				<li><a href = "#">HEMA</a></li>
				<li class = "indentedlist"> <a href = "../hema/abouthema/abouthema.php">About HEMA</a></li>
				<li class = "indentedlist"> <a href = "../hema/hemastyles/hemastyles.php">HEMA Styles</a></li>
				<li class = "indentedlist"> <a href = "../hema/hemainbc/hemainbc.php">HEMA in BC</a></li>
				<li> <a href = "../aboutus/aboutus.php">About Us</a></li>
				<li> <a href = "../login/loginorsignup.php">Login/Signup</a></li>
			</ul>
		</div>	
	</main>
	
	<footer>
		<div id="footercontent"> 
			&copy; 2017 some students 
			<a href="#">Site Map</a>
		</div>
	</footer>
</body>
</html>
