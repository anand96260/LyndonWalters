<?php include 'adminpwd.php';?>
<?php
// Connects to your Database
/* mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db("lyndon") or die(mysql_error()); */
global $subject;
//
if (isset($_POST['checkbox']) && is_array($_POST['checkbox']) ) {

	//echo '</br> Submission of delstaffform FOUND !';
	 
	//print_r($_POST);
	$array = $_POST["checkbox"];

	foreach($array as $key=>$value){
		//echo "<br>Value: ".$value."<br>";
		$query="UPDATE  `lyndon_walter`.`comments`
		SET  `auth` =  '{$value}'
		WHERE  `comments`.`id` =$key";
		//echo "$query";
		mysql_query($query);
}
mysql_query("DELETE FROM `comments`
			 WHERE `auth` = 2");
}
} 
redirect_to("auth_comments.php");
?>