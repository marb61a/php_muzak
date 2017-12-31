<?php 
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name){
		if(isset($_POST[$name])){
			echo $_POST[$name];
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>PHPMuzak</title>
</head>
<body>
	<?php
		if(isset($_POST['registerButton'])){

		} else {
			
		}
	?>

	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login To Your Account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
			</p>
			<p>
				<label for="loginPassword">Password </label>
				<input id="loginPassword" name="loginPassword" type="password" required>
			</p>

			<button type="submit" name="loginButton">Log In</button>
		</form>

		<form id="registerForm" action="register.php" method="POST">	
			<h2>Create your free account</h2>		
			<p>
				<?php
					echo $account->getError(Constants::$usernameCharacters); 
				?>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="e.g. bartSimpson" required>
			</p>
			<p>
				<?php
					echo $account->getError(Constants::$firstNameCharacters);
				?>
				<label for="firstName">First name</label>
				<input id="firstName" name="firstName" type="text" placeholder="e.g. Bart" required>
			</p>
			<p>
				<?php
					echo $account->getError(Constants::$lastNameCharacters); 
				?>
				<label for="lastName">Last name</label>
				<input id="lastName" name="lastName" type="text" placeholder="e.g. Simpson" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
				<?php echo $account->getError(Constants::$emailInvalid); ?>
				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="e.g. bart@gmail.com" required>
			</p>
			<p>
				<label for="email2">Confirm email</label>
				<input id="email2" name="email2" type="email" placeholder="e.g. bart@gmail.com" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
				<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
				<?php echo $account->getError(Constants::$passwordCharacters); ?>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="Your password" required>
			</p>
			<p>
				<label for="password2">Confirm password</label>
				<input id="password2" name="password2" type="password" placeholder="Your password" required>
			</p>

			<button type="submit" name="registerButton">Register</button>

			<div class="hasAccountText">
				<span id="hideRegister">
					Already have an account? Log in here.	
				</span>
			</div>
		</form>
	</div>

	<div id="loginText">
		<h1>Get great music, right now</h1>
		<h2>Listen to loads of songs for free</h2>
		<ul>
			<li>Discover music you'll fall in love with</li>
			<li>Create your own playlists</li>
			<li>Follow artists to keep up to date</li>
		</ul>	
	</div>
</body>
</html>