<?php

if(isset($_POST['Title']) && isset($_POST['body'])){

    $blog = $_POST['Title'] . "\n\n" . $_POST['body'];
    $name = "./blogs/" . $_POST['Title'] . ".txt";

    $fh = fopen($name, "w") or die("Unable to open file!");
    file_put_contents($name, $blog);

}

echo "<p> Blog Successfully saved! </p>";
