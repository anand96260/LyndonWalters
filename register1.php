<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.validate.min.js"></script>
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
                    	digits: true,
                    	equalTo: "#pass",
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


</script></head>
<?php 
 // Connects to your Database 
/*  mysql_connect('localhost','root','') or die(mysql_error()); 
 mysql_select_db("lyndon") or die(mysql_error());  */

require 'includes/db.php';

 //This code runs if the form has been submitted
 if (isset($_POST['submit'])) { 
 //This makes sure they did not leave any fields blank
 if (!$_POST['username'] |!$_POST['email'] | !$_POST['pass'] | !$_POST['pass2'] ) {
 		die('You did not complete all of the required fields');
 	}
 // checks if the username is in use
 	if (!get_magic_quotes_gpc()) {
 		$_POST['email'] = addslashes($_POST['email']);
 	}
 $usercheck = $_POST['email'];
 $check = mysql_query("SELECT email FROM admin WHERE email = '$usercheck'") or die(mysql_error());
 $check2 = mysql_num_rows($check);
 //if the name exists it gives an error
 if ($check2 != 0) {
 		die('Sorry, the username '.$_POST['email'].' is already in use.');
}
//email vaildition
$email_address = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if (!$email_address) {
	// The email address is not valid
	die('The email address is not valid');
}
 // this makes sure both passwords entered match
 	if ($_POST['pass'] != $_POST['pass2']) {
 		die('Your passwords did not match. ');
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
 	$_POST['pass'] = md5($_POST['pass']);
 	if (!get_magic_quotes_gpc()) {
 		$_POST['pass'] = addslashes($_POST['pass']);
 		$_POST['username'] = addslashes($_POST['username']);
 			}
 // now we insert it into the database
 	$insert = "INSERT INTO admin (username, password ,email)
 			VALUES ('".$_POST['username']."', '".$_POST['pass']."', '".$_POST['email']."')";
 	$add_member = mysql_query($insert);
 	?>
 <h1>Registered</h1>
 <p>Thank you, you have registered - you may now login.</p>
  <?php 
 } 
 else 
 {	
 ?>
 <html>
 <body>
 <div align="center">
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="register" autocomplete="off">
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <table border="0">
 <tr><td>Username:</td><td>
 <input type="text" name="username" maxlength="60">
 </td></tr>
 <tr><td>Email:</td><td>
 <input type="text" name="email" maxlength="60" >
 </td></tr>
 <tr><td>Telephone:</td><td>
 <input type="password" name="pass" maxlength="10" id="pass" class="onlydigits">
 </td></tr>
 <tr><td>Repeat Telephone:</td><td>
 <input type="password" name="pass2" maxlength="10" id="pass2" class="onlydigits">
 </td></tr>
  <tr><td align="center"><?php require_once 'recapcha/sample.php';?></td></tr>
 <tr><th colspan=2><input type="submit" name="submit" 
value="Register" class="btn-submit"></th></tr> </table>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 </form>
 </div>
 </body>
 </html>
 
 <?php
 }
 ?>
