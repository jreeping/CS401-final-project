<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Hello World</title>
</head>


<body>  
  <?php echo "<h1>Hello World! (CSS has changed this text to blue!)</h1>" ?>  
  <img src="img/thedude.jpg" alt="The dude">

  <form method ="post" action="blogs.php">
    <input name="Title" type="text"/>
    <input name="body" type="text"/>
    <input type="submit" name="post"/>
  </form>

  <?php include("example.php"); ?>
  <?php include("blogs.php"); ?>
  <button type="button" onclick="helloJS()">Click Me!</button>
  
</body>
  <script src="js/main.js"></script>
</html>