<?php

$name = $_POST['name'];
$mobile   = $_POST['mobile'];
$email    = $_POST['email'];
$service    = $_POST['service'];
$message    = $_POST['message'];

if(trim($name) == '') {
	echo '<div class="error_message">Attention! You must enter your name.</div>';
	exit();
}  
else if(trim($mobile) == '') {
	echo '<div class="error_message">Attention! Please enter your mobile.</div>';
	exit();
}
else if(trim($email) == '') {
	echo '<div class="error_message">Attention! Please enter a valid email address.</div>';
	exit();
} 
else if(trim($service) == '') {
	echo '<div class="error_message">Attention! Please enter your service.</div>';
	exit();
}
else if(trim($message) == '') {
	echo '<div class="error_message">Attention! Please enter a valid message.</div>';
	exit();
} 

$to = "rsk@myskillsacademy.in";

$subject = 'You\'ve been contacted by ' . $name . '.';
$msg = "Name: ".$name."\n\nMobile: ".$mobile."\n\nEmail: ".$email."\n\nService: ".$service."\n\nMessage: ".$message;
$headers = "From: $email";

if(mail($to, $subject, $msg, $headers))
 {
	// Email has sent successfully, echo a success page.
	echo "<fieldset>";
    echo "<div id='success_page'>";
	echo "<h1>Your Message Sent Successfully.</h1>";
	echo "<p>Thank you <strong>$name </strong>, your message has been submitted to us. We will contact you shortly </p>";
	echo "</div>";
	echo "</fieldset>";
	
	echo '<a href="index.html">Return to Home</a>';
} 
else {
	echo 'ERROR!';
}