<?php include "header.php";?>
<?php


//Abstruct Class 

abstract class employee{

        public $name;
        public $id;
        public $stat;

        public function Details(){
                echo "Name of the employee is {$this->name}, his id is {$this->id} and his {$this->stat}<br>";
        }
        abstract public function office();
}



class softE extends employee{

        public function moreDetails(){

                return parent::Details()."and he is very resonable person<br>";
        }
        
        public function office(){

                return "and his new office is in Gulshan";
        }
}





$e = new softE();
$e->name ="Sazzad Bhai";
$e->id ="1027";
$e->stat="TechLead";


//now access the method
$e->moreDetails ();
echo $e->office();



?>
<?php include "footer.php"; ?>
