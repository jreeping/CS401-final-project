<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>All Blogs</title>
</head>


<body>



<?php

$dir = './blogs';
$files = array_diff(scandir($dir), array('.', '..'));

foreach ($files as $file) {

  echo $file . "\n";
  $filename = "./blogs/" . $file;
  $content = file_get_contents($filename);
  echo "<textarea class='all'>$content</textarea>";
  
 
  
  $finalDel = pathinfo($file, PATHINFO_FILENAME);
  echo "<form method='post' action='deleteBlog.php'>";
  echo " Title: <input type='text' name='title'/>";
  echo "    <input type = 'submit' name='post' value='Delete' class='$finalDel'/>";
  echo "</form>"; 
  
  echo $finalDel; 

}



?>




//maybe put titles as h3
//and body as /p


</body>
