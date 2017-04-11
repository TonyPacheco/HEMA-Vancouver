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
				<p>The BC lower mainland is home to some of the highest regarded HEMA schools in the world, and has ond of the largest populations of HEMA practioners in the world. With multiple reputable schools run by highly skilled instructors, it is hard to think of a better place for somebody interested in HEMA to find themselves. 
				<p><a href="http://academieduello.com">Academie Duello</a> &mdash; located in the heart of Downtown Vancouver &mdash; is the world's largest centre for swordplay with over 1000 registered members. With daily classes, weekly workshops, an arms and armour shop and a museum; it's a must visit for anybody interested in historical martial arts and weapons.
				<p><a href="http://www.bloodandiron.ca">Blood And Iron</a> is multi-chapter school with locations in Burnaby and Victoria. They are well known in the international HEMA community for producing high intensity and highly successful tournament fighters.
				<P><a href="http://boxwrestlefence.com/valkyriewmaa">Valkyrie WMAA</a> in Vancouver is new in the HEMA scene, having opened in 2015. Valkyrire is Canada's first martial arts school to be owned and operated by women; and they put heavy emphasis on wanted to ensure that their school is welcoming place for students of all backgrounds.
			</div>
			<iframe id="maps-embed" width="600" height="450" src="https://www.google.com/maps/embed/v1/search?key=AIzaSyD8ETPBw8qiG5hG89BIxOebzQGffU3u53A&q=swordfighting|valkyrie&zoom=10" allowfullscreen></iframe>
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
