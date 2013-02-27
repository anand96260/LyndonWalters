<?php 
require_once 'memberpwd.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="SpryAssets/structure.css" rel="stylesheet" type="text/css" media="screen" />
	<title>Lyndon Walters - Payment Options</title>
	<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "e51f4a10-524e-4cf2-8ecb-86405c2a2ca5"}); </script>
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js?v=2.0.6"></script>
	<link rel="stylesheet" type="text/css" href="SpryAssets/jquery.fancybox.css?v=2.0.6" media="screen" />
	<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
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
	  <ul style="float:right"><li><a href="logoutmember.php">Log Out</a></li></ul>
    </div>
  </div>
</div>
        


<div id="bodyouter">
      <div id="bodycon">
    <div id="leftcol" style="width:100%">
          <div class="post">
		  <?php echo '<h1>Welcome '.$_COOKIE['ID_my_site'].'</h1><br>';?>
		  
        <h2>Payment Options <br /><br />
		<label style="float:left; font-size:12px;color:#75B61B; "><a href="terms-conditions.html" target="_blank">Click Here For Terms &amp; Conditions</a></label> <br />
          <span style="font-size:16px;">All Payments Made Through Paypal</span></h2>
        <div class="subtext"></div>
        <div id="innerblog">
              <div id="leftcol2">
              
              
              <div id="listleft" style="width:400px; float:left; margin-top:0px;">
                  <h2><strong>Voucher Options (Exclusively to members only)</strong></h2>
                  
                <p>&nbsp;</p>
                   <p style="font-weight:bold">Discover ‘Purchaser’s Voucher’ Payment System©</p>
                   <p>&nbsp;</p>
                <p>Innovation for you! Power at your fingertips! Be Inspired!
                     
                     <br />
                  <br />
                  Choose from the three ‘Types’ available! </p>
                   <p>&nbsp;</p>
                   <p>Please select a voucher type below</p>
                <p>&nbsp;</p>
                
             
                  <p style="font-weight:bold">&nbsp;</p>
                  
                <div id="CollapsiblePanel1" class="CollapsiblePanel" style="width:380px; background-color:#F5F5F5; padding:10px; -moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px;">
                    <div class="CollapsiblePanelTab" tabindex="0"><span style="font-weight:bold">‘Duo’ One – Purchaser Voucher Type (A) © </span><br />
                 <span style="font-weight:normal; font-size:14px;">‘Virtual Gift’ to Beneficiary ‘Singular’ Payment </span>  </div>
                    <div class="CollapsiblePanelContent" >
                    
                    <fieldset style="margin-top:15px;">
									  <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="payment@lyndonwalters.com">
<input type="hidden" name="lc" value="IN">
<input type="hidden" name="item_name" value="Duo one">

<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<!--<button value="Submit" name="submit"  id="submit" class="search" alt="PayPal — The safer, easier way to pay online." style="float:left; margin-right:0px; margin-top:15px; width:380px;">Pay Now Via Paypal</button>-->

