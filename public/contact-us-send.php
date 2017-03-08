<?php 
if(isset($_POST['submit'])) {
	$msg = 'Name: ' . $_POST['name'] . "\n"
		. 'Email: ' . $_POST['email'] . "\n"
		. 'Comment: ' . $_POST['comment'];
	$to = "receivingemailfromform@gmail.com";
	$subject = "Sample Contact Us Form";
	mail($to, $subject, $msg);
	header('location: contact-us-thank-you.php');
} else {
	header('location: contact-us.php');
}
?>