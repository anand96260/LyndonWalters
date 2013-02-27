<?php include 'adminpwd.php';?>
<?php include 'admin_header.php';?>
<?php 
 // Connects to your Database 
 function get_all_subjects(){
 	//global $connection;
 	$query="SELECT * 
			FROM  `testimornial` 
			WHERE  `auth` =0
			LIMIT 0 , 7";
 	$subject_set= mysql_query($query);
 	//confirm_query($subject_set);
 	return $subject_set;
 }
$subject_set=get_all_subjects();
$check2 = mysql_num_rows($subject_set);
if ($check2==0)
{
	Print "NO New Testimonials to Review!!!";
}
else {
Print "<table cellpadding=10 align=center>";
Print "<tr>";
Print "<th>Name:</th>";
Print "<th>e-mail:</th>";
Print "<th>Location:</th>";
Print "<th>Before :</th>";
Print "<th>After :</th>";
Print "<th>Approve:</th>";
Print "</tr>";
Print "<form method=\"POST\"  action=\"update.php\" >";
 while ($subject=mysql_fetch_array($subject_set)) 
 { 
 Print "<tr>"; 
 Print "<td>".$subject['name'] . "</td> "; 
 Print "<td>".$subject['email'] . " </td>";
 Print "<td>".$subject['location'] . " </td>";
 Print "<td>".$subject['bmeet'] . " </td>";
 Print "<td>".$subject['ameet'] . " </td>";
 Print "<td><label>";
 Print " Approve <input type=\"radio\" name=\"checkbox[{$subject['id']}]\" value=\"1\"   />
  </label>". " </td>";
 Print "<td>  <label>";
 Print "Delete <input type=\"radio\" name=\"checkbox[{$subject['id']}]\" value=\"2\"   />
 </label>". " </td>";
 /* Print"<input type=\"radio\" name=\"checkbox{$subject['id']}\" value=\"2\" /> No
					&nbsp;
	  <input type=\"radio\" name=\"checkbox{$subject['id']}\" value=\"1\" /> Yes"; */
  Print"</tr>"; 
 }
 
 Print "</table>";
 Print "<div align=\"center\"><input type=\"submit\" name=\"button\" value=\"Submit\" /></div>";
 Print "</form>";
}
 ?>
 <?php include 'admin_footer.php';?> 