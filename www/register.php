<?php
	#include header 
	include 'includes/header.php';


?>	
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

		<h4 class="jumpto">Have an account with us ?<a href="login.php"> Login</a></h4>
	

		</div>

<?php 

#include footer

include 'includes/footer.php';

?>

	