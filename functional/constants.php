<?php
// Database Constants
define("DB_SERVER", "localhost");
define("DB_USER", "h78563_db_user");
define("DB_PASS", "0K2e1I6b");
define("DB_NAME", "h78563_database");

// File Constants
define("FILE_FOOTER", $_SERVER['DOCUMENT_ROOT'] . "/project/includes/footer.php");
define("FILE_HEADER", $_SERVER['DOCUMENT_ROOT'] . "/project/includes/header.php");
define("FILE_MENU", $_SERVER['DOCUMENT_ROOT'] . "/project/includes/vertical_menu.php");

define("FILE_PCACHE", $_SERVER['DOCUMENT_ROOT'] . "/project/includes/pCache.class");
define("FILE_PCHART", $_SERVER['DOCUMENT_ROOT'] . "/project/functional/pChart.class");
define("FILE_PDATA", $_SERVER['DOCUMENT_ROOT'] . "/project/functional/pData.class");

define("FILE_BASEFUNCTION", $_SERVER['DOCUMENT_ROOT'] . "/project/functional/base_function.php");
define("FILE_CONNECTION", $_SERVER['DOCUMENT_ROOT'] . "/project/functional/connection.php");
define("FILE_INDEX", $_SERVER['DOCUMENT_ROOT'] . "/project/functional/index.php");
define("FILE_LOGIN", $_SERVER['DOCUMENT_ROOT'] . "/project/functional/login.php");
define("FILE_REGISTER", $_SERVER['DOCUMENT_ROOT'] . "/project/functional/register.php");
define("FILE_SETTING", $_SERVER['DOCUMENT_ROOT'] . "/project/functional/setting.php");
define("FILE_STATISTICS", $_SERVER['DOCUMENT_ROOT'] . "/project/functional/statistics.php");

define("PAGE_LOGIN", "/project/login.php");
define("PAGE_LOGOUT", "/project/logout.php");
define("PAGE_SETTING", "/project/setting.php");
define("PAGE_INDEX", "/project/index.php");
define("PAGE_REGISTER", "/project/register.php");
define("PAGE_STATISTICS", "/project/statistics.php");
?>