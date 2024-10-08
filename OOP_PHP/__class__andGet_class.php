<?php include "header.php"; ?>

<?php


spl_autoload_register(function ($class_name) {
        echo $class_name . "<br>";
        include "classess2/" . $class_name . ".php";
    });
  
class phpChild extends Php{
        public function symphony(){
                echo "Base class constant and class name ->".__CLASS__."<br>";
                echo "Base class Function and class name ->".get_class($this)."<br>";
                return $this;
        }
}
$php = new phpChild();
$php->framework();
echo "<hr>";
$php->symphony();



?>

<?php include "footer.php"; ?>
