<?php
require_once "../php/db_connect.php";
//require_once "../php/park_migration.php";
//  require_once "../php/park_seeder.php";
require_once "../src/Input.php";

function pageController($dbc) 
{
$parks = [];
$page = 1;
try {

$page = !(Input::has('page')) ? 1 : max([Input::getNumber('page', 1), 1]);
$offset = $page * 4 - 4;
$query = "SELECT * FROM national_parks LIMIT 4 offset {$offset}";
var_dump($query);

$stmt = $dbc->prepare($query); 
$stmt->execute();
while ($park = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $parks[] = $park;
}

} catch (Exception $e) {
  echo 'An error occurred: ' . $e->getMessage();
}


// $stmt = $dbc->query("SELECT * FROM national_parks ORDER BY name ASC LIMIT 4 offset {$offset} ");

$errors = [];

if(!empty($_POST)) {
  try {
    $name = Input::getString('name');
  } catch (InvalidArgumentException $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  } catch (OutOfRangeException $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  } catch (DomainException $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  } catch (LengthException $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  } catch (Exception $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  }
  try {
    $location = Input::getString('location');
  } catch (InvalidArgumentException $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  } catch (OutOfRangeException $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  } catch (DomainException $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  } catch (LengthException $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  } catch (Exception $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  }
  try {
    $date_established = Input::getString('date_established');
  } catch (Exception $e) {
    array_push($errors, 'An error occurred' . $e->getMessage());
  } 
  try {
    $area_in_acres = Input::getString('area_in_acres');
  } catch (InvalidArgumentException $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  } catch (OutOfRangeException $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  } catch (DomainException $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  } catch (RangeException $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  } catch (Exception $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  } 

  try {
    $description = Input::getString('name');
  } catch (InvalidArgumentException $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  } catch (OutOfRangeException $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  } catch (DomainException $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  } catch (LengthException $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  } catch (Exception $e) {
    array_push($errors, 'An error occurred: ' . $e->getMessage());
  }
}
  // rest of try catches

  if (!empty($_REQUEST)) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)";
    $stmt = $dbc->prepare($query);

    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':location', $location, PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $date_established, PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_STR);
    $stmt->bindValue(':description', $description, PDO::PARAM_STR);
    $stmt->execute();
    
}

//   try {
//   } catch(Exception $e) {
//     array_push($errors, 'An error occurred' . $e->getMessage());
//   }
//   try {
//   } catch(Exception $e) {
//     array_push($errors, 'An error occurred' . $e->getMessage());
//   }
//   try {
//   } catch(Exception $e) {
//     array_push($errors, 'An error occurred' . $e->getMessage());
//   }
//   try {
//   } catch(Exception $e) {
//     array_push($errors, 'An error occurred' . $e->getMessage());
//   }
//   try { 
//   } catch(Exception $e) {
//     array_push($errors, 'An error occurred' . $e->getMessage());
//   }
// } else {
//   var_dump('?');
// }

// var_dump($errors);

return ['parks' => $parks, 'page' => $page, 'errors' => $errors];



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
                       <?php if (!empty($errors)): ?>
                        value="<?php Input::get('name') ?>"
                       <?php endif; ?>
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
                       <?php if (!empty($errors)): ?>
                        value="<?php Input::get('location') ?>"
                       <?php endif; ?>
                       
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
                       <?php if (!empty($errors)): ?>
                        value="<?php Input::get('date_established') ?>"
                       <?php endif; ?>
                       
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
                       <?php if (!empty($errors)): ?>
                        value="<?php Input::get('area_in_acres') ?>"
                       <?php endif; ?>
                       
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
                       <?php if (!empty($errors)): ?>
                        value="<?php Input::get('description') ?>"
                       <?php endif; ?>
                      
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
