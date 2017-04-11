<?php
	include '../../forum/functions.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="zxx"> <!-- W3C would not validate if "en" was used, will need to be changed back later -->
<head>
	<meta charset="utf-8">
	<title>About HEMA</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="abouthema.js"></script>
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
						<a href="">About HEMA</a>
						<a href="../hemastyles/hemastyles.php">HEMA Styles</a>
						<a href="../hemainbc/hemainbc.php">HEMA in BC</a>
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

			<div class="sideList">
				<ul>
					<li><a id="one" href="#">HEMA History</a></li>
					<li><a id="two" href="#">Why do HEMA?</a></li>
					<li><a id="three" href="#">Getting Involved</a></li>
				</ul>
			</div>
			<div id="default" class="aboutContent">
				<h1>HEMA History</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

			<div id="aboutHistory" class="hidden">
				<h1>HEMA History</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

			<div id="aboutWhy" class="hidden">
				<h1>Why do HEMA?</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

			<div id="aboutInvolved" class="hidden">
				<h1>Getting Involved</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>	
	</main>
	
	<footer>
		<div id="footercontent"> 
			&copy; 2017 COMP 1536 Project 
			<a href="../../sitemap/sitemap.php">Site Map</a>
		</div>
	</footer>
</body>
</html>
