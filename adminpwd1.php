<?php
require 'includes/db.php';
if(isset($_COOKIE['ID_my_site']))
//if there is, it logs you in and directes you to the members page
{
	$email = $_COOKIE['ID_my_site'];
	$pass = $_COOKIE['Key_my_site'];
	$check = mysql_query("SELECT * FROM register WHERE email = '$email'")or die(mysql_error());
	while($info = mysql_fetch_array( $check ))
	{
		if ($pass != $info['password'])
		{
			//dono
		}
		else
		{
			//header("Location: members.php");
			redirect_to("members.php");
			//echo "Login Success";
		}
	}
}
//if the login form is submitted
if (isset($_POST['submit']))
{ // if form has been submitted
// makes sure they filled it in
if(!$_POST['email'] | !$_POST['pass']) {
	die('You did not fill in a required field.');
}
// checks it against the database
if (!get_magic_quotes_gpc())
{
	$_POST['email'] = addslashes($_POST['email']);
}
$check = mysql_query("SELECT * FROM admin WHERE email = '".$_POST['email']."'")or die(mysql_error());
//Gives error if user dosen't exist
$check2 = mysql_num_rows($check);
if ($check2 == 0)
{
	die('That user does not exist in our database. <a href=newreg.php>Click Here to Register For Free</a>');
}
while($info = mysql_fetch_array( $check ))
{
	$_POST['pass'] = stripslashes($_POST['pass']);
	$info['password'] = stripslashes($info['password']);
	$_POST['pass'] = md5($_POST['pass']);
	//gives error if the password is wrong
	if ($_POST['pass'] != $info['password']) {
		die('Incorrect password, please try again.');
	}
	elseif ($info['auth']!=1){
		die("wait for login authentication by admin");
	}else
	{
		// if login is ok then we add a cookie
		$_POST['email'] = stripslashes($_POST['email']);
		$hour = time() + 3600;
		setcookie(ID_my_site, $_POST['email'], $hour);
		setcookie(Key_my_site, $_POST['pass'], $hour);
		//then redirect them to the members area
		redirect_to("members.php");
	}
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="SpryAssets/structure.css" rel="stylesheet" type="text/css" media="screen" />
	<title>Lydon Walters - Membership</title>
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "e51f4a10-524e-4cf2-8ecb-86405c2a2ca5"}); </script>
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js?v=2.0.6"></script>
	<link rel="stylesheet" type="text/css" href="SpryAssets/jquery.fancybox.css?v=2.0.6" media="screen" />
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay opening speed and opacity
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedIn : 500,
						opacity : 0.95
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background-color' : '#eee'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
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
      <h2 style="float: left">
      Welcome Admin Panel
      </h2>
    </div>
    <div id="navright" style="width:420px; height:auto; float:right; ">
      
      <h2 style="float: right">
      
      </h2>
      
    </div>
  </div>
</div>
        


<div id="bodyouter">
      <div id="bodycon">
    <div id="leftcol" style="width:100%">
          <div class="post">
        <h2>Admin Panel</h2>
        <div class="subtext"></div>
        <div id="innerblog" align="center">
              
                <h2>Please Log In To Manage </h2>
      <form id="form1" name="form1" method="post" action="adminpwd.php" >
        User Name:
          <input name="email" type="text" id="username" size="40" />
        <br /><br />
        Password:
       <input name="pass" type="password" id="password" size="40" />
       <br />
         
         <button value="Submit"  id="submit" name="submit" class="search" style="float:center; margin-right:0px; margin-top:15px; width:90px;">Login</button>
       
      </form>
              
          </div>
      </div>
        </div>
  </div>
      <div class="clearfloat"></div>
      <div class="push"></div>
    </div>
<div id="footer">
  <div id="footercon">
   	<div id="foottext">You are capable of experiencing not only achievement but fulfilment also.<br /><img src="img/footer-divider.gif" style="margin-top:10px;" alt=""  /><br />
    Be inspired!</div>
    
    <div id="footnav"><a href="#">Home</a> |   <a href="what-i-provide.html">What I provide</a> |  <a href="philosophies.html">Philosophies</a> |  <a href="payment.html">Payment</a> |  <a href="research.html">Research</a> |  <a href="testimonials.html">Testimonials</a> |  <a href="membership.html">Membership</a> |  <a href="contact.html">Contact</a> 
      <p style="margin-top:5px;">Copyright � 2012 Finding The Treasure In You.     All Rights Reserved. </p>
</div>
    </div></div></body></html>

