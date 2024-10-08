<?php include "header.php"; ?>

<?php
// autoLoadingClassess







// include "classess/ruby.php";
// include "classess/java.php";
// include "classess/php.php";



// function __autoload($class_name){
//         echo $class_name."<br>";
//         include "classess/".$class_name.".php";
// }


spl_autoload_register(function ($class_name) {
        echo $class_name . "<br>";
        include "classess/" . $class_name . ".php";
    });
    





$ruby = new Ruby;
$java = new  Java;
$php = new Php;


?>

<?php include "footer.php"; ?>
