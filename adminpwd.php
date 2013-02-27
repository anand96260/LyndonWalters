<?php
include 'includes/db.php';

/* mysql_connect('localhost','root','') or die(mysql_error()); 
mysql_select_db("lyndon") or die(mysql_error());  */

if(isset($_COOKIE['ID_my_site_walter']))
//if there is, it logs you in and directes you to the members page
{
	$email = $_COOKIE['ID_my_site_walter'];
	$pass = $_COOKIE['Key_my_site'];
	$check = mysql_query("SELECT * FROM admin WHERE email = '$email'")or die(mysql_error());
	while($info = mysql_fetch_array( $check ))
	{
		if ($pass != $info['password'])
		{
			//dono
			header("Location: adminlogin.php");
			exit;
		}
		else
		{
			//redirect_to("admin.php");
			//echo "Login Success";
			$id=$info['id'];
		}
	}
}
else
{
/* redirect_to("adminlogin.php"); */
	header("Location: adminlogin.php");
	exit;
}
?>