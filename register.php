<?php 
 // Connects to your Database 
/*  mysql_connect('localhost','root','') or die(mysql_error()); 
 mysql_select_db("lyndon") or die(mysql_error());  */

require 'includes/db.php';

 // checks if the username is in use
 	if (!get_magic_quotes_gpc()) {
 		$_POST['email'] = addslashes($_POST['email']);
 	}
 $usercheck = $_POST['email'];
 $check = mysql_query("SELECT email FROM register WHERE email = '$usercheck'") or die(mysql_error());
 $check2 = mysql_num_rows($check);
 //if the name exists it gives an error
 if ($check2 != 0) {
 		die('Sorry, the username '.$_POST['email'].' is already in use.');
}
 	// captcha verification
 	require_once 'recapcha/recaptchalib.php';
 	$privatekey = "6Lfim9oSAAAAADuDgql5xoiwa6ka_Q2FEku00HDp";
 	$resp = recaptcha_check_answer ($privatekey,
 			$_SERVER["REMOTE_ADDR"],
 			$_POST["recaptcha_challenge_field"],
 			$_POST["recaptcha_response_field"]);
 	
 	if (!$resp->is_valid) {
 		// What happens when the CAPTCHA was entered incorrectly
 		die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
 				"(reCAPTCHA said: " . $resp->error . ")");
 	}
 	// here we encrypt the password and add slashes if needed
	$tele=$_POST['pass'];
 	$_POST['pass'] = md5($_POST['pass']);
 	if (!get_magic_quotes_gpc()) {
 		$_POST['pass'] = addslashes($_POST['pass']);
 		$_POST['username'] = addslashes($_POST['username']);
 			}
 // now we insert it into the database
 	$insert = "INSERT INTO register (username, password ,email)
 			VALUES ('".$_POST['username']."', '".$_POST['pass']."', '".$_POST['email']."')";
 	$add_member = mysql_query($insert);
	if(!add_member)
	{
	echo "error";
	}else
	{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$to = $myemail;
 	$email_subject = "You Have a New SignUp from: $name";
 	$email_body = "You have received a new SignUp from $name. ".
 			" Here are the details:\n\nName: $name \n\nEmail: $email \n\nTelephone:  $tele\n\n";
 
 	$headers = "From: $email\n";
 	$headers .= "Reply-To: $email_address";
 
 	mail($to,$email_subject,$email_body,$headers);
	?>
	ThankYou!!!<br/>
	Your Account will be activated after Lyndon's Review.
	<?php
	}
	?>