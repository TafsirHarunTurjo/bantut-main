<?php include "header.php"; ?>

<?php

//methodChaining


spl_autoload_register(function ($class_name) {
        include "classess2/" . $class_name . ".php";
    });
    






// $php = new Php;
// $php->framework()->symphony();

$cal = new calculation();
echo $cal->getValue(5,10);
echo "The result is ".$cal->getResult();

// $cal = new calculation();
// echo $cal->getValue(5,10)->getResult();
// echo "The result is ".$cal->getValue(5,10)->getResult();



?>

<?php include "footer.php"; ?>
