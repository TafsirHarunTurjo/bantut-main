<?php include "header.php";?>

<?php 
        class Person{    ///// classs is class

                // these are properties
                public $name;
                public $age;
                
                // below these are are methods  

                public function personName(){   /// //process one
                        echo "Person Name is: ".$this->name."<br>";                }
                public function personAge($value){    /// // process two
                        echo "Person Age is: ".$this->age=$value;
                }
        }

        // these are object using "new" keyword
        //process one
        $personOne = new Person;
        $personOne -> name ="TechLead";
        $personOne->personName();

        // process two
        $personOne->personAge("54");
?>




<?php include "footer.php"; ?>
