<?php include("functional/base_function.php"); ?>
<?php go_login() ?>

<?php include("functional/setting.php"); ?>
<?php include("includes/header.php"); ?>
	<div class="content">
		<article>
			<h2 class="underline">Setting</h2>
			<form method="post" action="setting.php" class="label-top">
				<div>
					<label for="name">Add exercises:</label>
					<input type="text" name="exercises_name" size="32" />
				</div>
				<div>
					<input type="submit" name="exercises" value="Add" />
				</div>
			</form>
		</article>
	</div>
<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
<?php include("includes/footer.php"); ?>