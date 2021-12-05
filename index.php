<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>James's blog</title>
</head>


<body>  
  <?php 
    echo "<h1>Welcome to James's Blog</h1>"; 
  
    echo "<form method='post' action='newBlog.php'>";
    echo "<input type = 'submit' name='post' value='New Blog' class='blogs'/>";
    echo "</form>";
  
  
  $dir = './blogs';
$files = array_diff(scandir($dir), array('.', '..'));

foreach ($files as $file) {

  $finalDel = pathinfo($file, PATHINFO_FILENAME);
  echo $finalDel . "\n";
  $filename = "./blogs/" . $file;
  $content = file_get_contents($filename);
  echo "<textarea class='all'>$content</textarea>";
  
 
  echo "<form method='post' action='editBlogs.php'>";
  echo " Title: <input type='text' name='title'/>";
  echo "    <input type = 'submit' name='post' value='Edit'/>";
  echo "</form>"; 
  
  echo "<form method='post' action='deleteBlog.php'>";
  echo " Title: <input type='text' name='title'/>";
  echo "    <input type = 'submit' name='post' value='Delete' class='$finalDel'/>";
  echo "</form>"; 
  
  //maybe type edit into field to edit and check if $_POST=='edit'

}
  
  ?> 
  
  <img src="img/thedude.jpg" alt="The dude">
  
  <button type="button" onclick="helloJS()">About</button>
  
</body>
  <script src="js/main.js"></script>
</html>
