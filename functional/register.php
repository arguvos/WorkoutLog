<?php
$message = "";
if(isset($_POST['register']))
{
   register();
}

function register()
{
	global $message;
	if (!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']))
	{
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		
		$query = "SELECT * FROM USERS WHERE NAME='".$username."'";
		$result = mysql_query($query);
		$numrows = mysql_num_rows($result);
		
		if ($numrows == 0)
		{
			$sql_add_user = "INSERT INTO USERS  (EMAIL,NAME,PASSWORD) VALUES('$email', '$username', '$password')";
			$result_add_user = mysql_query($sql_add_user);

			$sql_get_user_id = "SELECT ID FROM `USERS` WHERE NAME='$username'";
			$result_get_user_id = mysql_query($sql_get_user_id);
			$table_with_user_id = mysql_fetch_row($result_get_user_id);
			$name = "EXERCISES_". $table_with_user_id[0];

			$sql_create_user_table = "CREATE TABLE `$name` (`ID` INT(10) NOT NULL AUTO_INCREMENT, `WEIGHT` INT(10) NOT NULL, `DAY` DATE NOT NULL, PRIMARY KEY (`ID`))";
			$result_create_user_table = mysql_query($sql_create_user_table);

			if ($result_add_user and $result_get_user_id and $result_create_user_table)
			{
				$message = "Account Successfully Created";
			}
			else
			{
				$message = "Failed to insert data information!";
			}
		}
		else
		{
				$message = "That username already exists! Please try another one!";
		}
	}
	else
	{
		$message = "All fields are required!";
	}
}
?>