<?php include("functional/base_function.php");
go_login();
include(FILE_STATISTICS);
include(FILE_HEADER);
include(FILE_MENU); ?>
	<div class="content">
		<article>
			<h2 class="underline">Statistics</h2>
			<?php if (!empty($message)) echo("Message: ". $message); ?>
			<?php print_table() ?>			
		</article>
	</div>
<?php include(FILE_FOOTER); ?>