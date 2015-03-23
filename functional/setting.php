<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/project/includes/connection.php"); ?>
<?php
if(isset($_POST['exercises']))
{
	add_exercises();
}

function add_exercises()
{
	if (isset($_POST["exercises"]))
	{
		if (!empty($_POST['exercises_name']))
		{
			echo($_SESSION["session_user_id"]);
			$name = $_POST['exercises_name'];
			$table_name = "EXERCISES_". $_SESSION["session_user_id"];
			$sql = "ALTER TABLE `$table_name` ADD `$name` INT(10)";
			$result = mysql_query($sql);
				
			if ($result)
			{
				$message = "Added";
			}
			else
			{
				$message = "Failed to insert data information!";
			}
		}
		else
		{
			$message = "All fields are required!";
		}
	}
}
?>