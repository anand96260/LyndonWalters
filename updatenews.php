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
		
		$query="UPDATE  `lyndon_walter`.`news`
		SET  `auth` =  '{$value}'
		WHERE  `news`.`id` =$key";
		//echo "$query";
		mysql_query($query);
		
		if($value == 1){
		$email="SELECT `email`
				FROM `lyndon_walter`.`news`
				WHERE `news`.`id` =$key";
		$email_query=mysql_query($email);		
		//echo "$email1";		
	$Email=mysql_fetch_array($email_query);		
	$email_id=$Email['email'];
	//$name=$Email['username'];
	$emailsubject= "Your News letter subcription Accepted - Lyndonwalters.com";
	//$emailbody = "Thankyou $name, your Provisional Bookings at lyndonwalters.com is Activated.\n You can now Login to your account and make payments \n.Login Details\n Username:$email_id \n Password:Your Telephone number.";
	$emailbody = '<table width="100%" cellspacing="2" cellpadding="2">
  <tr>
    <td colspan="2"><div align="center"><strong>News Letter Subcription Accepted</strong></div></td>
  </tr>
  <tr>
    <td colspan="2">Dear Sir/Madam</td>
  </tr>
  <tr>
    <td colspan="2">Your News letter subcription Accepted.</td>
  </tr>
  <tr>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td colspan="2"><p>We have a membership option also,</p>
    </td>
  </tr>
  <tr>
    <td width="50%"><h2><strong>Membership includes</strong></h2></td>
    <td width="50%">&nbsp;</td>
  </tr>
  <tr>
    <td height="239" colspan="2">
	<ul>
		 <li>Free Membership Worth £150 per annum</li>
      <li>Free Monthly Newsletter</li>
      <li>Immediate reduction in cost for `One-with-One` Personal Session for individual member</li>
      <li>Periodic reduction in cost for `Packaged` `One-with-One` Personal Sessions* (N.B. time sensitive notifications, applications and bookings apply)</li>
      <li>Access to the Benefits of `Purchaser Voucher`<br />
        System ©</li>
      <li>Ability to purchase `Gift` for Beneficiary with Purchaser Voucher System ©**</li>
      <li>Access to `Preferred Notification` for `Early Bird` and `Specials` for Group Events (e.g. Workshops)</li>
      <li>Possibility of `Free` e-book</li>
    </ul>
      <br />
    <p>*Terms &amp; Conditions apply.</p></td>
  </tr>
</table>';
	/*$emailbody = '<table border="0" width="100%" cellspacing="5" cellpadding="5">
                                          <tbody>
                                            <tr>
                                              <td width="198">Lyndon Walter </td>
                                              <td width="508"> MemberShip Activation </td>
                                            </tr>
                                            <tr>
                                              <td>Dear Sir/Madam</td>
                                              <td> Your Account has been Activated. </td>
                                            </tr>
                                            <tr>
                                              <td>Login Details:</td>
                                            </tr>
                                            <tr>
                                              <td>User Name:</td>
                                              <td>'.$email_id.'</td>
                                            </tr>
                                            
                                            <tr>
                                              <td>Password</td>
                                              <td>Your Telephone number</td>
                                            </tr>                                            
                                            </tbody>
                                        </table>';*/
	$header="From:".$myemail."\r\n";
	$header.="Reply-To:".$myemail."\r\n";
	$header.="Content-Type: text/html; charset=ISO-8859-1\r\n";
	$header.= "X-Priority: 3\r\n";
	mail($email_id,$emailsubject,$emailbody,$header);
		
}
mysql_query("DELETE FROM `news`
			 WHERE `auth` = 2");
}
} 
redirect_to("authnews.php");
?>
