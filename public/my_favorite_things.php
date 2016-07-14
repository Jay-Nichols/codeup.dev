<?php

function pageController() {

	$data = [];
	$data['favoriteThings'] = ['Playing guitar', 'Sleeping', 'Running in the park', 'Daytime highs in the 70s', 'Working out'];


	return $data;
	//return ['Playing guitar', 'Sleeping', 'Running in the park', 'Daytime highs in the 70s', 'Working out'];
}

extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Favorite Things</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/css/my_favorite_things.css">
</head>
<body>
	<h1>My Favorite Things</h1>
	<table>
		<?php foreach ($favoriteThings as $favoriteThing): ?>
			<tr><td><?= $favoriteThing; ?><tr></td>
		<?php endforeach; ?>

	</table>
	
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
"use strict";


$('td').each(function(index) {
    if (index % 2 !== 0) {
        $(this).css('background-color', '#D3D3D3');
    }
});

</script>

</body>
</html>