<?php
	include 'functions.php';
	
	session_start();
	
	define('DB_HOST', 'bcitdevcom.ipagemysql.com');
    define('DB_USER', 'comp15362014');
    define('DB_PASSWORD', '2014-1536');
    define('DB_DATABASE', '1536forum');

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	$tbl_name="topic"; // Table name
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>About Us</title>
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<link rel="stylesheet" href="../style/base.css">
</head>
<body>
	<header>
		<h1>About Us</h1>    
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
                <li><a href="#">About Us</a></li>
            </ul>
		</nav>
    <div id="login">
      <a href="../login/loginorsignup.php">Login/Signup</a>
    </div>
	</header>
	
	<main>	
		<div id="wrapper">
			<div id="imgplaceholder">
                
                <p>Team picture here!</p>

			</div>
			
			<div id="teamwrapper">
				<table id="team">
				
				<caption>Meet the team</caption>
				
					<tr class="team_row">
						<th class="team_h">Name</th>
						<th class="team_h">About the team member</th>
					</tr>
					<tr class="team_row">
						<td class="team_d">Tony Pacheco</td>
						<td class="team_d"> </td>
					</tr>
					<tr class="team_row">
						<td class="team_d">Bhagwan Singh Virdi</td> 
						<td class="team_d"></td>
					</tr>
					<tr class="team_row">
						<td class="team_d">Prabhvir Saran</td> 
						<td class="team_d"></td>
					</tr>
					<tr class="team_row">
						<td class="team_d">Liam Maclntyre</td> 
						<td class="team_d"></td>
					</tr>
					<tr class="team_row">
						<td class="team_d">Jaisreet Khaira</td> 
						<td class="team_d"></td>
					</tr>	
				</table>
            </div>
			<div id="comment">
				<h3>Contact us</h3>
                <form method="post" action="http://webdevfoundations.net/scripts/formdemo.asp">
                    <table id="commentstable">
                        <tr>
                            <td>
                            <label for="firstlast">Name:</label><br>
                            <input id="firstlast" type="text" name="Name" required>
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                            <label for="email">Email:</label><br>
                            <input id="email" type="email" name="email" required>
                            </td>
                            <td id="forumcell" rowspan="2">
                                
							</td>
                        </tr>
                    
                        <tr>
                            <td>
                                <label for="comments">Comments:</label><br>
                                <textarea id="comments" rows="5" name="comments" required></textarea><br><br>
                                <input type="submit" value="Submit">
                            </td>
                        </tr>
                    </table>
                </form>
			</div>
			<div id="forum">
				<h3>User Forums</h3>
				<ul>
					<?php
						$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
						$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
						$count = min(5, mysqli_num_rows($result));
						if($count==0)
							echo "<li>No topics</li>";
						else
							for($i=0; $i < $count; $i++){
								$row=mysqli_fetch_array($result);
								echo '<li><a href="../forum/view_topic.php?id='.$row['id'].'">'.$row['topic'].'</a></li>';
							}
					?>
				</ul>
			</div>
		</div>			
	</main>
	
	<footer>
  	<div id="footercontent"> 
			&copy; 2017 some students 
			<a href="../sitemap/sitemap.php">Site Map</a>
    </div>
	</footer>

	<script type="text/javascript" src="aboutus-validate.js"></script>
</body>
</html>
