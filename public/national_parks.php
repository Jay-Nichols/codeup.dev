<?php

function pageController() {

require_once "../php/park_migration.php";
require_once "../php/park_seeder.php";
// require "../src/Input.php";

$stmt = $dbc->query('SELECT * FROM national_parks');
// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     print_r($row);
// }


return ['parks' => $stmt->fetchAll(PDO::FETCH_ASSOC)];


}

extract(pageController());
var_dump($parks);

?>

<html>
<head>
	<title>National Parks</title>
</head>
<body>
	<h1>National Parks</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Location</th>
				<th>Date Established</th>
				<th>Area in Acres</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($parks as $park): ?>
		<tr>

			<td><?= $park['id']; ?></td>
			<td><?= $park['name']; ?></td>
			<td><?= $park['location']; ?></td>
			<td><?= $park['date_established']; ?></td>
			<td><?= $park['area_in_acres']; ?></td>
		</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>
