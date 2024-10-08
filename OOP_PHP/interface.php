<?php include "header.php";?>
<?php


//Interface 

interface office{
        public function myOffice();
}
interface workStation{
        public function myWorkStation();
}
interface workEnv{
        public function myWorkEnv();
}
class employee implements office, workStation, workEnv{

        public function __construct()
        {
                $this->myOffice();
                 $this->myWorkStation();
                  $this->myWorkEnv();
        }




        public function myOffice(){
                echo "I work as an employee.<br>";
        }
        public function myWorkStation(){
                echo "Its an equipped work station.<br>";
        }
        public function myWorkEnv(){
                echo "The environment is pretty well.";
        }
}




class stuff implements office, workStation, workEnv{

        public function __construct()
        {
                $this->myOffice();
                 $this->myWorkStation();
                  $this->myWorkEnv();
        }




        public function myOffice(){
                echo "I work as an stuff.<br>";
        }
        public function myWorkStation(){
                echo "I usually rome around.<br>";
        }
        public function myWorkEnv(){
                echo "Everyone here is very friendly.";
        }
}

$employee = new employee(); //object
$stuff = new stuff(); //object




?>
<?php include "footer.php"; ?>
