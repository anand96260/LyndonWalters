<?php 
// Connects to your Database 

 require 'includes/db.php';
//print_r($_POST);
$insert = "INSERT INTO pbooking (name ,telephone ,
								email ,address ,
								time ,date ,
								cb1 ,cb2 ,
								cb3 ,cb4 ,
								cb5 )
 			VALUES ('".$_POST['name']."', '".$_POST['telephone']."',
 					'".$_POST['email']."','".$_POST['address']."',
 					'".$_POST['time']."','".$_POST['date']."',
 					'".$_POST['checkbox1']."','".$_POST['checkbox2']."',
 					'".$_POST['checkbox3']."','".$_POST['checkbox4']."',
 					'".$_POST['checkbox5']."')";
$pb = mysql_query($insert);
if(isset($_POST['name']))
{	
 $name = $_POST['name'];
 $telephone = $_POST['telephone'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $time = $_POST['time'];
 $date = $_POST['date'];
if($_POST['checkbox1']==1){
		$cb1="One-with-One Interactive Session\n";
	}else{
		$cb1="";
	}
if($_POST['checkbox2']==1){
		$cb2="Conflict Resolution Session (individual or couples)\n";
	}else{
		$cb2="";
	}
if($_POST['checkbox3']==1){
		$cb3="Group Events, Inspirational Speaking & Workshops\n";
	}else{
		$cb3="";
	}
if($_POST['checkbox4']==1){
		$cb4="Phobias\n";
	}else{
		$cb4="";
	}
if($_POST['checkbox5']==1){
		$cb5="Corporate\n";
	}else{
		$cb5="";
	}
 	$to = $myemail;
 	$email_subject = "You Have a New Provisional Booking submission from: $name";
 	$email_body = "You have received a new Provisional Booking. ".
 			" Here are the details:\n\n Name: $name \n\nEmail: $email \n\nTelephone:  $telephone\n\nTime to Call:  \n\nDate to call: $date \n\n$cb1$cb2$cb3$cb4$cb5";
 
 	$headers = "From: $email\n";
 	$headers .= "Reply-To: $email_address";
 
 	mail($to,$email_subject,$email_body,$headers);
 	echo "Thank You!!";
 }
?>