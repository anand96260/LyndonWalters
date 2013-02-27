<?php include 'adminpwd.php';?>
<?php include 'admin_header.php';?>
<?php 
 // Connects to your Database 
 function get_all_subjects(){
 	//global $connection;
 	$query="SELECT * 
			FROM  `news` 
			WHERE  `auth` =0 
			LIMIT 0 , 7";
 	$subject_set= mysql_query($query);
 	//confirm_query($subject_set);
 	return $subject_set;
 }
$subject_set=get_all_subjects();
$newusers = mysql_num_rows($subject_set);
if ($newusers==0)
{
	Print "NO New User Request to Review!!!";
}
else {
Print "<table cellpadding=10 align=center>";
Print "<tr>";
//Print "<th>UserName:</th>";
Print "<th>e-mail:</th>";
//Print "<th>Telephone:</th>";
Print "<th>Action</th>";
Print "</tr>";
Print "<form method=\"POST\"  action=\"updatenews.php\" >";
 while ($subject=mysql_fetch_array($subject_set)) 
 { 
 Print "<tr>"; 
 //Print "<td>".$subject['username'] . "</td> "; 
 Print "<td>".$subject['email'] . " </td>";
// Print "<td>".$subject['password'] . " </td>";
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