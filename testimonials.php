<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="SpryAssets/structure.css" rel="stylesheet" type="text/css" media="screen" />
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<title>Lyndon Walters - Testimonials</title>


<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "e51f4a10-524e-4cf2-8ecb-86405c2a2ca5"}); </script>

<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.0.6"></script>
<link rel="stylesheet" type="text/css" href="SpryAssets/jquery.fancybox.css?v=2.0.6" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<script type="text/javascript" src="js/jquery.ui.timepicker.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>

<script type="text/javascript">

(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#testimonials").validate({
                rules: {
                	name: "required",
					ameet: "required",
					bmeet: "required",
					location: "required",
					name: "required",
                    email: {
                        required: true,
                        email: true
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
</script>

<script type="text/javascript">
$('.alphaonly').bind('keyup blur',function(){ 
    $(this).val( $(this).val().replace(/[^a-z]/g,'') ); }
);
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#testimonials").validate();
  });
</script>



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
	






<div id="leftcol" style="padding-right:35px; border-right:1px solid #ccc;">


<div id="pagetitle">Testimonials</div>
<div class="post" >
       	  
          
          <div class="excerpt" style="width:100%; margin-top:20px; height:auto;">
            <img src="img/quote-open.jpg" alt="" style="float:left; margin-right:10px; margin-bottom:20px;" /><img src="img/quote-close.jpg" alt="" style="float:right; margin-left:10px; margin-right:20px; " /><p style="padding-top:20px;">So talented, so knowledgeable and so very caring... </p> 
         
          
          
          <div class="subtext" style="padding:0px"><span style="margin-top:10px;">Colin (Manager Building Material Suppliers - Manchester)</span></div>
            <div class="clearfloat"></div>
          </div>
          
        </div>   
  
          <div class="post" >
       	  
          
          <div class="excerpt" style="width:100%; margin-top:20px; height:auto;">
            <img src="img/quote-open.jpg" alt="" style="float:left; margin-right:10px; margin-bottom:40px;" /><img src="img/quote-close.jpg" alt="" style="float:right; margin-left:10px; margin-right:20px; " /><p style="padding-top:20px;">Having someone there who seem to genuinely care... </p> 
         
          
          
          <div class="subtext" >Marion (Medical Herbalist - London)</div>
            <div class="clearfloat"></div>
          </div>
          
        </div>   
        
        <div class="post" >
       	  
          
          <div class="excerpt" style="width:100%; margin-top:20px; height:auto;">
            <img src="img/quote-open.jpg" alt="" style="float:left; margin-right:10px; margin-bottom:20px;" /><img src="img/quote-close.jpg" alt="" style="float:right; margin-left:10px; margin-right:20px; " /><p style="padding-top:20px;">I love your enthusiasm for people ...</p> 
         
          
          
          <div class="subtext" >Annie (Divorce Coach - London)</div>
            <div class="clearfloat"></div>
          </div>
          
        </div>   
        
              <div class="post" >
       	  
          
          <div class="excerpt" style="width:100%; margin-top:20px; height:auto;">
            <img src="img/quote-open.jpg" alt="" style="float:left; margin-right:10px; margin-bottom:20px;" /><img src="img/quote-close.jpg" alt="" style="float:right; margin-left:10px; margin-right:20px; " /><p style="padding-top:20px;">You're a very wise man with a strong aura  ...</p> 
         
          
          
          <div class="subtext" >Michelle (Car Rally Organiser - London)</div>
            <div class="clearfloat"></div>
          </div>
          
        </div> 
        
        
                      <div class="post" >
       	  
          
          <div class="excerpt" style="width:100%; margin-top:20px; height:auto;">
            <img src="img/quote-open.jpg" alt="" style="float:left; margin-right:10px; margin-bottom:20px;" /><img src="img/quote-close.jpg" alt="" style="float:right; margin-left:10px; margin-right:20px; " /><p style="padding-top:20px;">You're a powerful loving presence wherever you go ...			</p> 
         
          
          
          <div class="subtext" >Judy (NLP Trainer - Surrey)</div>
            <div class="clearfloat"></div>
          </div>
          
        </div> 	
<?php 
require 'includes/db.php';
 // Connects to your Database 
 function get_all_subjects(){
 	//global $connection;
 	$query="SELECT * 
			FROM  `lyndon_walter`.`testimornial` 
			WHERE  `auth` =1";
 	$subject_set= mysql_query($query);
 	//confirm_query($subject_set);
 	return $subject_set;
 }
$subject_set=get_all_subjects();
 while ($subject=mysql_fetch_array($subject_set)) 
{ 
        print "<div class=\"post\" >
       	  
          
          <div class=\"excerpt\" style=\"width:100%; margin-top:20px; height:auto;\">
            <img src=\"img/quote-open.jpg\" alt=\"\" style=\"float:left; margin-right:10px; margin-bottom:20px;\" />
			<img src=\"img/quote-close.jpg\" alt=\"\" style=\"float:right; margin-left:10px; margin-right:20px; \" />
			<p style=\"padding-top:20px;\"> ".$subject['ameet']. "</p> 
         
          
          
          <div class=\"subtext\" style=\"padding:0px\"><span style=\"margin-top:10px;\"><br/>".$subject['name']."(".$subject['location'].")</span></div>
            <div class=\"clearfloat\"></div>
          </div>
          
        </div> ";  
}
?>
  
     
  
  
  

  
  
  
  <div class="clearfloat"></div>
 
  
  
  
  
  </div>
  
 <div id="rightcol" style="width:220px;">
  <div class="navlinks">
    <?php
 if(isset($_POST['bmeet'])){
  	$insert = "INSERT INTO `lyndon_walter`.`testimornial` (name ,email ,location ,bmeet ,ameet)
 			VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['location']."','".$_POST['bmeet']."','".$_POST['ameet']."')";
 	$add_member = mysql_query($insert);
	Print "ThankYou,<br/>".$_POST['name'] ."<br/>Your testimonial has been submitted";
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
	//redirect_to(testimonials.php);
 } 
?>
    <h2>Add a Testimonial</h2>
        	
            
            <div id="addtest">
			<form name="testimonials" id="testimonials" action="" method="post" autocomplete="off">
            	<fieldset style="margin-top:20px;">
                	<br />
					<br />
					<label>Name</label>
					<br />
                	<input type="text" name="name" class="testtxt required" />
                    <label>Email</label>
					<br />
                	<input type="text" name="email" class="testtxt required email" />
					<label>Your Location</label>
					<br />
                	<input type="text" name="location" class="testtxt required" />
                    <label>Before I met Lyndon</label>
					<br />
                	<textarea class="testtxt required" name="bmeet"style="height:120px;" ></textarea>
					<label>After I met Lyndon</label>
					<br />
                	<textarea class="testtxt required " name="ameet" style="height:120px; padding-top:20px" ></textarea>
                    
                </fieldset>
            
            </div>
    
  </div>
  <div id="app-btn">
  <button class="search" type="submit" style="margin-left:0px; margin-top:-20px; width:206px;">Add testimonial</button>
  </div>
  </form>

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
</div></div></div>

</body></html>