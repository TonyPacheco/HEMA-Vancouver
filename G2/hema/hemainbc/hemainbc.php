<?php
	include '../../forum/functions.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>HEMA in BC</title>
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<link rel="stylesheet" href="../../style/base.css">
</head>
<body>
	<header>
		<h1>HEMA</h1>
		<nav>
			<ul>
				<li><a href="../../index.php">Home</a></li>
				
				<li class="dropdown">
					<a href="#" class="button">HEMA</a>
					<div class="menu">
						<a href="../abouthema/abouthema.php">About HEMA</a>
						<a href="../hemastyles/hemastyles.php">HEMA Styles</a>
						<a href="#">HEMA in BC</a>
					</div>
				</li>
				
                <li><a href="../../aboutus/aboutus.php">About Us</a></li>
				
			</ul>
		</nav>
		
		<div id="login">
		<?php
			if (isLoggedIn()){
				echo 'Welcome, '. $_SESSION['SESS_FIRST_NAME'] . '  |  ';
				echo '<a href="forum/logout.php">Logout</a><br/>';
			} else {
				echo '<a href="../../login/loginorsignup.php">Login / Signup</a>';
			}
		?>

		</div>
		    
	</header>
	
	<main>
		<div id="wrapper">
			<img id="bannerimg" src = "../../content/fenestraBanner.png" alt = "Two longsword fencers locked in a high bind.">
			<div id="hemainbcText">
				<h1>Hema in BC</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<iframe id="maps-embed" width="600" height="450" src="https://www.google.com/maps/embed/v1/search?key=AIzaSyD8ETPBw8qiG5hG89BIxOebzQGffU3u53A&q=hema+vancouver&zoom=10" allowfullscreen></iframe>
			</div>
		
	</main>
	
	<footer>
		<div id="footercontent"> 
			&copy; 2017 some students 
			<a href="../../sitemap/sitemap.php">Site Map</a>
		</div>
	</footer>
</body>
</html>
