<?php include "header.php";?>

<?php 
        class userData{
                public $user;
                public $userId;
                const NAME = "Sazzad Bhai";

                public function __construct($userName, $userId)
                {
                        $this->user = $userName;
                        $this->userId = $userId;
                        echo "User name is {$this->user} and user ID is {$this->userId}";
                }
                public function display(){
                        echo "Full User Name is ".userData::NAME;
                }
                public function __destruct()
                {
                        unset($this->user);
                        unset($this->userId);
                }
        }

        $user = "Tafsir";
        $id = "2032";
        

        $ur = new userData($user,$id);
        echo "<br>";
        $ur->display();

?>




<?php include "footer.php"; ?>
