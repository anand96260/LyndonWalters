 <?php 
require 'includes/db.php';
if(isset($_POST['bmeet'])){
  	$insert = "INSERT INTO `lyndon_walter`.`testimornial` (name ,email ,location ,bmeet ,ameet)
 			VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['location']."','".$_POST['bmeet']."','".$_POST['ameet']."')";
 	$add_member = mysql_query($insert);
	}
if(isset($_POST['name']))
{	
 $name = $_POST['name'];
 $email_address = $_POST['email'];
 $location = $_POST['location'];
 $bmeet = $_POST['bmeet'];
  $ameet = $_POST['ameet'];
 
 	$to = $myemail;
 	$email_subject = "You Have a New Testimonial submission from: $name";
 	$email_body = "You have received a new Testimonials. ".
 			" Here are the details:\n\n Name: $name \n\nEmail: $email_address \n\nLocation:  $location\n\nBefore I meet: $bmeet \n\nAfter I meet: $ameet \n\n";
 
 	$headers = "From: $email_address\n";
 	$headers .= "Reply-To: $email_address";
 
 	mail($to,$email_subject,$email_body,$headers);
 	
	//echo "Thank you!!!";
	redirect_to(testimonials.php);
 }
 
?>

		
	