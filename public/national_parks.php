<?php
require_once "../php/db_connect.php";
require_once "../php/park_migration.php";
require_once "../php/park_seeder.php";
require_once "../src/Input.php";

function pageController($dbc) 
{


$page = !(Input::has('page')) ? 1 : max([Input::get('page', 1), 1]);
$offset = $page * 4 - 4;

var_dump($offset);


$query = "SELECT * FROM national_parks ORDER BY name ASC LIMIT 4 offset {$offset}";
var_dump($query);

$stmt = $dbc->prepare($query); 

$stmt->execute();


// $stmt = $dbc->query("SELECT * FROM national_parks ORDER BY name ASC LIMIT 4 offset {$offset} ");

$parks = [];
while ($park = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $parks[] = $park;
}


var_dump($_POST);

if(!empty($_POST)) {
  $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)";

  $stmt = $dbc->prepare($query);
  $stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
  $stmt->bindValue(':location', $_POST['location'], PDO::PARAM_STR);
  $stmt->bindValue(':date_established', $_POST['date_established'], PDO::PARAM_STR);
  $stmt->bindValue(':area_in_acres', $_POST['area_in_acres'], PDO::PARAM_STR);
  $stmt->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
  $stmt->execute();
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
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Location</th>
				<th>Date Established</th>
				<th>Area in Acres</th>
				<th>Description</th>
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
			<td><?= $park['description']; ?></td>
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
   <div class="container">
   <div class="Row">
       <div class="page-header"><h1>Add A Park</h1></div>
       <form method="post" class="form-horizontal">
           <div class="form-group">
               <label for="name" class="col-sm-2 control-label">
                   Name
               </label>
               <div class="col-sm-10">
                   <input
                       type="text"
                       class="form-control"
                       name="name"
                       id="name"
                       placeholder="Add Park"
                       
                   >
               </div>
           </div>
           <div class="form-group">
               <label for="location" class="col-sm-2 control-label">
                   Location
               </label>
               <div class="col-sm-10">
                   <input
                       type="text"
                       class="form-control"
                       name="location"
                       id="location"
                       placeholder="Add Park Location"
                       
                   >
               </div>
           </div>
           <div class="form-group">
               <label for="date_established" class="col-sm-2 control-label">
                   Date Established
               </label>
               <div class="col-sm-10">
                   <input
                       type="text"
                       class="form-control"
                       name="date_established"
                       id="date_established"
                       placeholder="Date Established"
                       
                   >
               </div>
           </div>
            <div class="form-group">
               <label for="area_in_acres" class="col-sm-2 control-label">
                   Area in Acres
               </label>
               <div class="col-sm-10">
                   <input
                       type="number"
                       class="form-control"
                       name="area_in_acres"
                       id="area_in_acres"
                       placeholder="Area in Acres"
                       
                   >
               </div>
           </div>
            <div class="form-group">
               <label for="description" class="col-sm-2 control-label">
                   Description
               </label>
               <div class="col-sm-10">
                   <input
                       type="text"
                       class="form-control"
                       name="description"
                       id="description"
                       placeholder="Description"
                      
                   >
               </div>
           </div>
           <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
                   <button type="submit" class="btn btn-primary">
                       <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">
                       </span>
                       Save
                   </button>
               </div>
           </div>
       </form>
   </div>
</div>

</body>
</html>
