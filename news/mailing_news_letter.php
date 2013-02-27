<?php include 'adminpwd.php';?>
<?php include 'admin_header.php';?>
<?php
if(isset($_POST['emailSubject']) && isset($_POST['emailBody']) && strlen($_POST['emailSubject'])>1 && strlen($_POST['emailBody'])>1 )
{
include('includes/db.php');
include('class.phpmailer.php');

// Get users info
$getUser_Sql = 'SELECT email FROM news WHERE auth=1';
$getUser = mysql_query($getUser_Sql);

// Post Variables
$emailSubject = $_POST['emailSubject'];
$emailBody =$_POST['emailBody'];

while ($row = mysql_fetch_array($getUser)) {
// Get the current user's email
$emailUser = $row['email'];
// Define mail object and mail parameters
$mail = new PHPMailer();
$mail->From = 'no-reply@lyndonwalters.com';
$mail->FromName = 'Lyndonwalters';
$mail->AddAddress($emailUser);
$mail->Subject = $emailSubject;
$mail->Body = $emailBody;
// Send and verify
if(!$mail->Send()) {
echo 'Your message was not sent to '. $emailUser;
echo 'Error is: '. $mail->ErrorInfo;
} else {
echo 'The message has been sent to '.$emailUser;
echo "<br/>";
}
}
}
?>

<form action="" method="post">
<strong>Email Subject</strong><br />
<input name="emailSubject" type="text" size="32" />
<br /><br />
Email text<br />
<textarea name="emailBody" cols="20" rows="6"></textarea>
<br />
<input name="send" type="submit" value="Send!" />
</form>
<?php include 'admin_footer.php';?>