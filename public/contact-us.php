<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>
	<h1>Contact Us</h1>
	<form action="contact-us-send.php" method="POST">
		<label for="name">Your Name:</label>
		<input type="text" id="name" name="name"><br>
	
		<label for="email">Your Email:</label>
		<input type="text" id="email" name="email"><br>
	
		<label for="comment">Your Comment:</label>
		<textarea name="comment" id="comment"></textarea><br>
	
		<input type="submit" name="submit" value="Click to Send Your Comments"><br>			
	</form>
</body>
</html>