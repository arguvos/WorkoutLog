<?php include("functional/base_function.php");
go_login();
include(FILE_SETTING);
include(FILE_HEADER);
include(FILE_MENU); ?>
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
<?php include(FILE_FOOTER); ?>