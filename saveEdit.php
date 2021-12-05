<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Blog Saved</title>
</head>


<body>

<?php



	$file = "./blogs/" . $_POST['title'] . ".txt";
	file_put_contents($file, $_POST['edit']);






?>


  <form method="post" action="index.php">
    <input type = "submit" name="post" value="All Blogs" class="blogs"/>
  </form>



</body>
