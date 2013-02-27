<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="SpryAssets/structure.css" rel="stylesheet" type="text/css" media="screen" />
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<title>Lyndon Walters - Home</title>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "7ce22544-85ff-4b59-8fdf-f3eaec9705ee"});</script>

<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<!-- <script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script> -->

<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="SpryAssets/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="js/jquery.validate.js"></script>
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
	<div id="homeimg">
    	<div id="imgtext">
    	  <p>A Relationship, Personal Development and Performance Coach.</p>
    	  <p>&nbsp;</p>
    	  <p>" I&rsquo;m <span style="color:#a3e941">driven</span> by curiosity about your needs, <span style="color:#a3e941">focused</span> on your messages, <span style="color:#a3e941">dedicated </span>to assisting you achieve fulfilment with sensitivity, empathy and flexibility <br />
   	      but with integrity&rdquo;</p>
</div>
    
    </div>


<div id="homerow">


<div id="rowtext" style="margin-top:38px;">&ldquo;I&rsquo;m inspired by Egyptian Kings&rsquo; legacy of renowned leadership. I aspire to use my leadership style and quality to leave a legacy of meaningful experiences.&rdquo;</div>

</div>



<div id="leftcol">
	<h2>Greetings and Welcome</h2>
<p>&nbsp;</p>
	<p>As a &rsquo;Relationship&rsquo;, &rsquo;Personal Development&rsquo; and &rsquo;Personal Performance&rsquo; Coach, I&rsquo;m wondering, what if, when challenges arise, <span style="font-weight:bold; font-style:italic">you can feel supremely confident that you are competent and ready to</span>...deal with situations, environments and relationships calmly, assertively, efficiently but <em>assuredly!</em></p>
	<p>&nbsp;</p>
    <p>The aim of this website is to provide you with information about a Service that guides you towards <span style="font-weight:bold; font-style:italic">resolving personal issues</span>. Some examples are relief from distress, reduction in intensity of negative emotions, recovery from phobias, have closure with negative &lsquo;Life Experiences&rsquo;, achieve specific goal set within reasonable timeframe, build confidence to new levels, become more assertive, improve your relationships, personal development and performances</em>. </p>
    <p>&nbsp;</p>
    <p>The objective is not only to point towards ... <span style="font-weight:bold; font-style:italic">the power of your uniqueness</span>... but also to make you aware of ... <span style="font-weight:bold; font-style:italic">your infinite capabilities.</span> You can choose to seize the opportunity to <span style="font-weight:bold; font-style:italic">develop your</span> individual <span style="font-weight:bold; font-style:italic">&lsquo;Win-Win&rsquo;scenarios</span>, with confidence! </p>
    <div id="CollapsiblePanel5" class="CollapsiblePanel" style="width:100%; margin-top:10px;">
		<div class="CollapsiblePanelTab" tabindex="0" style="width:100%; font-size:14px; font-weight:normal; color:#75B61B; margin-left:0px;">read more...</div>
        <div class="CollapsiblePanelContent" style="width:100%; margin-left:0px; margin-top:10px;">
        <p>With my expertise and guidance, you can start dissolving limiting beliefs. I take a holistic approach to coaching. It means in context that <em>I am considerate of your feelings, thoughts and experiences.</em> It is probable that my <span style="font-weight:bold; font-style:italic">unique Coaching Service and Style,</span> with added value, might just be the level of compatibility you need to <em>positively enhance your relationships, improve your personal development and bring quality to your performances! </em></p>
        <p>&nbsp;</p>
        <p>Together, you and I can form strategies to enable you to access your <span style="font-style:italic">&lsquo;Mental Multi-Map&rsquo;, &lsquo;Mental GPS&rsquo; </span> and other relevant <span style="font-style:italic">&lsquo;Tools&rsquo;</span> on ... <span style="font-weight:bold; font-style:italic">your unique journey </span><span style="font-style:italic">in order for you to sense what it might feel like when...</span> <span style="font-weight:bold; font-style:italic"> finding the treasure in you, perhaps!</span></p>
      </div>
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div id="listright"><h2>I am a:</h2>

    	<ul><li>Certified Practitioner of Neuro-Linguistic Programming</li>
   		  <li>Certified Chikara-Reiki-Do Master</li>
       		<li style="background-image:none;">(Integrates Usui &amp; Tibetan Reiki Master)<br />
   		  </li>
            <li>Diploma in Advanced Hypnosis

          </li>
            <li> &lsquo;Voice of Influence&rsquo;       Projection Practitioner</li>
            <li>EFT Practitioner</li>
            <li>PSTEC Practitioner</li>
            <li style="list-style:none; list-style-image:none; list-style-type:none; padding-top:0px;"><img src="img/psteclevel1logo.jpg" style="margin-left:-17px; alt="" /><img src="img/pstecadvancedlogo.jpg" style="margin-left:10px;" alt="" /></li>
        </ul>
      <a href="about-me.html"><img src="img/findout-more.gif" style="margin-top:22px;" alt="Find out more about Lyndon" /></a>
    
