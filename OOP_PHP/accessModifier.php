<?php include "header.php";?>

<?php 
        // public     
        // private          These are accessModifier
        // protected
        
        
                class userData{
                public $user;
                public $userId;
                //public $age;
                //private $age;
                protected $age;

                public function __construct($userName, $userId)
                {
                        $this->user = $userName;
                        $this->userId = $userId;
                       
                }
                public function display(){
                        echo "User name is {$this->user} and user ID is {$this->userId}";
                        echo "<br>";
                        echo $this->age."Inside Class";
                }
                
        }
        class admin extends userData{
                public $level;
                public function display(){
                        echo "User name is {$this->user} and user ID is {$this->userId} and user level is {$this->level}";
                        echo "<br>";
                        echo $this->age."Inside the subClass";
                }
        }

        $user = "Tafsir";
        $id = "2032";
        

        $ur = new userData($user,$id);
        echo "<br>";
        $ur->display();
        echo "<br>";
        


        $user = "Admin";
        $id ="1001";
        $ad = new admin($user,$id);
        echo "<br>";
        $ad->level ="Administrator";
        $ad->display();
        echo "<br>";

?>




<?php include "footer.php"; ?>
