<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>All Blogs</title>
</head>


<body>

<?php


	echo "<h1>Create and Post a New Blog Below</h1>";

?>

  <form method ="post" action="blogs.php">
    <label for="title">Blog Title</label>
    <input name="Title" id="title" type="text"/>
    <label for="title">Blog</label>
    <textarea name="body" id="bodyarea"></textarea>
    <input type="submit" name="post"/>
  </form>
  
  


</body>
