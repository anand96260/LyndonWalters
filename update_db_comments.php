<?php 
        require 'includes/db.php';
		
       if (isset($_POST['submit_comment'])) {
			$add_member = mysql_query("INSERT INTO `lyndon_walter`.`comments` (`name`,`email`,`comments`) VALUES ('$_POST[name_comment]','$_POST[email_comment]','$_POST[user_comments]')");
        header('Location: contact-thankyou.html');
        }
        ?>