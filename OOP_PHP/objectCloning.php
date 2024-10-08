<?php include "header.php"; ?>

<?php

spl_autoload_register(function ($class_name) {
        //echo $class_name . "<br>";
        include "classess2/" . $class_name . ".php";
    });


$java = new Language();
$java->setCat("SPL");
$java->setFramework("SPRING");

// echo $java->getCat()."<br>";
// echo $java->getFramework();


// $php = $java;
// $java->setFramework("CodeIgnitor");

// echo $java->getCat()."<br>";
// echo $java->getFramework()."<br>";

// echo $php->getCat()."<br>";
// echo $php->getFramework();



$php = clone $java;
$java->setFramework("CodeIgnitor");

echo $java->getCat()."<br>";
echo $java->getFramework()."<br>";

echo $php->getCat()."<br>";
echo $php->getFramework();


?>

<?php include "footer.php"; ?>
