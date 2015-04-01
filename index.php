<?php include("functional/base_function.php");
go_login();
include(FILE_INDEX);
include(FILE_HEADER);
include(FILE_MENU); ?>
	<div class="content">
		<article>
			<h2 class="underline">Welcome</h2>
			<h4>Welcome, <?php echo get_username_by_id(); ?>!</h4>
			<h5>Today: <?php echo get_DMY(); ?></h5>
			<?php if (!empty($message)) echo("Message: ". $message); ?>
			<form method="post" action="" class="label-top">
				<div>
					<label for="name">Name of exercises:</label>
					<input type="text" name="name_exercises" size="32" />
				</div>
				<div>
					<label for="name">Number of exercises:</label>
					<input type="text" id="number_exercises" name="number_exercises" size="32" />
				</div>
				<script>
					input = document.getElementById('number_exercises')
					input.onkeyup = function(){this.value = this.value.replace(/[^0-9]/g,'')}
				</script>
				<div>
					<input type="submit" name="update" value="Update" />
				</div>
			</form>
		</article>
	</div>
<?php include(FILE_FOOTER); ?>