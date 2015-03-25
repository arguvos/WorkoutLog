<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/project/functional/connection.php");
$message = "";
if(isset($_POST['login']))
{
	login();
}

function login()
{
	global $message;
	if(!empty($_POST['username']) && !empty($_POST['password']))
	{
		$username=$_POST['username'];
		$password=md5($_POST['password']);

		$query =mysql_query("SELECT * FROM USERS WHERE NAME='".$username."' AND PASSWORD='".$password."'");

		$numrows=mysql_num_rows($query);
		if($numrows!=0)
		{
			while($row=mysql_fetch_assoc($query))
			{
				$dbid=$row['ID'];
				$dbusername=$row['NAME'];
				$dbpassword=$row['PASSWORD'];
			}

			if($username == $dbusername && $password == $dbpassword)
			{
				$_SESSION['session_user_id']=$dbid;
				header("location: " . PAGE_INDEX);
			}
		}
		else 
		{
			$message =  "Invalid username or password!";
		}
	}
	else
	{
		$message = "All fields are required!";
	}
}
?>