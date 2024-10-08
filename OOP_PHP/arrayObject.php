<?php include "header.php"; ?>

<?php
/*
spl_autoload_register(function ($class_name) {
        echo $class_name . "<br>";
        include "classess/" . $class_name . ".php";
    });
  */  

for($i=0; $i<10; $i++){

}

$arr = array("HTML","CSS","PHP","JavaScript");
$coding = new ArrayObject($arr);
$coding->append("Java");

$iterator = $coding->getIterator();
while ($iterator->valid()) {
        echo $iterator->current()."<br>";
        $iterator->next();
        
}









?>

<?php include "footer.php"; ?>
