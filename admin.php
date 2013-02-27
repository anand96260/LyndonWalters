<?php 
require_once 'adminpwd.php';
include 'newcounts.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="SpryAssets/structure.css" rel="stylesheet" type="text/css" media="screen" />
	<title>Lydon Walters - Admin</title>
	
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
		$(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
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
      Welcome LyndonWalters -- Have a Great Day
      </h2>
    </div>
    <div id="navright" style="width:420px; height:auto; float:right; ">
      
    <ul style="float:right">
      
        <li><?php echo date('d/m/Y - H:ia'); ?></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
      
    </div>
  </div>
</div>
        


<div id="bodyouter">
      <div id="bodycon">
    <div id="leftcol" style="width:100%">
          <div class="post">
        <h2>Admin Panel</h2>
        <div class="subtext"></div>
        <div id="innerblog">
              <div id="leftcol2">
              
              
              <div id="listleft" style="width:400px; float:left; margin-top:0px;">
                  <h2>Authenticate User - New(<?php echo "$newusers"; ?>)</h2>
                  
                
      <a href="authuser.php" style="text-decoration:none;">     
<button value="Submit"  id="submit" class="search" style="float:left; margin-right:0px; margin-top:15px; width:380px;">Authenticate User</button>
      </a>
              
              <div class="clearfloat"></div>
              
              
              <h2 style="margin-top:30px;">Authenticate Testimonials - New(<?php echo"$newtesti"; ?>)</h2>
                
               <a href="authtestimonials.php" style="text-decoration:none;">  <button value="Submit"  id="submit" class="search" style="float:left; margin-right:0px; margin-top:15px; width:380px;">Authenticate Testimonials</button>
               </a>
                
                   <div class="clearfloat"></div>
                 <h2 style="margin-top:30px;">New Provisional Bookings - New(<?php echo "$newpbooking"; ?>)</h2>
                
                 <a href="authpb.php" style="text-decoration:none;">
                 <button value="Submit"  id="submit" class="search" style="float:left; margin-right:0px; margin-top:15px; width:380px;">New Provisional Bookings</button>
                 </a>
                 </div>
            <div id="listright" style="width:380px; float:right;">
                  <h2>Authenticate newsLetters - New(<?php echo "$news"; ?>)</h2>
      <a href="authnews.php" style="text-decoration:none;">     
<button value="Submit"  id="submit" class="search" style="float:left; margin-right:0px; margin-top:15px; width:380px;">Authenticate news letter</button>
      </a>
              
              <div class="clearfloat"></div>
              
              
              <h2 style="margin-top:30px;">Change Admin Password</h2>
                
               <a href="chng_adm_pwd.php" style="text-decoration:none;">  <button value="Submit"  id="submit" class="search" style="float:left; margin-right:0px; margin-top:15px; width:380px;">Change Admin Password.</button>
               </a>
                
                   <div class="clearfloat"></div>
                 <h2 style="margin-top:30px;">Send a News Letter</h2>
                
                 <a href="mailing_news_letter.php" style="text-decoration:none;">
                 <button value="Submit"  id="submit" class="search" style="float:left; margin-right:0px; margin-top:15px; width:380px;">Send a News Letter</button>
                 </a>
				 
				 <div class="clearfloat"></div>
                 <h2 style="margin-top:30px;">Authenticate Comments - New</h2>
                
                 <a href="auth_comments.php" style="text-decoration:none;">
                 <button value="Submit"  id="submit" class="search" style="float:left; margin-right:0px; margin-top:15px; width:380px;">News Comments</button>
                 </a>
            </div>
          </div>
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