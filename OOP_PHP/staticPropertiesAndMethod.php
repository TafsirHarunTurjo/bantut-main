<?php include "header.php";?>

<?php 
        class userData{
                public $user;
                public $userId;
                const NAME = "Sazzad Bhai";
                public static $age = "52";

                public function __construct($userName, $userId)
                {
                        $this->user = $userName;
                        $this->userId = $userId;
                        echo "User name is {$this->user} and user ID is {$this->userId}";
                }
                public static function display(){
                        echo "Full User Name is ".userData::NAME."<br>";
                        echo "Age is ".self::$age;
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
        userData::display();

?>




<?php include "footer.php"; ?>
