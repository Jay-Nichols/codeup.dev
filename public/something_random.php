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
	<?php foreach ($randomThings as $thing): ?>
		<li><?= $thing; ?></li>
	<?php endforeach; ?>
	</ul>

</body>
</html>