</div>
  
  <div class="clearfloat"></div>
  
  <h2 style="margin-top:40px;">Possible Outcomes</h2>
 
  <div id="possoutcomes">
    <div id="CollapsiblePanel1" class="CollapsiblePanel" style="float:left">
      <div class="CollapsiblePanelTab" ><img src="img/green-arrow.gif" alt=""  />&nbsp;New Visions</div>
      <div class="CollapsiblePanelContent" >
         <ul>
         	<li>Clarity!</li>
            <li>Closure!</li>
            <li>Improved awareness!</li>
         </ul>
      </div>
    </div>
  
    <div id="CollapsiblePanel2" class="CollapsiblePanel"  style="float:right">
      <div class="CollapsiblePanelTab" ><img src="img/green-arrow.gif" alt=""  />&nbsp;New learning strategies</div>
      <div class="CollapsiblePanelContent">
      	 <ul>
         	<li>Opportunity to learn from our negative experiences!</li>
            <li>Being aware of and viewing from different perspectives!</li>
            <li>Self-management in 'onflict resolution'</li>
         </ul>
      
      </div>
    </div>
    
    <div class="clearfloat"></div>
    
    
    <div id="CollapsiblePanel3" class="CollapsiblePanel"  style="float:left">
      <div class="CollapsiblePanelTab" ><img src="img/green-arrow.gif" alt=""  />&nbsp;Powerful changes</div>
      <div class="CollapsiblePanelContent">
       <ul>
         	<li>Positive change in state!</li>
            <li>Get rid of negative 'Life'experiences, permanently!</li>
            <li>Reduction in intensity or sensitivity of negative <br />
              'emotional' feelings!</li>
            <li>Feeling less &lsquo;stressed&rsquo;!</li>
         </ul>
      
      </div>
    </div>
    
    
    <div id="CollapsiblePanel4" class="CollapsiblePanel"  style="float:right">
      <div class="CollapsiblePanelTab" ><img src="img/green-arrow.gif" alt=""  />&nbsp;Discovery</div>
      <div class="CollapsiblePanelContent">
      
       <ul>
         	<li>Finding the treasure in you!</li>
            <li>Identity!</li>
            <li>The value of discipline and structure!</li>
            <li>Capability</li>
         </ul>
      </div>
    </div>
  
   <div class="clearfloat"></div>
  
  </div>
  

  
  
  </div>
