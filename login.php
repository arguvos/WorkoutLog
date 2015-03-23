<?php include("functional/base_function.php"); ?>
<?php go_if_logged() ?>

<?php include("functional/login.php"); ?>
<?php include("includes/header.php"); ?>
<h1>LOGIN</h1>
<div>
	<form method="post" action="functional/login.php">
		<p>
			Username<br />
			<input type="text" name="username" size="32" />
		</p>
		<p>
			Password<br />
			<input type="password" name="password" size="32" />
		</p>
		<p>
			<input type="submit" name="login" value="Log In" />
		</p>
		<p>No account yet? <a href="register.php" >Register Here</a>!</p>
	</form>
</div>
<?php include("includes/footer.php"); ?>

<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>