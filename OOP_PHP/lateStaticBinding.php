<?php include "header.php"; ?>

<?php


spl_autoload_register(function ($class_name) {
        //echo $class_name . "<br>";
        include "classess2/" . $class_name . ".php";
    });
  
// $php = new Php();
// $php->getFramework();

class phpChild extends Php{
        public static function getClass(){
                return __CLASS__;
        }
}
$php = new Php();
$php->framework();

$childphp = new phpChild();
$childphp->framework();
?>

<?php include "footer.php"; ?>
