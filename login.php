<?php include("functional/base_function.php"); ?>
<?php go_if_logged() ?>

<?php include("functional/login.php"); ?>
<?php include("includes/header.php"); ?>   
	<div class="content">
		<article>
			<h2 class="underline">Log In</h2>
			<form method="post" action="functional/login.php" class="label-top">
				<div>
					<label for="name">Username:</label>
					<input type="text" name="username" size="32" />
				</div>
				<div>
					<label for="password">Password:</label>				
					<input type="password" name="password" size="32" />
				</div>
				<div>
					<input type="submit" name="login" value="Log In" />
				</div>
				<p>No account yet? <a href="register.php" >Register Here</a>!</p>
			</form>
		</article>
	</div>
<?php include("includes/footer.php"); ?>

<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>