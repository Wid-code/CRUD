<?php
  require_once 'DB.php';

  $query = "";

  //Selecting and displaying rows with specified values in chosen columns
  if(isset($_GET["column"]) && is_int($_GET["value"])){
    $query = "SELECT * FROM cars_info WHERE " . $_GET["column"] . " = " . $_GET["value"];
  }
  else if(isset($_GET["column"]) && is_string($_GET["value"])){
    $query = "SELECT * FROM cars_info WHERE " . $_GET["column"] . " = '" . $_GET["value"] . "'";
  }
  else{
    $query = "SELECT * FROM cars_info";
  }
  $result = $conn->query($query);

  //Updating values for chosen row
  if(isset($_GET['id'])){
    $query = "UPDATE cars_info SET brand = '". $_GET["editBrand"] ."', model = '". $_GET["editModel"] ."', fuel = '". $_GET["editFuel"] ."', years = '". $_GET["editYears"] ."' WHERE id = ". $_GET["id"];
    $conn->query($query);
  }
  //Adding new rows with values specified by user
  else if(isset($_GET["newBrand"]) && isset($_GET["newModel"]) && isset($_GET["newFuel"]) && isset($_GET["newYears"])){
    
    $query = "INSERT INTO cars_info (brand, model, fuel, years) VALUES ('" .  $_GET["newBrand"] . "', '" . $_GET["newModel"] . "', '" . $_GET["newFuel"] . "', '" . $_GET["newYears"] . "')";
    $conn->query($query);
    $query = "SELECT * FROM cars_info";
    $result = $conn->query($query);
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <style>
  <?php include 'style.css'; ?>
  </style>
</head>
<body>
  <div class="container">

  <!-- Select form -->
  <form action="index.php" method="get">
    <input type="text" name="column" placeholder="Column">
    <input type="text" name="value" placeholder="Value">
    <input type="submit" class="button" value="Search">    
  </form> 

  <!-- Inserting values from chosen row into form  -->
  <?php if(isset($_GET['editing'])){?>
    <form action="index.php" method="get">
      <input type="text" name="id" value="<?= $_GET["editing"] ?>" disabled>
      <input type="text" name="newBrand" value="<?= $_GET["editBrand"] ?>" placeholder="Brand">
      <input type="text" name="newModel" value="<?= $_GET["editModel"] ?>" placeholder="Model">
      <input type="text" name="newFuel"  value="<?= $_GET["editFuel"] ?>" placeholder="Fuel">
      <input type="text" name="newYears" value="<?= $_GET["editYears"] ?>" placeholder="Year">
      <input type="submit" class="button" value="Edit">    
    </form>
  <?php } else { ?>
    <!-- Basic empty form for inserting values into database -->
    <form action="index.php" method="get">
      <input type="text" name="newBrand" placeholder="Brand">
      <input type="text" name="newModel" placeholder="Model">
      <input type="text" name="newFuel" placeholder="Fuel">
      <input type="text" name="newYears" placeholder="Year">
      <input type="submit" class="button" value="Add">    
    </form>
  <?php } ?>

  <!-- Displaying table in html and inserting data with while loop -->
  <table>
    <tr>
      <th>ID</th>
      <th>BRAND</th>
      <th>MODEL</th>
      <th>FUEL</th>
      <th>YEAR</th>
      <th>DELETE</th>
      <th>UPDATE</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()){?>
      <tr>
        <td><?= $row["id"]; ?></td>
        <td><?= $row["brand"]; ?></td>
        <td><?= $row["model"]; ?></td>
        <td><?= $row["fuel"]; ?></td>
        <td><?= $row["years"]; ?></td>
        <td><a class="button" href="delete.php?id=<?= $row["id"]?>">Delete</a></td>
        <td><a class="button" href="index.php?editing=<?= $row["id"]?>&editBrand=<?= $row["brand"]?>&editModel=<?= $row["model"]?>&editFuel=<?= $row["fuel"]?>&editYears=<?= $row["years"]?>">Update</a></td>
      </tr>
    <?php } ?>

  </table>
  </div>
</body>
</html>
<!-- Closing the connection with database -->
<?php $conn->close(); ?>