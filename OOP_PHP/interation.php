<?php include "header.php"; ?>

<?php


spl_autoload_register(function ($class_name) {
        echo $class_name . "<br>";
        include "classess2/" . $class_name . ".php";
    });
    


    $person = new Person;
    foreach ($person as $key => $value) {
            echo"<pre>";
            echo "$key => $value";
            echo"</pre>";
    }

    $person->iteratorInner();
?>

<?php include "footer.php"; ?>
