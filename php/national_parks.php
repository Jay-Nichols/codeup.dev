<?php
function pageController() {

$stmt = $dbc->query('SELECT * FROM national_parks');

return ['stmt' => $stmt];



}

extract(pageController());


?>

<html>
<head>
	<title>National Parks</title>
</head>
<body>

</body>
</html>
