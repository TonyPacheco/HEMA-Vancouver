<?php
	include 'functions.php';
	session_start();
	require_once('config.php');

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
	$tbl_name="topic"; // Table name

	//Question 1c - modify our SQL statement to get poster name.

	$sql="SELECT * FROM $tbl_name JOIN members ON members.member_id = topic.member_id";
	// ORDER BY id DESC is order result by descending
	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HEMA</title>
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
					echo '<a href="logout.php">Logout</a><br/>';
				} else {
					echo '<a href="../login/loginorsignup.php">Login / Signup</a>';
				} 
			?>

			</div>
			    
		</header>
		<main>
			<div id="forumdiv">
				<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
				<tr>
				<form id="form1" name="form1" method="post" action="add_topic.php">
				<td>
				<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
				<tr>
				<td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>
				</tr>
				<tr>
				<td width="14%"><strong>Topic</strong></td>
				<td width="2%">:</td>
				<td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
				</tr>
				<tr>
				<td valign="top"><strong>Detail</strong></td>
				<td valign="top">:</td>
				<td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
				</tr>
				</table>
				</td>
				</form>
				</tr>
				</table>
			</div>
		</main>
		<footer>
			<div id="footercontent"> 
				&copy; 2017 some students 
				<a href="../sitemap/sitemap.php">Site Map</a>
			</div>
		</footer>
	</body>
</html>


