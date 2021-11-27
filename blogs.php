<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Blog Deleted</title>
</head>


<body>

<?php

if(isset($_POST['Title']) && isset($_POST['body'])){

    $blog = $_POST['Title'] . "\n\n" . $_POST['body'];
    $name = "./blogs/" . $_POST['Title'] . ".txt";

    $fh = fopen($name, "w") or die("Unable to open file!");
    file_put_contents($name, $blog);

}

echo "<p> Blog Successfully saved! </p>";

?>

  <form method="post" action="index.php">
    <input type = "submit" name="post" value="All Blogs" class="blogs"/>
  </form>


</body>
