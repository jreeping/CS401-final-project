<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Blog Deleted</title>
</head>


<body>

<?php

if(isset($_POST['title'])){

	$file = "./blogs/" . $_POST['title'] . ".txt";
	if(!unlink($file)){
	
		echo("Title does not match a blog");
	
	}
	else{
	
		echo("<p>Blog successfully deleted</p>");
	}

}


?>

  <form method="post" action="index.php">
    <input type = "submit" name="post" value="All Blogs" class="blogs"/>
  </form>

</body>
