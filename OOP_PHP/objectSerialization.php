<?php include "header.php"; ?>

<?php

spl_autoload_register(function ($class_name) {
        echo $class_name . "<br>";
        include "classess2/" . $class_name . ".php";
    }); 

$pro = new Programming();
$ser = serialize($pro);

/*
file_put_contents("Programming.txt", $ser);
echo $ser;
*/

$getCont =file_get_contents("Programming.txt");
$unser = unserialize($getCont);
echo"<pre>";
print_r($unser);
echo"</pre>";







?>

<?php include "footer.php"; ?>
