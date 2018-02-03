<?php
		session_start();
		require('php/db.php');
		$udid=$_SESSION["udid"];
		$query = "SELECT * FROM `users` WHERE UDID='$udid'";
		$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
		$rows = mysqli_fetch_array($result);
		require 'phpmailer/PHPMailerAutoload.php';
				define("SMTP_HOST","smtp.gmail.com");
				define("SMTP_USERNAME","vanshsoni16@gmail.com");
				define("SMTP_PASSWORD","v@nshsoni123");
				define("SMTP_SECURE","tls");
				define("SMTP_PORT",587);

				$subject = "Monthly Bill Expenses";
				$body = 'Your UDID Number:'.$_SESSION["udid"];

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
				$mail->AddAddress($rows['email']);                         // Add a recipient
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
	// Account details
	$username = 'vansh.soni@technonjr.org';
	$number=$rows['phonenumber'];
	$hash = 'e3b792e3af68d0a4deceb32916b74f43589bc292107f652e51d3c5574e13d61f';
	
	// Message details
	//$numbers = array(918123456789, 918987654321);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode('Your UDID:'.$_SESSION["udid"]);
 
	//$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('username' => $username, 'hash' => $hash, 'numbers' => $number, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('http://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
?>
?>