<?php include 'adminpwd.php';?>
<? include 'admin_header.php';?>
<?php
function get_all_subjects(){
	//global $connection;
	$query="SELECT *
			FROM  `pbooking`
			WHERE  `auth` =0
			LIMIT 0,1 ";
	$subject_set= mysql_query($query);
	//confirm_query($subject_set);
	return $subject_set;
}
$subject_set=get_all_subjects();
Print "<table cellpadding=5 align=center border=1 width=\"100%\">";
/*Print "<tr>";

Print "<th>Name:</th>";
Print "<th>Telephone:</th>";
Print "<th>Email:</th>";
Print "<th>Address:</th>";
Print "<th>Time:</th>";
Print "<th>Date:</th>";
Print "<th>CB1:</th>";
Print "<th>CB2:</th>";
Print "<th>CB3:</th>";
Print "<th>CB4:</th>";
Print "<th>CB5:</th>";
Print "<th>APPROVAL</th>";
Print "</tr>";*/
Print" <div align=\"center\">";
Print "<form method=\"POST\"  action=\"updatepb.php\" >";
while ($subject=mysql_fetch_array($subject_set))
{
	/*Print "<tr>";
	
	Print "<td>".$subject['name'] . "</td> ";
	Print "<td>".$subject['telephone'] . " </td>";
	Print "<td>".$subject['email'] . " </td>";
	Print "<td>".$subject['address'] . " </td>";
	Print "<td>".$subject['time'] . " </td>";
	Print "<td>".$subject['date'] . " </td>";
	Print "<td>".$subject['cb1'] . " </td>";
	Print "<td>".$subject['cb2'] . " </td>";
	Print "<td>".$subject['cb3'] . " </td>";
	Print "<td>".$subject['cb4'] . " </td>";
	Print "<td>".$subject['cb5'] . " </td>";
	Print "<td><label>";
	Print " Approve <input type=\"radio\" name=\"checkbox[{$subject['id']}]\" value=\"1\"   />
	</label>". " </td>";
	Print "<td>  <label>";
	Print "Delete <input type=\"radio\" name=\"checkbox[{$subject['id']}]\" value=\"2\"   />
	</label>". " </td>";
	Print"</tr>";*/
	
?>	
  <tr>
    <td>NAME</td>
    <td colspan="2"><? echo $subject['name'];?></td>
  </tr>
  <tr>
    <td>TELEPHONE</td>
    <td colspan="2"><? echo $subject['telephone'];?></td>
  </tr>
  <tr>
    <td>EMAIL</td>
    <td colspan="2"><? echo $subject['email'];?></td>
  </tr>
  <tr>
    <td>ADDRESS</td>
    <td colspan="2"><? echo $subject['address'];?></td>
  </tr>
  <tr>
    <td>TIME</td>
    <td colspan="2"><? echo $subject['time'];?></td>
  </tr>
  <tr>
    <td>DATE</td>
    <td colspan="2"><? echo $subject['date'];?></td>
  </tr>
  <tr>
    <td>One-with-One Interactive Session</td>
    <td colspan="2"><? echo $subject['cb1'];?></td>
  </tr>
  <tr>
    <td>Conflict Resolution Session</td>
    <td colspan="2"><? echo $subject['cb2'];?></td>
  </tr>
  <tr>
    <td>Group Events</td>
    <td colspan="2"><? echo $subject['cb3'];?></td>
  </tr>
  <tr>
    <td>Phobias</td>
    <td colspan="2"><? echo $subject['cb4'];?></td>
  </tr>
  <tr>
    <td>Corporate</td>
    <td colspan="2"><? echo $subject['cb5'];?></td>
  </tr>
	
 <?php
 Print "<tr>";
 Print " <td>";
 Print " Approve <input type=\"radio\" name=\"checkbox[{$subject['id']}]\" value=\"1\"   />
 </label>". " </td>";
 Print "<td>  <label>";
 Print "Delete <input type=\"radio\" name=\"checkbox[{$subject['id']}]\" value=\"2\"   />
 </label>". " </td>";
 Print"</tr>";
 Print "</table>";
 Print "<input type=\"submit\" name=\"button\" value=\"Submit\" /></div>";
 Print "</form>";
}
?>
<? include 'admin_footer.php';?>