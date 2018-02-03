<?php
require('db.php');
require '../phpmailer/PHPMailerAutoload.php';
define("SMTP_HOST","smtp.gmail.com");
define("SMTP_USERNAME","vanshsoni16@gmail.com");
define("SMTP_PASSWORD","v@nshsoni123");
define("SMTP_SECURE","tls");
define("SMTP_PORT",587);
session_start();
$schemeid = $_POST['schemeid'];
$schemename = $_POST['schemename'];
$schemedescription = $_POST['schemedescriptionname'];
$disabilityCategoryId = $_POST['DisabilityIdName'];
//echo $disabilityCategoryId;
mysqli_query($conn,"INSERT INTO `schemes`(`SchemeId`, `SchemeDescription`, `DisabilityCategoryId`, `LinkToPdf`, `SchemeName`) VALUES 
('$schemeid','$schemedescription','$disabilityCategoryId','link will be entered','$schemename')");

$get_udid=mysqli_query($conn,"select UDID from usercategory where DisabilityCategoryId=$disabilityCategoryId");
while($row=mysqli_fetch_array($get_udid)){
	//echo $row['UDID']."<br/>";
	$UDID=$row['UDID'];
	$get_details=mysqli_query($conn,"select * from users where UDID=$UDID");
	//echo $get_details['email']."<br/>";
	while($row_inner=mysqli_fetch_array($get_details)){
		//echo $row_inner['email']."<br/>";
		

				$subject = "Congratulations.....New Scheme is published";
				  // HTML email starts here
   
   $body  = "<html><body>";
   
   $body .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
   
   $body .= "<tr><td>";
   
   $body .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0'>";
    
   $body .= "<thead>
      <tr>
       <th style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:18px;' >Scheme Id</th>
	   <th style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:18px;' >Scheme Name</th>
	   <th style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:18px;' >Scheme Description</th>
      </tr>
      </thead>";
    
   $body .= "<tbody>
      <tr align='center' style='font-family:Verdana, Geneva, sans-serif;'>
       <td style='background-color:#00a2d1; text-align:center;'>".$schemeid."</td>
       <td style='background-color:#00a2d1; text-align:center;'>".$schemename."</td>
	   <td style='background-color:#00a2d1; text-align:center;'>".$schemedescription."</td>
      </tr>
     </tbody>";
    
   $body .= "</table>";
   
   $body .= "</td></tr>";
   $body .= "</table>";

				$mail = new PHPMailer;
				$mail->IsSMTP();                                      // Set mailer to use SMTP
				$mail->Host = SMTP_HOST;                            // Specify main and backup server
				$mail->Port = SMTP_PORT;                            // Set the SMTP port
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = SMTP_USERNAME;                    // SMTP username
				$mail->Password = SMTP_PASSWORD;                    // SMTP password
				$mail->SMTPSecure = SMTP_SECURE;

				$mailer_email = SMTP_USERNAME;
				$mail->From = $mailer_email;
				$mail->FromName = $mailer_email;
				$mail->AddAddress($row_inner['email']);                         // Add a recipient
				$mail->IsHTML(true);                                  // Set email format to HTML
				$mail->Subject = $subject;
				$mail->Body = $body;

				if (!$mail->Send()) {
					?>
					<script>
						alert("<?php echo $mail->ErrorInfo;?>");
					</script>
					<?php
				} 
				else {
					echo 'Sent Mail<br/>';
				}
	}
}
?>