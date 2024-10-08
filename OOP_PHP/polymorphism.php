<?php include "header.php";?>

<?php 
       
        
        
                class userData{
                public $user;
                public $userId;
                

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
        $admin = new admin($user,$id);
        echo "<br>";
        $admin->level ="Administrator";
        $admin->display();
        echo "<br>";

        if($admin instanceof userData){
                echo "Inherited";
        }

?>




<?php include "footer.php"; ?>
