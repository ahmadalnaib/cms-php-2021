<?php
$title="home";
require_once("template/header.php");



if(isset($_POST['submit'])){
  $search=$_POST['search'] ?? null;


  // search in db
  $query="SELECT * FROM posts WHERE post_title LIKE '%$search%' ";

  $search_query=mysqli_query($conn,$query);

  if(!$search_query){
    die("query failed" . mysqli_error($conn));
  }

  $count=mysqli_num_rows($search_query);

  if($count ===0){
    echo "<h1>No result</h1>";
  } else{
    
  }


}





#bring post 

$query="SELECT * FROM posts ";
$posts=mysqli_query($conn,$query);
?>



<h1>last posts</h1>



<form class="search" action="index.php" method="post">
  <input type="search" name="search" placeholder="php ..." >
  <button class="btn" type="submit" name="submit">search</button>
</form>


<?php while($row=mysqli_fetch_assoc($posts)): ?>

<div class="home">

  <div class="home-content">
  <h2><?php echo $row['post_title'] ?></h2>
  <span><?php echo $row['post_date'] ?></span>
  </div>
 

  </div>


  <?php endwhile ?>









<?php require_once("template/footer.php") ?>






