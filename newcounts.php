<?php
//include 'includes/db.php';
function get_all_subjects(){
	//global $connection;
	$query="SELECT *
			FROM  `register`
			WHERE  `auth` =0";
	$subject_set= mysql_query($query);
	//confirm_query($subject_set);
	return $subject_set;
}
$subject_set=get_all_subjects();
$newusers = mysql_num_rows($subject_set);
//echo "$newusers";
//echo "$query";
 function get_all_subjects1(){
	//global $connection;
	$query="SELECT *
			FROM  `testimornial`
			WHERE  `auth` =0";
	$subject_set1= mysql_query($query);
	//confirm_query($subject_set);
	return $subject_set1;
}
$subject_set1=get_all_subjects1();
$newtesti = mysql_num_rows($subject_set1);
//echo "$newtesti";

function get_all_subjects2(){
	//global $connection;
	$query="SELECT *
			FROM  `pbooking`
			WHERE  `auth` =0";
	$subject_set2= mysql_query($query);
	//confirm_query($subject_set);
	return $subject_set2;
}
$subject_set2=get_all_subjects2();
$newpbooking = mysql_num_rows($subject_set2);


function get_all_subjects3(){
	//global $connection;
	$query="SELECT *
			FROM  `news`
			WHERE  `auth` =0";
	$subject_set3= mysql_query($query);
	//confirm_query($subject_set);
	return $subject_set3;
}
$subject_set3=get_all_subjects3();
$news = mysql_num_rows($subject_set3);

//echo "$newpbooking";

?>
