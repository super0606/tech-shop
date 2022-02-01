<?php require("script.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="How to store form data in a json file with php">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Storing messages in a json file with PHP</title>
</head>
<body>

	<h1>Storing messages in a JSON file with PHP</h1>

	<!-- Let's begin with our form element -->
	<form action="" method="post">
		<h3>descrivici la tua esperienza</h3>
		<label>Enter your email</label>
		<input type="text" name="email">

		<label>Enter a subject</label>
		<input type="text" name="subject" >

		<label>Enter your message</label>
		<textarea name="message">This is my message</textarea>

		<input type="submit" name="submit">

		<p class="error"><?php echo @$error; ?></p>
		<p class="success"><?php echo @$success; ?></p>
	</form>
	
</body>
</html>