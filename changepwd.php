<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.validate.min.js"></script>
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
            $("#changepwd").validate({
                rules: {
                	
                    oldpass: {
                        required: true
                        
                    },
                    npass: {
                    	required: true,
                        minlength: 6	
                    },
                    npass2: {
                    	required: true,
                        minlength: 6,
                        equalTo: "#npass"
                    },
                                       
                },
                messages: {
                	oldpass: "Please enter your Old Password",
                    npass: "Please enter your New Password,Min 6 Character",
                    npass2: "Please Repeat your New Password"
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
  </script>
</head>
<?php
if (isset($_POST['submit']))
{ 
$email = $_COOKIE['ID_my_site_walter'];
$check = mysql_query("SELECT * FROM admin WHERE email = '$email'")or die(mysql_error());
while($info = mysql_fetch_array( $check ))
{
	$_POST['oldpass'] = stripslashes($_POST['oldpass']);
	$info['password'] = stripslashes($info['password']);
	$_POST['oldpass'] = md5($_POST['oldpass']);
	//gives error if the password is wrong
	if ($_POST['oldpass'] != $info['password']) {
		ECHO "Old password Incorrect, please try again.";
	}
	elseif ($info['auth']!=1){
		ECHO "wait for login authentication by admin to change password";
	}else
	{
		$_POST['npass'] = md5($_POST['npass']);
 	if (!get_magic_quotes_gpc()) {
 		$_POST['npass'] = addslashes($_POST['npass']);
 		 			}
 // now we insert it into the database
 	$up="UPDATE  `lyndon_walter`.`admin` 
 		SET  `password` =  '{$_POST['npass']}' 
 		WHERE  `admin`.`id` ='{$id}'";
 	$update_password = mysql_query($up);
 	if (!$update_password){
 		echo "Error updating Password"; 
 	}else{
 		print '<script type="text/javascript">';
		print 'alert(" Password Changed")';
		print '</script>';
 		
 	}
}
}
}
?>
<body>
 <div align="center">
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="changepwd" autocomplete="off">
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <table border="0">
 <tr><td>Old Password:</td><td>
 <input type="password" name="oldpass" maxlength="10" required>
 </td></tr>
 <tr><td>New Password:</td><td>
 <input type="password" name="npass" id="npass" required>
 </td></tr>
 <tr><td>Confirm Password:</td><td>
 <input type="password" name="npass2" maxlength="10" id="npass2" required>
 </td></tr>
 <tr><th colspan=2><input type="submit" name="submit" 
value="Change Password"></th></tr> </table>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 </form>
 </div>
 </body>
 </html>
