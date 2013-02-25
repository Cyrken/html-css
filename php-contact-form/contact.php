<?php

require_once 'includes/contact-controller.php';

?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Form</title>
	<link href="css/general.css" rel="stylesheet">
</head>
<body>

	<?php if ($display_thanks) : ?>

	<strong>Thanks!</strong>

	<?php else : ?>

	<form method="post" action="contact.php">
		<div>
			<label for="name">Name<?php if (isset($errors['name'])) : ?> <strong>is required</strong><?php endif; ?></label>
			<input id="name" name="name" value="<?php echo $name; ?>" required>
		</div>
		<div>
			<label for="email">E-mail Address<?php if (isset($errors['email'])) : ?> <strong>is required</strong><?php endif; ?></label>
			<input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
		</div>
		<div>
			<label for="message">Message<?php if (isset($errors['message'])) : ?> <strong>must be at least 25 characters</strong><?php endif; ?></label>
			<textarea id="message" name="message" required><?php echo $message; ?></textarea>
		</div>
		<div>
			<button type="submit">Send Message</button>
		</div>
	</form>

	<?php endif; ?>

</body>
</html>
