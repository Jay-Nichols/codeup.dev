<?php

function pageController() {
	$randomThings = ['harpsichord', 'eternity', 'violets', 'drowsy'];

	if (isset($_GET['readthis'])) {
		$something = $_GET['readthis'];
	} else {
		$something = "This text is in the query string";
	}

	return ['things' => $randomThings, 'readthis' => $something];
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

<form method="GET" action="https://duckduckgo.com/">
    <input type="text" name="" value="" placeholder="Search DuckDuckGo">
    <button type="submit">Go!</button>
</form>
<div>
	<h1><a href="something_random.php?readthis=<?= $readthis; ?>">Click here to add a query string</a></h1>
	<h2>This should be in the query string: <?= $readthis; ?></h2>
	
</div>
</body>
</html>