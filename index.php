<?php include("functional/base_function.php"); ?>

<?php go_login() ?>

<?php include("includes/header.php"); ?>
	<div class="content">
		<article>
			<h2 class="underline">Welcome</h2>
			<h4>Welcome, <?php echo $_SESSION['session_user_id']; ?>!</h4>
			<form method="post" action="" class="label-top">
				<div>
					<label for="name">Name of exercises:</label>
					<input type="text" name="name_exercises" size="32" />
				</div>
				<div>
					<label for="name">Number of exercises:</label>
					<input type="text" name="number_exercises" size="32" />
				</div>
				<div>
					<input type="submit" name="update" value="Update" />
				</div>
			</form>

			<form method="post" action="setting.php" class="label-top">
				<button type="submit" size="32">Setting</button>
			</form>

			<p><a href="logout.php">Logout</a> Here!</p>
		</article>
	</div>
<?php include("includes/footer.php"); ?>