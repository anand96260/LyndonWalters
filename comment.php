<?php
$myemail = 'test@lyndonwalters.com';
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone=$_POST['tel'];
$msg = $_POST['message'];
if(isset($name))
{
	$to = $myemail;
	$email_subject = "You Have a New contact submission from: $name";
	$email_body = "You have received a new Comment. ".
			" Here are the details:\n\n 
				Name: $name \n\n 
				Email: $email_address \n\n 
				Phone Number: $phone \n\n 
				Comment:  $msg\n\n";

	$headers = "From: $myemail\n";
	$headers .= "Reply-To: $email_address";

	mail($to,$email_subject,$email_body,$headers);
	
	//redirect to the 'thank you' page
	header('Location: contact-thankyou.html');
}
?>