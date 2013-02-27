<?php
// Connects to your Database
/* mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db("lyndon") or die(mysql_error()); */
require 'includes/db.php';
if (isset($_POST['submit'])) {
	if (!$_POST['email']) {
		die('You did not complete all of the required fields');
	}
	//email validation
	$email_address = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	if (!$email_address) {
		// The email address is not valid
		die('The email address is not valid');
	}
	$usercheck = $_POST['email'];
	$check = mysql_query("SELECT email FROM news WHERE email = '$usercheck'") or die(mysql_error());
	$check2 = mysql_num_rows($check);
	//if the name exists it gives an error
	if ($check2 != 0) {
		echo 'Sorry, the username '.$_POST['email'].' is already in use.';
	}
	$insert = "INSERT INTO news (email)
 			VALUES ('".$_POST['email']."')";

	$add_member = mysql_query($insert);
}
?>
<form action="newsletter.php" method="post">
        <table><tr>
        <input type="text" name="email" class="email" style="border:1px solid #ccc; padding-left:5px; height:20px; width:200px; background-color:#fff; margin-right:10px;" value="email" />
        </tr><tr>
        <button value="Submit"  id="submit" name="submit" class="search" style="float:center; margin-right:0px; margin-top:15px; width:90px;">Signup</button>
        </tr>
        </table>
        <!-- <a href="" style="font-size:12px;">Sign up</a> -->
</form>