<?php include("functional/base_function.php");
go_if_logged();
include("functional/register.php");
include("includes/header.php"); ?>
	<div class="content">
		<article>
			<h2 class="underline">Register</h2>
			<?php if (!empty($message)) echo("Message: ". $message); ?>
			<form method="post" action="" class="label-top">
				<div>
					<label for="name">Email:</label>
					<input type="email" name="email" size="32" />
				</div>
				<div>
					<label for="name">Username:</label>
					<input type="text" name="username" size="32" />
				</div>
				<div>
					<label for="password">Password:</label>				
					<input type="password" name="password" size="32" />
				</div>
				<div>
					<input type="submit" name="register" value="Register" />
				</div>
				<p>Already have an account? <a href="login.php" >Login Here</a>!</p>
			</form>
		</article>
	</div>
<?php include("includes/footer.php"); ?>