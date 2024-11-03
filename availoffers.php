
<?php
// error_reporting(E_ALL);
//echo phpinfo();
//exit;
$name=$_POST['name'];
$telephone=$_POST['mobile'];
$email=$_POST['email'];

extract($_POST, EXTR_OVERWRITE);


$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:jaideep.kumar@grahrealtors.com\n";
$recipient="jaideep2121@gmail.com, contact.grahrealtors@gmail.com, info.grahrealtors@gmail.com";

$message="\The Prestige City - Google Ads Lead\n";

$subject="The Prestige City - Google Ads Lead";

$message = '<table width="500" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#FFF" style="font-weight: 700;font-size: 12px;color: #666;font-family:Arial, Helvetica, sans-serif; background-color:#FFFFFF;">
<tr bgcolor="#2e3192">
<td width="500" colspan="2" style="font-weight: 700;font-size: 13px;color: #FFF; border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">The Prestige City - Google Ads Lead</td>
</tr>
<tr>
<td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Name</td>
<td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.$name.'</td>
</tr>
<tr>
<td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">mobile</td>
<td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.$mobile.'</td>
</tr>
<tr>
<td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Email ID</td>
<td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.$email.'</td>
</tr>

</table>';

mail($recipient, $subject, $message, $headers);
echo "<meta http-equiv='REFRESH' content='0;url=thankyou.html'>";

$headers1="";
?>
