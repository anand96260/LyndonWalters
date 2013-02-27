<?php
define("DB_SERVER", "localhost");
define("DB_USER", "lyndon_walter");
define("DB_PASS", "Lyndon@007!");
define("DB_NAME", "lyndon_walter");
// 1. Create a database connection
$connection = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if (!$connection) {
	die("Database connection failed: " . mysql_error());
}

// 2. Select a database to use
$db_select = mysql_select_db(DB_NAME,$connection);
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
}


function redirect_to($location = null)
{
	if ($location != null) {
		header("Location: $location");
		exit;

	}

}
$myemail= 'test@lyndonwalters.com';
?>