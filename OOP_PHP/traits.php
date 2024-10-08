<?php include "header.php"; ?>

<?php

/*
spl_autoload_register(function ($class_name) {
        echo $class_name . "<br>";
        include "classess2/" . $class_name . ".php";
    });
*/   

trait Java{
        public function javaCoder(){
                return "I love Java<br>";   
        }
}

trait Php{
        public function phpCoder(){
                return "I love PHP<br>";   
        }
}




trait JavaPhp{
        use Java,Php;
}

class coderOne{
        use Java, Php;
}


// class coderTwo{
//         use Java;
// }

$c1 = new coderOne;
echo $c1->javaCoder();
echo $c1->phpCoder();


// $c2 = new coderTwo;
// echo $c2->javaCoder();



?>

<?php include "footer.php"; ?>
