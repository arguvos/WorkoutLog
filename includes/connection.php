<?php
	require("constants.php");
	session_start();
	$con = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die(mysql_error());
	mysql_select_db(DB_NAME) or die("Cannot select DB");
?>