<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                    <label style="float:left; margin-top:5px;">Subscriber’s Name </label>
                    <input type="text" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required />
                 </fieldset>
                 <div class="clearfloat"></div>   
                 
                 
                 <fieldset style="margin-top:5px;">
                   <label style="float:left; margin-top:5px; ">Subscriber’s telephone </label>
                    <input type="text" class="onlydigits" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required />
                       </fieldset>
                 
                 <div class="clearfloat"></div>  
                    
                       <fieldset style="margin-top:5px;">
                   <label style="float:left; margin-top:5px; ">Subscriber’s Email </label>
                    <input type="email" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required />
                       </fieldset>
                 
                 <div class="clearfloat"></div>  
                 
                                        <fieldset style="margin-top:5px;">
                   <label style="float:left; margin-top:5px; ">Subscriber’s Address </label>
                    <textarea style="width:198px; height:70px; resize:none; margin-right:10px; border:1px solid #ccc; background-color:#fff; float:right;" required ></textarea>
                       </fieldset>
                 
                 <div class="clearfloat"></div> 
                 
                 <fieldset style="margin-top:5px;">
                                    <label style="float:left; margin-top:5px; ">Full Amount</label>
                    <input type="text" name="amount" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required value="250" readonly />
                       </fieldset>
                 
                 <div class="clearfloat"></div> 
                 
                                 <fieldset style="margin-top:5px;">
                                    <label style="float:left; margin-top:5px; ">Beneficiary’s Name</label>
                    <input type="text" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required/>
                       </fieldset>
                 
                 <div class="clearfloat"></div> 
                 
                  <fieldset style="margin-top:5px;">
                   <label style="float:left; margin-top:5px; ">Beneficiary’s telephone </label>
                    <input type="text" class="onlydigits" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required />
                       </fieldset>
                 
                 <div class="clearfloat"></div>
                 
                                
                  <fieldset style="margin-top:5px;">
                   <label style="float:left; margin-top:5px; ">Beneficiary’s Email </label>
                    <input type="eamil" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required />
                       </fieldset>
                 
                 <div class="clearfloat"></div>
                 
                 
                                               <fieldset style="margin-top:5px;">
                   <label style="float:left; margin-top:5px; ">Beneficiary’s Address </label>
                    <textarea style="width:198px; height:70px; resize:none; margin-right:10px; border:1px solid #ccc; background-color:#fff; float:right;" required ></textarea>
                       </fieldset>
                 
                 <div class="clearfloat"></div> 
                 
                 
                 
                                                          <fieldset style="margin-top:5px;">
                   <label style="float:left;color:#75B61B; margin-top:30px; font-size:12px; "><a href="terms-conditions.html" target="_blank">Terms &amp; Conditions</a> apply</label>
                    <button value="Submit"  id="submit" class="search" style="float:right; margin-right:0px; margin-top:15px; width:200px; margin-right:10px;">Purchase Voucher</button>
                       </fieldset>  
                 
                 </form>
                 
                 
                    
                    </div>
                  </div>
                
              
              
                <div id="CollapsiblePanel2" class="CollapsiblePanel" style="width:380px; background-color:#F5F5F5; padding:10px; -moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px; margin-top:20px;">
                  <div class="CollapsiblePanelTab" tabindex="0">
                  
                  <span style="font-weight:bold"> 

‘Uno’ – Purchaser Voucher Type (B) ©</span><br />
                 <span style="font-weight:normal; font-size:14px;">Personal Session Two-part Payment </span> 
                  
                  </div>
                  <div class="CollapsiblePanelContent" >
				  <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="payment@lyndonwalters.com">
<input type="hidden" name="lc" value="IN">
<input type="hidden" name="item_name" value="Uno - Purchaser Voucher Type (B)">

<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<!--<button value="Submit" name="submit"  id="submit" class="search" alt="PayPal — The safer, easier way to pay online." style="float:left; margin-right:0px; margin-top:15px; width:380px;">Pay Now Via Paypal</button>-->

<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                    <fieldset style="margin-top:15px;">
                      <label style="float:left; margin-top:5px;">Client's Name </label>
                      <input type="text" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required />
                    </fieldset>
                    <div class="clearfloat"></div>
                    <fieldset style="margin-top:5px;">
                      <label style="float:left; margin-top:5px; ">Client's telephone </label>
                      <input type="text" class="onlydigits" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required />
                    </fieldset>
                    <div class="clearfloat"></div>
                    <fieldset style="margin-top:5px;">
                      <label style="float:left; margin-top:5px; ">Client's Email </label>
                      <input type="email" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required />
                    </fieldset>
                    <div class="clearfloat"></div>
                    <fieldset style="margin-top:5px;">
                      <label style="float:left; margin-top:5px; ">Client's  Address </label>
                      <textarea name="textarea" style="width:198px; height:70px; resize:none; margin-right:10px; border:1px solid #ccc; background-color:#fff; float:right;" required ></textarea>
                    </fieldset>
                    <div class="clearfloat"></div>
                    <fieldset style="margin-top:5px;">
                      <label style="float:left; margin-top:5px; "> Payment Number</label>
                      <div style="width:200px; float:right; margin-right:10px;">
                      <input type="radio" name="installment" style="margin-top:5px; float:left;" required/>
                      <span style="float:left; padding-top:3px; margin-left:10px;">1st</span> 
                      
                    
                      <input type="radio" name="installment" style="margin-left:40px; margin-top:5px; float:left;" required/>
                      <span style="padding-top:3px; margin-left:10px; float:left">2nd</span> 
                      
                      </div>
                    </fieldset>
                    <div class="clearfloat"></div>
                    
                      <fieldset style="margin-top:5px;">
                      <label style="float:left; margin-top:5px; "> Amount</label>
                      <input type="text" class="onlydigits" name="amount" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required />
                    </fieldset>
                    <div class="clearfloat"></div>
                    
                    <div class="clearfloat"></div>
                    <fieldset style="margin-top:5px;">
                      <label style="float:left;color:#75B61B; margin-top:30px; font-size:12px; "><a href="terms-conditions.html" target="_blank">Terms &amp; Conditions</a> apply</label>
                      <button value="Submit"  id="submit2" class="search" style="float:right; margin-right:0px; margin-top:15px; width:200px; margin-right:10px;">Purchase Voucher</button>
                    </fieldset>
					</form>
                  </div>
                </div>
                
                
                
                <div id="CollapsiblePanel3" class="CollapsiblePanel" style="width:380px; background-color:#F5F5F5; padding:10px; -moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px; margin-top:20px;">
                  <div class="CollapsiblePanelTab" tabindex="0"> <span style="font-weight:bold"> ‘Duo’ Two – Purchaser Voucher Type (C) ©</span><br />
                    <span style="font-weight:normal; font-size:14px;">‘Virtual Gift’ to Beneficiary Two-part Payment  </span> </div>
                  <div class="CollapsiblePanelContent" >
				  <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="payment@lyndonwalters.com">
