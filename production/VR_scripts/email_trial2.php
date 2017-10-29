<?php


require 'PHPMailer-master\PHPMailer-master\PHPMailerAutoload.php';

// Fetching data that is entered by the user
$email = "talpuri.international.colony@gmail.com";
$password = "talpuri123";
$to_id = "priyashrm1136@gmail.com";
$message = "Hello";
$subject = "Blah blah blah";

// Configuring SMTP server settings
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;

// Email Sending Details
$mail->addAddress($to_id);
$mail->Subject = $subject;
$mail->msgHTML($message);

// Success or Failure
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="para">'.$error.'</p>';
}
else {
echo '<p id="para">Message sent!</p>';
}



?>

