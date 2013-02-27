<?php
include 'includes/db.php';
if(isset($_COOKIE['ID_my_site']))
//if there is, it logs you in and directes you to the members page
{
	$email = $_COOKIE['ID_my_site'];
	$pass = $_COOKIE['Key_my_site'];
	$check = mysql_query("SELECT * FROM register WHERE username = '$email'")or die(mysql_error());
	while($info = mysql_fetch_array( $check ))
	{
		if ($pass != $info['email'])
		{
			//dono
		}
		else
		{
			//redirect_to("payment-options.php");
			 header("Location: payment-options.php");
			/*exit; */
			//echo "Login Success";
		}
	}
}

?>
<?php	 
	 //if the login form is submitted
if (isset($_POST['submit']))
{ // if form has been submitted
// checks it against the database
		if (!get_magic_quotes_gpc())
			{
				$_POST['email'] = addslashes($_POST['email']);
			}
$check = mysql_query("SELECT * FROM register WHERE username = '".$_POST['email']."'")or die(mysql_error());
//Gives error if user dosen't exist
$check2 = mysql_num_rows($check);
if ($check2 == 0)
{
	//die('That user does not exist in our database.');
	echo "<script> alert(\"That user does not exist in our database.\"); </script>	";
	//Print "User does not exist in our database.";
}
else{while($info = mysql_fetch_array( $check ))
{
	/*$_POST['pass'] = stripslashes($_POST['pass']);
	$info['password'] = stripslashes($info['password']);
	$_POST['pass'] = md5($_POST['pass']);*/
	//gives error if the password is wrong
	if ($_POST['pass'] != $info['email']) {
		//die('Incorrect password, please try again.');
		echo "<script> alert(\"Incorrect email, please try again.\"); </script>	";
		//Print "Incorrect Password";
	}
	elseif ($info['auth']!=1){
		//die("wait for login authentication by admin");
		echo "<script> alert(\"wait for login authentication by admin\"); </script>	";
		//Print "Wait for Login Authentication";
	}
	else
	{
		// if login is ok then we add a cookie
		$_POST['email'] = stripslashes($_POST['email']);
		$hour = time() + 3600;
		setcookie(ID_my_site, $_POST['email'], $hour);
		setcookie(Key_my_site, $_POST['pass'], $hour);
		//then redirect them to the members area
		//redirect_to("admin.php");
		header("Location: payment-options.php");
		exit;
	}
}
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="SpryAssets/structure.css" rel="stylesheet" type="text/css" media="screen" />
<title>Member Sign In</title>


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
<div class="wrapper">
<div id="header">
      <div id="headercon">
    <div id="img001"><img src="img/header-image001.jpg" alt="Finding the treasure in you" /></div>
    <div id="img002"><img src="img/header-image002.jpg" alt="Coaching for a living" /></div>
    <div id="logo"> <img src="img/lydon-walters-logo.jpg" alt="Lyndon Walters Logo" />
          <div id="headergraphic"></div>
        </div>
  </div>
    </div>
<div id="nav">
  <div id="navcon">
    <div id="navleft" style="width:400px; height:auto; float:left;">
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="what-i-provide.html">What i provide</a></li>
        <li><a href="philosophies.html">philosophies</a></li>
         <li><a href="payment.html">Payment</a></li>
        
        
      </ul>
    </div>
    <div id="navright" style="width:420px; height:auto; float:right; ">
      <ul style="float:right">
      <li><a href="research.html">Research</a></li>
        <li><a href="testimonials.html">Testimonials</a></li>
        <li><a href="membership.html">Memberships</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="bodyouter">
      <div id="bodycon">
<div id="inner">
	<h1>Member Sign In</h1>

  <div id="pleftcol">
   	<h2>Please sign in below with your details</h2>
      <p> Once you are logged in you will have access to the payment options page and 'Purchaser Voucher'
System ©  </p>
      <br><br>
      <!--<fieldset>
      <form action="print.php" method="post">
      	<input type="text" name="email" class="topfields required" placeholder="Name" />
        <input type="text" name="pass" class="topfields required onlydigits" placeholder="Telephone" /><br />
		 <button value="submit" class="search" style="margin-left:2px; margin-top:30px; width:330px">Sign In</button>
		</form>
      </fieldset>-->
<?php	 
	 //if the login form is submitted
if (isset($_POST['submit']))
{ // if form has been submitted
// checks it against the database
		if (!get_magic_quotes_gpc())
			{
				$_POST['email'] = addslashes($_POST['email']);
			}
$check = mysql_query("SELECT * FROM register WHERE username = '".$_POST['email']."'")or die(mysql_error());
//Gives error if user dosen't exist
$check2 = mysql_num_rows($check);
if ($check2 == 0)
{
	//die('That user does not exist in our database.');
	echo "<script> alert(\"That user does not exist in our database.\"); </script>	";
	//Print "User does not exist in our database.";
}
else{while($info = mysql_fetch_array( $check ))
{
	/*$_POST['pass'] = stripslashes($_POST['pass']);
	$info['password'] = stripslashes($info['password']);
	$_POST['pass'] = md5($_POST['pass']);*/
	//gives error if the password is wrong
	if ($_POST['pass'] != $info['email']) {
		//die('Incorrect password, please try again.');
		echo "<script> alert(\"Incorrect password, please try again.\"); </script>	";
		//Print "Incorrect Password";
	}
	elseif ($info['auth']!=1){
		//die("wait for login authentication by admin");
		echo "<script> alert(\"wait for login authentication by admin\"); </script>	";
		//Print "Wait for Login Authentication";
	}
	else
	{
		// if login is ok then we add a cookie
		$_POST['email'] = stripslashes($_POST['email']);
		$hour = time() + 3600;
		setcookie(ID_my_site, $_POST['email'], $hour);
		setcookie(Key_my_site, $_POST['pass'], $hour);
		//then redirect them to the members area
		//redirect_to("admin.php");
		
		header("Location: payment-options.php");
		exit;
	}
}
}
}?>
	  <form id="form1" name="form1" method="post" action="sign-in.php" >
          
   
          <input name="email" class="topfields required" placeholder="Name" type="text" id="username" size="40" required />
        <br /><br />
   
       <input name="pass" class="topfields required onlydigits" placeholder="Email" type="text" id="password" size="40" required />
       <br />
         
         <button value="Submit"  id="submit" name="submit" class="search" style="margin-left:2px; margin-top:30px; width:330px;">Sign In</button>
       
      </form>
      
      
      
    
    
   
    
    
      
      
  </div>
  <div id="listright" style="width:380px; margin-top:30px; float:right;">
                  <h2 style="font-size:16px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#666666; margin-bottom:10px;">Advantages</h2>
                  
                  
              
                  <ul style="width:380px;">
                <li>Worth £150 per annum</li>
                <li><span style="font-weight:bold; text-decoration:underline;">Free</span> Monthly Newsletter </li>
                <li>Immediate <span style="font-weight:bold; text-decoration:underline;color:#75B61B;" > reduction</span> in cost for 'One-with-One' Personal Session for individual member </li>
                <li>Periodic <span style="font-weight:bold; text-decoration:underline;color:#75B61B;" > reduction</span> in cost for ‘Packaged’ ‘One-with-One’ Personal Sessions* (N.B. time sensitive notifications, applications and bookings apply)</li>
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

    </div>
</div>
<div id="footer">
  <div id="footercon">
   	<div id="foottext">You are capable of experiencing not only achievement but fulfilment also.<br /><img src="img/footer-divider.gif" style="margin-top:10px;" alt=""  /><br />
    Be inspired!</div>
    
    <div id="footnav"><a href="#">Home</a> |   <a href="what-i-provide.html">What I provide</a> |  <a href="philosophies.html">Philosophies</a> |  <a href="payment.html">Payment</a> |  <a href="research.html">Research</a> |  <a href="testimonials.html">Testimonials</a> |  <a href="membership.html">Membership</a> |  <a href="contact.html">Contact</a> 
      <p style="margin-top:5px;">Copyright <?echo"&copy" . date("Y");?> Finding The Treasure In You.     All Rights Reserved. </p>

 </div>
    
  </div>
</div>

</body>
</html>