<input type="hidden" name="lc" value="IN">
<input type="hidden" name="item_name" value="‘Duo’ Two – Purchaser Voucher Type (C)">

<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<!--<button value="Submit" name="submit"  id="submit" class="search" alt="PayPal — The safer, easier way to pay online." style="float:left; margin-right:0px; margin-top:15px; width:380px;">Pay Now Via Paypal</button>-->

<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">

                    <fieldset style="margin-top:15px;">
                      <label style="float:left; margin-top:5px;">Subscriber’s Name </label>
                      <input type="text" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required />
                    </fieldset>
                    <div class="clearfloat"></div>
                    <fieldset style="margin-top:5px;">
                      <label style="float:left; margin-top:5px; ">Subscriber’s telephone </label>
                      <input type="text" class="onlydigits" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required />
                    </fieldset>
                    <div class="clearfloat"></div>
                    <fieldset style="margin-top:5px;">
                      <label style="float:left; margin-top:5px; ">Subscriber’s Email </label>
                      <input type="email" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required />
                    </fieldset>
                    <div class="clearfloat"></div>
                    <fieldset style="margin-top:5px;">
                      <label style="float:left; margin-top:5px; ">Subscriber’s  Address </label>
                      <textarea name="textarea2" style="width:198px; height:70px; resize:none; margin-right:10px; border:1px solid #ccc; background-color:#fff; float:right;" required ></textarea>
                    </fieldset>
                    <div class="clearfloat"></div>
                    <fieldset style="margin-top:5px;">
                      <label style="float:left; margin-top:5px; "> Payment Number</label>
                      <div style="width:200px; float:right; margin-right:10px;">
                        <input type="radio" name="instalment" style="margin-top:5px; float:left;" value="1" required />
                        <span style="float:left; padding-top:3px; margin-left:10px;">1st</span>
                        <input type="radio" name="instalment" style="margin-left:40px; margin-top:5px; float:left;" value="2" required />
                        <span style="padding-top:3px; margin-left:10px; float:left">2nd</span> </div>
                    </fieldset>
                    <div class="clearfloat"></div>
                    <fieldset style="margin-top:5px;">
                      <label style="float:left; margin-top:5px; "> Amount</label>
                      <input type="text" class="onlydigits" name="amount" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required />
                    </fieldset>
                    <div class="clearfloat"></div>
                    
                    
                      <fieldset style="margin-top:5px;">
                                    <label style="float:left; margin-top:5px; ">Beneficiary’s Name</label>
                    <input type="text" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required />
                    </fieldset>
                 
                 <div class="clearfloat"></div> 
                 
                  <fieldset style="margin-top:5px;">
                   <label style="float:left; margin-top:5px; ">Beneficiary’s telephone </label>
                    <input type="text" class="onlydigits" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required />
                    </fieldset>
                 
                 <div class="clearfloat"></div>
                 
                                
                  <fieldset style="margin-top:5px;">
                   <label style="float:left; margin-top:5px; ">Beneficiary’s Email </label>
                    <input type="email" style="width:200px; margin-right:10px; height:20px; border:1px solid #ccc; background-color:#fff; float:right;" required />
                    </fieldset>
                 
                 <div class="clearfloat"></div>
                 
                 
                                               <fieldset style="margin-top:5px;">
                   <label style="float:left; margin-top:5px; ">Beneficiary’s Address </label>
                    <textarea style="width:198px; height:70px; resize:none; margin-right:10px; border:1px solid #ccc; background-color:#fff; float:right;" required ></textarea>
                       </fieldset>
                 
                 <div class="clearfloat"></div> 
                    
                    
                    <fieldset style="margin-top:5px;">
                      <label style="float:left;color:#75B61B; margin-top:30px; font-size:12px; "><a href="terms-conditions.html" target="_blank">Terms &amp; Conditions</a> apply</label>
                      <button value="Submit"  id="submit3" class="search" style="float:right; margin-right:0px; margin-top:15px; width:200px; margin-right:10px;">Purchase Voucher</button>
                    </fieldset>
					
					</form>
                  </div>
                </div>
              </div>
              
              
              
            <div id="listright" style="width:380px; float:right">
                <h2> Single Payments  Option<br />
                </h2><br />
                 <p> Pay agreed amount in one singular payment.</p>
              
               
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="payment@lyndonwalters.com">
<input type="hidden" name="lc" value="IN">
<input type="hidden" name="item_name" value="Single Payment">
<input type="hidden" name="amount" value="250.00">
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<button value="Submit" name="submit"  id="submit" class="search" alt="PayPal — The safer, easier way to pay online." style="float:left; margin-right:0px; margin-top:15px; width:380px;">Pay Now Via Paypal</button>

