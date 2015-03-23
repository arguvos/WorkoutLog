<?php 
function go_login()
{
	session_start();
	if(!isset($_SESSION["session_user_id"]))
	{
		header("location: login.php");
		exit;
	}
}

function go_if_logged()
{
	session_start();
	if(isset($_SESSION["session_user_id"]))
	{
		header("location: index.php");
		exit;
	}
}

function logout()
{
	session_start();
	unset($_SESSION['session_user_id']);
	session_destroy();
	header("location:login.php");
}
?>