<div id="rightcol">

	<div id="video"><img src="img/video-placeholder.jpg" alt="" /></div>
	<div class="lyndonwordssumm">
		
    	<div class="recheader">Newsletter</div>
    	<div class="post">Sign up for Lyndon's monthly newsletter<a href="#"></a></div>
    	<div class="post">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" autocomplete="off">
        <table>
		<tr>
        <input type="text" name="name" style="border:1px solid #ccc; padding-left:5px; height:20px; width:180px; background-color:#fff; margin-right:10px;" value="Name" required/>
        </tr>
		<tr>
       &nbsp;
        </tr>
		<tr>
        <input type="text" name="email" style="border:1px solid #ccc; padding-left:5px;margin-top:5px; height:20px; width:180px; background-color:#fff; margin-right:10px;" value="email" required/>
        </tr><tr>
        <button value="Submit"  id="submit" name="submit" class="search" style="float:center; margin-right:0px; margin-top:15px; width:90px;">Signup</button>
        </tr>
        </table>
        <!-- <a href="" style="font-size:12px;">Sign up</a> -->
		</form>
        <?php 
        require 'includes/db.php';
        if (isset($_POST['submit'])) {
			$email_address = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        	if (!$_POST['email']) {
        		echo'You did not complete all of the required fields';
        	}
        	//email validation
        	elseif (!$email_address) {
        		// The email address is not valid
        		echo'The email address is not valid';
        	}else{
        	$usercheck = $_POST['email'];
        	$check = mysql_query("SELECT email FROM news WHERE email = '$usercheck'") or die(mysql_error());
        	$check2 = mysql_num_rows($check);
        	//if the name exists it gives an error
        	if ($check2 != 0) {
        		echo 'Sorry, the Email '.$_POST['email'].' is already in use.';
        	}
			else{
        	$insert = "INSERT INTO news (email,name)
 			VALUES ('".$_POST['email']."','".$_POST['name']."')";
        
        	$add_member = mysql_query($insert);
        	
				Print "ThankYou,<br/>".$_POST['email'] ."<br/>has been submitted";
        	
        	}
			}
        }
        ?>
        
        <!--<div class="post" style="margin-left:0px;"><a href="#">View the newsletter archive ></a></div>-->
        
        </div>
        
        
        </div>
        
       <div class="lyndonwordssumm"> 
    <div id="audioplayer">
   <div class="recheader" style="margin-left:0px;">Listen to Lyndon</div>
    <img src="img/audio-player.jpg" style="margin-left:-5px;" alt=""/>
    
    
    
    
     <div id="addtest">
				<form action="update_db_comments.php" method="post">
            	<fieldset style="margin-top:20px;">
                	<label>Name</label><br />
                	<input type="text" class="testtxt" name="name_comment" required />
                    
                    <label>Email</label><br />
                	<input type="email" class="testtxt" name="email_comment" required />
                    
                     <label> Your Comments </label> <br />
                	 <textarea class="testtxt" style="height:120px;" name="user_comments" required ></textarea>

                    
                </fieldset>
				<button value="Submit"  id="submit" name="submit_comment" class="search" style="float:center; margin-right:0px; margin-top:15px; width:150px;">Add your comment</button>
                </form>
				
               <!-- <div class="post" style="margin-left:0px;"><a href="#">Add your comment > ></a></div>-->
				
                 <div class="post" style="margin-left:0px;"><a href="comments.php">View comment archives > ></a></div>
				
            </div>
    
    </div>
    
    
    
    </div>
    
     <div id="app-btn"><a href="contact.html" style="text-decoration:none;"><button class="search" style="margin-left:5px; margin-top:10px;">Book an appointment</button></a></div>

</div>



</div> 

</div>

</div>
<div class="push"></div>

<div class="clearfloat"></div>




<div id="footer">
  <div id="footercon">
   	<div id="foottext">You are capable of experiencing not only achievement but fulfilment also.<br /><img src="img/footer-divider.gif" style="margin-top:10px;" alt=""  /><br />
    Be inspired!</div>
    
    <div id="footnav"><a href="#">Home</a> |   <a href="what-i-provide.html">What I provide</a> |  <a href="philosophies.html">Philosophies</a> |  <a href="payment.html">Payment</a> |  <a href="research.html">Research</a> |  <a href="testimonials.html">Testimonials</a> |  <a href="membership.html">Membership</a> |  <a href="contact.html">Contact</a> 
      <p style="margin-top:5px;">Copyright <?php echo "&copy; " . date("Y"); ?> Finding The Treasure In You.     All Rights Reserved. </p>

<p style="margin-top:25px;">Share your discovery on:
<span class='st_sharethis_hcount' displayText='ShareThis'></span>
<span class='st_facebook_hcount' displayText='Facebook'></span>
<span class='st_twitter_hcount' displayText='Tweet'></span>
<span class='st_linkedin_hcount' displayText='LinkedIn'></span>
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FOxygencreations&amp;send=false&amp;layout=button_count&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=377763392312292" scrolling="no" frameborder="0" style="border:none; height:15px;width:70px;" allowTransparency="true"></iframe>
<!--<span class='st_pinterest_hcount' displayText='Pinterest'></span>-->
<span class='st_email_hcount' displayText='Email'></span>

</div>

 </div></div>
 
 <script type="text/javascript">
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2");
var CollapsiblePanel3 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel3");
var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel4");
var CollapsiblePanel5 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel5");
</script>
 
 </body></html>