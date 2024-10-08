<?php include "header.php";?>

<?php 
        class Person{   

                
                public $name;
                public $age;
                public $id;
                
                 


                public function __construct($name, $age)
                {
                        //echo "Constructor Created.<br>";
                        $this->name = $name;
                        $this->age = $age;
                }
                public function setId($id){
                        $this->id = $id;
                }

                public function __destruct()
                {
                        if(! empty($id)){
                                echo "Saving persons details";
                        }
                }
        }

       
        $personOne = new Person("Sazzad Bhai","52");
        $personOne->setId(12);
        unset($id);
?>




<?php include "footer.php"; ?>
