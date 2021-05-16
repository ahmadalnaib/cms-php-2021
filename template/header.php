<?php require_once("config/db.php");


#bring categories to navbar

$query= "SELECT * FROM categories";
$categories=mysqli_query($conn,$query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>CMS | <?php echo $title ?></title>
</head>
<body>
  
  <header>
  <nav>
  <h1 class="logo">Cms</h1>
  <ul>

  <?php while($row=mysqli_fetch_assoc($categories)): ?>
  <li><a href="#"><?php echo $row['cat_title'] ?></a></li>
  <?php endwhile; ?>
  
  </ul>
  </nav>
  </header>
<div class="container">
