<?php include("functional/base_function.php"); ?>

<?php go_login() ?>

<?php include("includes/header.php"); ?>
<h1>WELCOME</h1>
<div>
	<form method="post" action="">
		Welcome, <?php echo $_SESSION['session_user_id']; ?>!
		<p>
			Name of exercises:<br />
			<input type="text" name="name_exercises"  size="32" />
		</p>

		<p>
			Number of exercises:<br />
			<input type="text" name="number_exercises"  size="32" />
		</p>

		<p>
			<input type="submit" name="update" size="32" />
		</p>
	</form>

	<form method="post" action="setting.php">
		<button type="submit" size="32">Setting</button>
	</form>

	<p><a href="logout.php">Logout</a> Here!</p>
</div>
<?php include("includes/footer.php"); ?>