<?php
require_once "../php/db_connect.php";
require_once "../php/park_migration.php";
require_once "../php/park_seeder.php";
require_once "../src/Input.php";

function pageController($dbc) 
{


$page = !(Input::has('page')) ? 1 : max([Input::get('page', 1), 1]);
$offset = $page * 4 - 4;
$stmt = $dbc->query("SELECT * FROM national_parks ORDER BY name ASC LIMIT 4 offset {$offset} ");

$parks = [];
while ($park = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $parks[] = $park;
}



return ['parks' => $parks, 'page' => $page];


}

extract(pageController($dbc));


?>

<html>
<head>
	<title>National Parks</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/css/adlister.welcome.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
</head>
<body>
	<h1>National Parks</h1>
	
	<form method= "POST">
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
		<tfoot>
             <tr>
                 <td colspan="4">
                     <!-- The values in this pagination control indicate you're currently viewing page 2 -->
                     <nav aria-label="Page navigation" class="text-center">
                         <ul class="pagination">
                             <li>
                                 <a href="?page=<?= $page - 1 ?>" aria-label="Previous">
                                     <span aria-hidden="true">&laquo;</span>
                                 </a>
                             </li>
                             <li><a href="?page=1">1</a></li>
                             <li><a href="?page=2">2</a></li>
                             <li><a href="?page=3">3</a></li>
                             <li><a href="?page=4">4</a></li>
                             <li><a href="?page=5">5</a></li>
                             <li>
                                 <a href="?page=<?= $page + 1 ?>" aria-label="Next">
                                     <span aria-hidden="true">&raquo;</span>
                                 </a>
                             </li>
                         </ul>
                     </nav>
                 </td>
             </tr>
          </tfoot>
       </table>
   </form>

</body>
</html>
