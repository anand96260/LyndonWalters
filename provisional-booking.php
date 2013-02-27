<?php 
// Connects to your Database 

 require 'includes/db.php';
//print_r($_POST);
if (isset($_POST['submit'])) 
	{ // if form has been submitted
// makes sure they filled it in
 	if(!$_POST['name'] |!$_POST['telephone'] | !$_POST['address'] |!$_POST['time'] |!$_POST['email']) {
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
 	echo "Thank You!!! Your Booking submitted successfully.";
	
 }
 }
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="SpryAssets/structure.css" rel="stylesheet" type="text/css" media="screen" />
<title>Provisional Booking</title>


<script>
// This adds 'placeholder' to the items listed in the jQuery .support object. 
jQuery(function() {
Uncaught ReferenceError: jQuery is not defined
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
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<script type="text/javascript" src="js/jquery.ui.timepicker.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
	
	<script>
	$(function() {
		$( "#datepicker" ).datepicker({ minDate: 0 });
		
	});
	$(function() {
		
		$('#timepicker').timepicker({
		    showPeriod: true,
		    showLeadingZero: true
		});
		});
	</script>
<script type="text/javascript">

(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#form1").validate({
                rules: {
                	name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    telephone: {
                    	required: true,
                    	digits: true,
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

</head>


<body>

<div id="inner">
	<h1>Provisional Booking</h1>

  <div id="pleftcol">
   	<h2>Contact Details</h2>
      <p> Please note that this is a provisional booking. Once you have completed the form Lyndon will be in contact to discuss your full requirements, pricing and payment options.</p>
      <form id="form1" name="form1" method="post" action="" autocomplete="off">
      <fieldset>
      
      	<input type="text" class="topfields required" name="name" placeholder="Name" />
        <input type="text" class="topfields required onlydigits" name="telephone" placeholder="Telephone" />
        <input type="text" class="topfields required email" name="email"  placeholder="Email" />

      	<textarea class="topfieldaddress required" name="address" placeholder="Address"></textarea>
        
        <input type="text" class="time topfields required" name="time" id="timepicker" placeholder="Best Time To Call" /> <br />
        <input type="text" class="date topfields required" name="date" id="datepicker" placeholder="Best Date To Call" />
      
      
      </fieldset>
      
        <div id="termstxt">By completing and submitting this form you agree to the <a href="#">terms and conditions.</a></div>
        
    </div>
    <div id="prightcol">
    	<h2>Package Details</h2>
        <p>Please ensure you specify which of the following packages apply to your needs.</p>
        
        <textarea class="descript" placeholder="Comment"></textarea>
        

    
    <h2>Select Packages you are interested in</h2>
    
            <fieldset>
        <input type="hidden" name="checkbox1" value="0">
        <input type="checkbox" name="checkbox1" value='1' /><label>One-with-One Interactive Session</label><br />
		<input type="hidden" name="checkbox2" value="0">
        <input type="checkbox" name="checkbox2" value='1'/><label>Conflict Resolution Session (individual or couples)</label><br />
		<input type="hidden" name="checkbox3" value="0">
        <input type="checkbox" name="checkbox3" value='1'/><label>Group Events, Inspirational Speaking & Workshops</label><br />
		<input type="hidden" name="checkbox4" value="0">
        <input type="checkbox" name="checkbox4" value='1'/><label>Phobias</label><br />
		<input type="hidden" name="checkbox5" value="0">
        <input type="checkbox" name="checkbox5" value='1'/><label>Corporate</label><br />
        <button class="search" type="submit" style="margin-left:2px; margin-top:30px; width:330px">Send Provisional Booking</button>
        </fieldset>
		</form>
    
    
    
    
    </div>



</div>




</body>
</html>