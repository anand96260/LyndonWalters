<?php 
 // Connects to your Database 
/*  mysql_connect('localhost','root','') or die(mysql_error()); 
 mysql_select_db("lyndon") or die(mysql_error());  */

require 'includes/db.php';
if(isset($_POST['username'])){
 // checks if the username is in use
 	if (!get_magic_quotes_gpc()) {
 		$_POST['email'] = addslashes($_POST['email']);
 	}
 $usercheck = $_POST['email'];
 $check = mysql_query("SELECT email FROM register WHERE email = '$usercheck'") or die(mysql_error());
 $check2 = mysql_num_rows($check);
 //if the name exists it gives an error
 if ($check2 != 0) {
 		die('Sorry, the email '.$_POST['email'].' is already in use.Please use another');
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
 	/*$_POST['pass'] = md5($_POST['pass']);
 	if (!get_magic_quotes_gpc()) {
 		$_POST['pass'] = addslashes($_POST['pass']);
 		$_POST['username'] = addslashes($_POST['username']);
 			}*/
 // now we insert it into the database
 	$insert = "INSERT INTO register (username, password ,email,paypal)
 			VALUES ('".$_POST['username']."', '".$_POST['pass']."', '".$_POST['email']."', '".$_POST['pass2']."')";
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
	$emailsubject= "Confirmation mail - Lyndonwalters.com";
	$emailbody = "Thankyou $name for your signup at lyndonwalters.com.\n you soon get a confirmation mail from LyndonWalters once your Account get activated.";
	$header="From:$to\n";
	$header.="Reply-To:$to";
	mail($email,$emailsubject,$emailbody,$header);
	?>
	ThankYou!!!<br/>
	Your Account will be activated after Lyndon's Review.
	<?php
	}
	}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
<script type="text/javascript">
$('.alphaonly').bind('keyup blur',function(){ 
    $(this).val( $(this).val().replace(/[^a-z]/g,'') ); }
);
</script>
<script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */

(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#register").validate({
                rules: {
                	username: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    pass: {
                    	required: true,
                    	digits: true,
                        minlength: 10
                        
                    },
                    pass2: {
                    	required: true,
                    	minlength: 10
                        
                        
                    },
                                       
                },
               
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);


$(document).ready(function() {
    $(".onlydigits").keydown(function(event) {
        // Allow: backspace, delete, tab, escape, and enter
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
             // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
             // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault(); 
            }   
        }
    });
});


</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="SpryAssets/structure.css" rel="stylesheet" type="text/css" media="screen" />
<title>Provisional Booking</title>


<script>
// This adds 'placeholder' to the items listed in the jQuery .support object. 
jQuery(function() {
   jQuery.support.placeholder = false;
   test = document.createElement('input');
   if('placeholder' in test) jQuery.support.placeholder = true;
});
// This adds placeholder support to browsers that wouldn't otherwise support it. 
$(function() {
   if(!$.support.placeholder) { 
      var active = document.activeElement;
      $(':text').focus(function () {
         if ($(this).attr('placeholder') != '' && $(this).val() == $(this).attr('placeholder')) {
            $(this).val('').removeClass('hasPlaceholder');
         }
      }).blur(function () {
         if ($(this).attr('placeholder') != '' && ($(this).val() == '' || $(this).val() == $(this).attr('placeholder'))) {
            $(this).val($(this).attr('placeholder')).addClass('hasPlaceholder');
         }
      });
      $(':text').blur();
      $(active).focus();
      $('form:eq(0)').submit(function () {
         $(':text.hasPlaceholder').val('');
      });
   }
});

</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>



</head>


<body>

<div id="inner">
	<h1>Apply For Membership</h1>

  <div id="pleftcol">
   	<h2>Please sign in below with your details</h2>
      <p> Please fill in the form below to apply for your membership. After submitting your details Lyndon will get back to you and activate your membership.</p>
      <form action="" method="post" id="register" autocomplete="off">
      <fieldset>
      
      	<input type="text" class="topfields required" name="username" maxlength="60" placeholder="Name" />
        <input type="text" class="topfields required email" name="email" maxlength="60" placeholder="Email Address" />
        <input type="text" class="topfields required onlydigits" maxlength="10" name="pass" id="pass"  placeholder="Telephone" />
        <input type="text" class="topfields required email"  maxlength="60" name="pass2" id="pass2"  placeholder="PAYPAL ACCOUNT" /><br />
		<?php require_once 'recapcha/sample.php';?>
      
	  <button class="search" type="submit" style="margin-left:2px; margin-top:30px; width:330px">Subcribe</button>
	  </fieldset>
      </form>
	  
      
      
    
    
    
    
    
      
      
  </div>
  <div id="listright" style="width:380px; margin-top:30px; float:right;">
                  <h2 style="font-size:16px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#666666; margin-bottom:10px;">Advantages</h2>
                  
                  
              
                  <ul style="width:380px;">
                <li><span style="font-weight:bold; text-decoration:underline;">Free Membership</span> Worth £150 per annum</li>
                <li><span style="font-weight:bold; text-decoration:underline;">Free</span> Monthly Newsletter </li>
                <li>Immediate <span style="font-weight:bold; text-decoration:underline;color:#75B61B;"> reduction</span> in cost for 'One-with-One' Personal Session for individual member </li>
                <li>Periodic <span style="font-weight:bold; text-decoration:underline;color:#75B61B;"> reduction</span> in cost for ‘Packaged’ ‘One-with-One’ Personal Sessions* (N.B. time sensitive notifications, applications and bookings apply)</li>
                <li>Access to the <span style="font-weight:bold; text-decoration:underline;">Benefits of 'Purchaser Voucher'<br />
System ©</span></li>
                <li>Ability to purchase 'Gift' for <span style="font-weight:bold; text-decoration:underline;">Beneficiary with Purchaser Voucher System ©**</span></li>
                <li>Access to <span style="font-weight:bold; text-decoration:underline;">‘Preferred Notification’</span> for 'Early Bird' and 'Specials' for Group Events (e.g. Workshops)</li>
                <li>Possibility of <span style="font-weight:bold; text-decoration:underline;">'Free' e-book</span>
                </li>
                </ul>
                <br />
                <p style="color:#75B61B;"><a href="terms-conditions.html" target="_blank">*Terms &amp; Conditions apply.</a> </p>
               <p>&nbsp;</p>
    </div>
</div>




</body>
</html>