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
			<div id="aboutHistory" class="aboutContent">
				<h1>HEMA History</h1>
				<p>In the late 1800's Alfred Hutton started the initial revival of Historical Swordsmanship which began with his publication of a 12 page booklet titled "Swordsmanship". He started groups and led likeminded sword enthusiasts in learning and practicing HEMA, laying the groundwork for what modern HEMA would eventually be.
				<br>The current recreation of HEMA started in the early 1990's, when the internet began making historical source texts readily available to anybody interested in them. Now there are hundreds of HEMA schools world wide teaching a wide variety of martial arts.
			</div>

			<div id="aboutWhy" class="hidden">
				<h1>Why do HEMA?</h1>
				<p>Is there a better way to exercise than by fighting with swords? You get to learn a martial art (or multiple!) as it was practiced hundreds of years ago. In the process you'll ned up learning more about yourself; how you learn and what your body is capabel of. You'll meet new people and make new friends. Have the opportunity to test your resolve and courage in HEMA tournaments. And perhaps most importantly you'll have fun.
			</div>

			<div id="aboutInvolved" class="hidden">
				<h1>Getting Involved</h1>
				<p>If you're reading this then you're already on the right track! The next step is seeing if there any schools or study groups near you.<a href = "https://www.hemaalliance.com/">The HEMA Alliance</a> has a great tool for finding nearby clubs, and the <a href = "https://www.facebook.com/groups/HEMAAlliance/">HEMA Alliance Facebook group</a> is another usefull tool for interacting with the HEMA community at large. There is also the subreddit <a href="https://www.reddit.com/r/wma/">/r/WMA</a> for interested redditors, as well as numerous other websites and forums.
				<p>If your not lucky enough to have a club nearby that you can join, then start the way others before you have started; find a historical source that interests you, and start learning for yourself. Our <a href="../hemastyles/hemastyles.php">HEMA Styles page</a> lists a source for each of the more common systems, which can be a good place to start. <a href = "http://wiktenauer.com">Wiktenauer</a> has many of these sources available on their wiki-site, as well links to numerous others.
				<p>If you're worried about getting equipment, it's usally good to start simple and work your way up until fully equipped. The standard starting point for sword simulators are wooden/synthetic 'wasters', but in the absence of those, a broom handle cut to length can serve well enough. Once you're ready to start purchasing equipment the best start would be asking others in the HEMA community; as what looks good, and what works well, are often very different things. There's also a very well curated and often updated list of the latest and greatest in HEMA equipment at the <a href="https://www.reddit.com/r/Hema/">/r/HEMA</a> subreddit.
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
