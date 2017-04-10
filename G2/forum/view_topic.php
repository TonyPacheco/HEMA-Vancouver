<?php

	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
	$tbl_name="topic"; // Table name

	// get value of id that sent from address bar
	$id=$_GET['id'];
	
	$sql="SELECT * FROM $tbl_name JOIN members ON members.member_id = topic.member_id where id='$id'";
	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);

	$rows=mysqli_fetch_array($result);
	
	if (!isLoggedIn()){
		echo "Please log in to post or view comments!";
		exit();
	}	
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
				<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
				<tr>
				<td bgcolor="#F8F7F1"><strong><?php echo $rows['topic']; ?></strong></td>
				</tr>

				<tr>
				<td bgcolor="#F8F7F1"><?php echo $rows['detail']; ?></td>
				</tr>

				<!--Question 1d - add name after By: -->

				<tr>
				<td bgcolor="#F8F7F1"><strong>By :</strong><?php echo $rows['firstname']; ?> <td>
				</tr>

				<tr>
				<td bgcolor="#F8F7F1"><strong>Date/time : </strong><?php echo $rows['datetime']; ?></td>
				</tr>
				</table></td>
				</tr>
				</table>
				<BR>
				<?php
				$tbl_name2="response"; // Switch to table "response"

				//Question 1d - Add first name to response.
				$sql2="SELECT * FROM $tbl_name2 JOIN members ON members.member_id = response.member_id WHERE topic_id='$id'";
				$result2=mysqli_query($GLOBALS["___mysqli_ston"], $sql2);

				while($rows=mysqli_fetch_array($result2)){
				?>
				<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
				<tr>
				<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
				<tr>
				<td bgcolor="#F8F7F1"><strong>ID</strong></td>
				<td bgcolor="#F8F7F1">:</td>
				<td bgcolor="#F8F7F1"><?php echo $rows['id']; ?></td>
				</tr>
				<tr>
				<td width="18%" bgcolor="#F8F7F1"><strong>Name</strong></td>
				<td width="5%" bgcolor="#F8F7F1">:</td>

				<!--Question 1d - add first name row-->
				<td width="77%" bgcolor="#F8F7F1"><?php echo $rows['firstname']; ?></td>
				</tr>
				<tr>
				<td bgcolor="#F8F7F1"><strong>Response</strong></td>
				<td bgcolor="#F8F7F1">:</td>
				<td bgcolor="#F8F7F1"><?php echo $rows['response']; ?></td>
				</tr>
				<tr>
				<td bgcolor="#F8F7F1"><strong>Date/Time</strong></td>
				<td bgcolor="#F8F7F1">:</td>
				<td bgcolor="#F8F7F1"><?php echo $rows['datetime']; ?></td>
				</tr>
				</table></td>
				</tr>
				</table><br>

				<?php
				}
				((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
				?>



				<BR>
				<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
				<tr>
				<form name="form1" method="post" action="add_response.php">
				<td>
				<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
				<tr>
				<td valign="top"><strong>Response</strong></td>
				<td valign="top">:</td>
				<td><textarea name="response" cols="45" rows="3" id="answer"></textarea></td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
				<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
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