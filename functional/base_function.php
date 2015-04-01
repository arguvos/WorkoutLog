<?php 
require_once("connection.php");

function go_login()
{
	if(!isset($_SESSION["session_user_id"]))
	{
		header("location: login.php");
		exit;
	}
}

function go_if_logged()
{
	if(isset($_SESSION["session_user_id"]))
	{
		header("location: index.php");
		exit;
	}
}

function logout()
{
	unset($_SESSION['session_user_id']);
	session_destroy();
	header("location:login.php");
}

function get_username_by_id()
{
	if(isset($_SESSION["session_user_id"]))
	{
		require_once($_SERVER['DOCUMENT_ROOT'] . "/project/functional/connection.php");
		$query = "SELECT NAME FROM USERS WHERE ID='".$_SESSION["session_user_id"]."'";
		$result_query = mysql_query($query);
		$table_with_result = mysql_fetch_row($result_query);
		$result = $table_with_result[0];
		return $result;
	}
}

function get_DMY()
{
	$today = getdate();
	$date = $today['year'] . "-" . $today['mon'] . "-" . $today['mday'];
	return $date;
}
?>