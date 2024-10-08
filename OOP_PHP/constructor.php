<?php include "header.php";?>

<?php 
        class Person{   

                
                public $name;
                public $age;
                
                 


                public function __construct($name, $age)
                {
                        //echo "Constructor Created.<br>";
                        $this->name = $name;
                        $this->age = $age;
                }

                public function personDetails(){  
                        echo "Person Name is: {$this->name} and Person age is {$this->age} ";                
                }
                
        }

       
        $personOne = new Person("Sazzad Bhai","52");
        $personOne->personDetails();
?>




<?php include "footer.php"; ?>
