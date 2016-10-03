<?php

function pageController() {
$randomThings = ['harpsichord', 'eternity', 'violets', 'drowsy'];

return ['things' => $randomThings];
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Random Stuff</title>
</head>
<body>
<h1>Here's a list</h1>
	<ul>	
	<?php foreach ($things as $thing): ?>
		<li><?= $thing; ?></li>
	<?php endforeach; ?>
	</ul>

</body>
</html>