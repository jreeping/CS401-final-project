<?php

if(isset($_POST['field 1']) && isset($_POST['field 2'])){

    $blog = $_POST['field 1'] . "\n" . $_POST['field 2'];
    $name = "/blogs" . "/" . $_POST['field 1'] . ".txt";

    file_put_contents($name, $blog, FILE_APPEND | LOCK_EX);

}

echo "<p> Blog Successfully saved! </p>";