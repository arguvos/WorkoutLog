<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/project/functional/connection.php"); ?>
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
			$query = "ALTER TABLE `$table_name` ADD `$name` INT(10)";
			$result = mysql_query($query);
				
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