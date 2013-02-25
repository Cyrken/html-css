<?php

$errors = array();
$display_thanks = false;

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$message = filter_input(INPUT_POST,'message', FILTER_SANITIZE_STRING);

// Check to see if the form has been submitted before validating
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Check to make sure all the fields were filled out
	if (empty($name)) {
		$errors['name'] = true;
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = true;
	}

	if (mb_strlen($message) < 25) { // mb_strlen = multi-byte string length
		$errors['message'] = true;
	}

	// If the $errors array is empty, all the user submitted content is valid
	// If there is anything inside $errors, something isn't valid
	if (empty($errors)) {
		$display_thanks = true;
		$subject = 'Message from your website!';

		// Prepare the message to be send by adding the person's name, email address, and message
		$email_message = 'Name: ' . $name . "\r\n"; // "\r\n" is a new line in an e-mail
		$email_message .= 'Email: ' . $email . "\r\n";
		$email_message .= "Message:\r\n" . $message;

		// Set the e-mail from to the name and e-mail of the person who sent the message
		$headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n";

		// Send the e-mail message to your e-mail address
		mail('bradlet@algonquincollege.com', $subject, $email_message, $headers);
	}
}
