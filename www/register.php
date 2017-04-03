	<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
	<section>
		<div class="mast">
			<h1>T<span>SSB</span></h1>
		</div>
	</section>
	
	<div class="wrapper">
		<h1 id="register-label">Admin Register</h1>
		<hr>
		<form id="register"  action ="register.php" method ="POST">
			<div>
				<label>First name:</label>
				<input type="text" name="fname" placeholder="last name">
			</div>
			<div>
				<label>Last name:</label>
				<input type="text" name="lname" placeholder="last name">
			</div>
			<div>
				<label>email:</label>
				<input type="text" name="email" placeholder="email">
			</div>
			<div>
				<label>password:</label>
				<input type="password" name="password" placeholder="password">
			</div>
			<div>
				<label>Confirm Password:</label>
				<input type="password" name="password" placeholder="password">
			</div>


			<input type="submit" name="register" value="register">
		</form>

		</div>
	<!--	<h4 class="jumpto">Don't have an account? <a href="register.php">register</a></h4>
	

	<section class="foot">
		<div>
			<p>&copy; 2016</p>
		</div>
	</section> -->
</body>
</html>