<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>


			   
				<!--------Paypal Starts ----------
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<table>
<tr><td><input type="hidden" name="on0" value="Discover 'Purchaser's Voucher' Payment System©">Discover 'Purchaser's Voucher' Payment System©</td></tr><tr><td><select name="os0">
	<option value="'Duo' One">'Duo' One $300.00 USD</option>
	<option value="'Uno'">'Uno' $150.00 USD</option>
	<option value="'Duo' Two">'Duo' Two $150.00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal — The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>



				<!--------Paypal Ends ----------->
				 <br />
                  <h2>Advantages:</h2>
                  
                  
              
                  <ul style="width:380px;">
                <li><span style="font-weight:bold; text-decoration:underline;">Free Membership</span> (worth £150 per annum)</li>
                <li><span style="font-weight:bold; text-decoration:underline;">Free</span> Monthly Newsletter </li>
                <li>Immediate <span style="font-weight:bold; text-decoration:underline;" title="10%" >reduction</span> in cost for 'One-with-One' Personal Session for individual member </li>
                <li>Periodic <span style="font-weight:bold; text-decoration:underline;" title="20%" > reduction</span> in cost for ‘Packaged’ ‘One-with-One’ Personal Sessions* (N.B. time sensitive notifications, applications and bookings apply)</li>
                <li>Access to the <span style="font-weight:bold; text-decoration:underline;">Benefits of 'Purchaser Voucher'<br />
System ©</span></li>
                <li>Ability to purchase 'Gift' for <span style="font-weight:bold; text-decoration:underline;">Beneficiary with Purchaser Voucher System ©**</span></li>
                <li>Access to <span style="font-weight:bold; text-decoration:underline;">‘Preferred Notification’</span> for 'Early Bird' and 'Specials' for Group Events (e.g. Workshops)</li>
                <li>Possibility of <span style="font-weight:bold; text-decoration:underline;">'Free' e-book</span>
                </li>
                </ul>
                <br />
                 <p><!--*Time sensitive notification means for members to confirm booking and make payment within the specified time period announced and/or agreed. All 'Bookings' are via this website. All 'Payments' are to be made via Paypal 'in time' as stated. </p>
                 <p><br />
                   ** 'Gifts' payment for Beneficiary means for members to choose the Purchaser Voucher System <strong>©</strong> . &nbsp;All 'Bookings' are to be made via this website. All 'Payments' are to be made via Paypal 'in time' as stated. --></p>
            
                </div>
            <p>&nbsp;</p>
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
      <p style="margin-top:5px;">Copyright © 2012 Finding The Treasure In You.     All Rights Reserved. </p>

<p style="margin-top:25px;">Share your discovery on: <span class='st_sharethis_hcount'></span>
<span class='st_facebook_hcount' ></span>
<span class='st_twitter_hcount' ></span>
<span class='st_linkedin_hcount' ></span>
<span class='st_email_hcount' ></span> </p> </div>
    
  </div>
</div>
<script type="text/javascript">
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2");
var CollapsiblePanel3 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel3");
</script>
</body>
</html>
