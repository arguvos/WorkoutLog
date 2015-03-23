<?php include("functional/base_function.php"); ?>
<?php go_login() ?>

<?php include("functional/setting.php"); ?>
<?php include("includes/header.php"); ?>
<h1>SETTING</h1>
<div>
	<form action="setting.php" method="post" >
		Add exercises<br />
		<input type="text" name="exercises_name" />
		<p>
			<input type="submit" name="exercises" />
		</p>
	</form>
</div>
<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
<?php include("includes/footer.php"); ?>