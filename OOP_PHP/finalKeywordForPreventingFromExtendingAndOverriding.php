<?php include "header.php";?>

<?php 
        #final#   
                class userData{
                public $user;
                public $userId;
                const NAME = "Sazzad Bhai";
                public static $age = "52";

                public function __construct($userName, $userId)
                {
                        $this->user = $userName;
                        $this->userId = $userId;
                       
                }
                public function display(){
                        echo "User name is {$this->user} and user ID is {$this->userId}";
                }
                
        }
        class admin extends userData{
                public $level;
                public function display(){
                        echo "User name is {$this->user} and user ID is {$this->userId} and user level is {$this->level}";
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
