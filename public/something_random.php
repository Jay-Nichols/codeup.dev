<?php

$randomThings = ['harpsichord', 'eternity', 'violets', 'drowsy'];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Random Stuff</title>
</head>
<body>
<h1>Here's a list</h1>
	<ul>	
	<?php foreach ($randomThings as $thing) { ?>
		<li><?php echo $thing; ?></li>
	<?php } ?>
	</ul>

</body>
</html>