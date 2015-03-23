<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/project/includes/connection.php"); ?>
<?php
if(isset($_POST['login']))
{
	login();
}

function login()
{
	if(isset($_POST["login"]))
	{
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
					echo('SESSION=' . $_SESSION['session_user_id']);
					//echo '<script type="text/javascript"> window.location = "../index.php" </script>';
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
}
?>