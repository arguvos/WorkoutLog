<?php
$message = "";
if(isset($_POST['update']))
{
	update();
}

function update()
{
	global $message;
	if(!empty($_POST['name_exercises']) && !empty($_POST['number_exercises']))
	{
		$table_name = "EXERCISES_" . $_SESSION["session_user_id"];
		$name_exercises = $_POST['name_exercises'];
		$number_exercises = ($_POST['number_exercises']);
		$date = get_DMY();

		$query = "SELECT `ID` FROM `".$table_name."` WHERE `DATE`='".$date."'";
		$result_select_id_query = mysql_query($query);
		$numrows = mysql_num_rows($result_select_id_query);

		if ($numrows == 0)
		{
			$query = "INSERT INTO `".$table_name."` (`".$name_exercises."` , `DATE`) VALUES(".$number_exercises.",  '".$date."')";
			$result = mysql_query($query);
		}
		else
		{
			$table_with_id = mysql_fetch_row($result_select_id_query);
			$query = "UPDATE `".$table_name."` SET `".$name_exercises."`=".$number_exercises." WHERE ID = ".$table_with_id[0]."";
			$result = mysql_query($query);
		}
		
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
?>