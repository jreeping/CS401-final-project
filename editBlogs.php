<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Editing Blogs</title>
</head>


<body>

<?php



if(isset($_POST['title'])){

	$file = "./blogs/" . $_POST['title'] . ".txt";
	$text = file_get_contents($file);

}




  echo "<form action='saveEdit.php' method='post'>";
  echo "<textarea name='edit' class='all'>$text</textarea>";
  echo " Title: <input type='text' name='title'/>";
  echo "<input type = 'submit' name='post' value='Save'/>";
  echo "</form>";


?>


  <form method="post" action="index.php">
    <input type = "submit" name="post" value="All Blogs" class="blogs"/>
  </form>



</body>
