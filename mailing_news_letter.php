<?php include 'adminpwd.php';?>
<?php include 'admin_header.php';?>
<?php
if(isset($_POST['emailSubject']) && isset($_POST['emailBody']) && strlen($_POST['emailSubject'])>1 && strlen($_POST['emailBody'])>1 )
{

include('class.phpmailer.php');

// Get users info
$getUser_Sql = 'SELECT * FROM news WHERE auth=1';
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
$emailBody ="Dear ".$row['name']."\n\n";
$emailBody .=$_POST['emailBody'];
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
<input name="emailSubject" type="text" size="100" required />
<br /><br />
<strong>Email text</strong><br />
<textarea name="emailBody" cols="100" rows="20" required ></textarea>
<br /><br />
<button name="send" type="submit" value="Send" class="search" style="float:right; margin-right:0px; margin-top:15px; width:200px; margin-right:10px;" />
Send </button>
</form>
<?php include 'admin_footer.php';?>