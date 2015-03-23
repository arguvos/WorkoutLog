<?php include("functional/base_function.php"); ?>
<?php go_if_logged() ?>

<?php include("functional/register.php"); ?>
<?php include("includes/header.php"); ?>
<h1>REGISTER</h1>
<div>
	<form method="post" action="register.php">
		<p>
			Email<br />
			<input type="email" name="email" size="32" />
		</p>
		
		<p>
			Username<br />
			<input type="text" name="username" size="32" />
		</p>
		
		<p>
			Password<br />
			<input type="password" name="password" size="32" />
		</p>	

		<p>
			<input type="submit" name="register" value="Register" />
		</p>
		
		<p>Already have an account? <a href="login.php" >Login Here</a>!</p>
	</form>
</div>
<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
<?php include("includes/footer.php"); ?>