<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>James's blog</title>
</head>


<body>  
  <?php echo "<h1>Welcome to James's Blog</h1>" ?> 
  
  
  <form method="post" action="displayBlogs.php">
    <input type = "submit" name="post" value="All Blogs" class="blogs"/>
  </form>
  
  
  
  <img src="img/thedude.jpg" alt="The dude">

  <form method ="post" action="blogs.php">
    <label for="title">Blog Title</label>
    <input name="Title" id="title" type="text"/>
    <label for="title">Blog</label>
    <textarea name="body" id="bodyarea"></textarea>
    <input type="submit" name="post"/>
  </form>

  <?php include("example.php"); ?>
  
  <button type="button" onclick="helloJS()">Click Me!</button>
  
</body>
  <script src="js/main.js"></script>
</html>
