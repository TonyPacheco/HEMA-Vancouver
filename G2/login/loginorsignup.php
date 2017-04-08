<?php
	include '../forum/functions.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login/Signup</title>
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
	<link rel="stylesheet" href="../style/base.css">	
</head>
<body>
	<header>
		<h1>HEMA</h1>
		<nav>
			<ul>
				<li><a href="../index.php">Home</a></li>
				
				<li class="dropdown">
					<a href="" class="button">HEMA </a>
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
				echo '<a href="login/loginorsignup.php">Login / Signup</a>';
			}
		?>

		</div>
		    
	</header>
	
	<main>
		<div id="wrapper">
			<div id="loginpanel">
				<div class="loginform">
					<form method="post" action="../forum/login.php">
						<table>
							<tr>
								<td class="logintitle" colspan="2">
									Log in
								</td>
							</tr>
							<tr>
								<td>
									<label for="login_id">Login:</label>
								</td>
								<td>
									<input type="text" name="login_id" id="login_id" required>
								</td>
							</tr>
							<tr>
								<td>
									<label for="login_password">Password:</label>
								</td>
								<td>
									<input type="password" name="login_password" id="login_password" required>
								</td>
							</tr>
							<tr>
								<td>
									<?php
										if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
											echo '<ul class="err">';
											foreach($_SESSION['ERRMSG_ARR'] as $msg) {
												echo '<li>',$msg,'</li>'; 
											}
											echo '</ul>';
											unset($_SESSION['ERRMSG_ARR']);
										}
									?>
								</td>
							</tr>
							<tr>
								<td class="loginsubmit" colspan="2">
									<input type="submit" value="submit">
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
			
			<div id="registerpanel">
				<div class="loginform">
					<form onsubmit="return checkRegistration()" method="post" action="../forum/register.php">
						<table>
							<tr>
								<td class="logintitle" colspan="2">
									Sign up
								</td>
							</tr>
							<tr>
								<td>
									<label for="register_id">Login</label>
								</td>
								<td>
									<input type="text" name="register_id" id="register_id" required>
								</td>
							</tr>


							<tr>
								<td>
									<label for="register_fname">First name:</label>
								</td>
								<td>
									<input type="text" name="register_fname" id="register_fname" required>
								</td>
							</tr>
							<tr>
								<td>
									<label for="register_lname">Last Name:</label>
								</td>
								<td>
									<input type="text" name="register_lname" id="register_lname" required>
								</td>
							</tr>
							<tr>
								<td>
									<label 
									for="register_password">Password:</label>
								</td>
								<td>
									<input type="password" name="register_password" id="register_password" 
									class="tooltipwidget" title="Min 8 characters, at least 1 capital, 1 number and only !@#%^&*_ symbols are allowed." required>
								</td>
							</tr>
							<tr>
								<td>
									<label for="register_cpassword">Confirm 
									password:</label>
								</td>
								<td>
									<input type="password" name="register_cpassword" id="register_cpassword" class="tooltipwidget" 
									title="Min 8 characters, at least 1 capital, 1 number and only !@#%^&*_ symbols are allowed." required>
								</td>
							</tr>
							<tr>
								<td id="passwordReqs" colspan="2">
									Password must be at least 8 characters long and contain a capital and numeral.
								</td>
							</tr>
							<tr>
								<td class="loginsubmit" colspan="2">
									<input type="submit" value="submit">
								</td>
							</tr>
							<tr>
								<?php
									if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
										echo '<ul class="err">';
										foreach($_SESSION['ERRMSG_ARR'] as $msg) {
											echo '<li>',$msg,'</li>'; 
										}
										echo '</ul>';
										unset($_SESSION['ERRMSG_ARR']);
									}
								?>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>	
	</main>
	
	<footer>
		<div id="footercontent"> 
			&copy; 2017 some students 
			<a href="../sitemap/sitemap.php">Site Map</a>
		</div>
	</footer>

	<script type="text/javascript" src="loginorsignup-validate.js"></script>
</body>
</html>
