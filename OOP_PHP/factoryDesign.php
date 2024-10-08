<?php include "header.php"; ?>

<?php

spl_autoload_register(function ($class_name) {
        echo $class_name . "<br>";
        include "strategy/" . $class_name . ".php";
    });
$db = new Database();
$db->setDriver("mysql");
$db->connect("host","db","user","pass")
?>

<?php include "footer.php"; ?>
