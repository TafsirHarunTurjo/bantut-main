<?php include "header.php"; ?>

<?php

//magic methods

class employee
{
        public $name;

        public function details()
        {
                echo "I work as an employee in brac it services<br>";
        }

        public function __get($pm)
        {
                echo "$pm does not exist<br>";
        }

        public function __set($pm, $value)
        {
                echo "Setting the $pm to $value<br>";
        }

        public function __call($pm, $arguments)
        {
              echo "There is no <b>".$pm."</b> method and arguments " . implode(', ', $arguments);
        }
}

$e = new employee();
$e->details();
$e->SazzadBhai; // This will trigger __get
$e->age = 52; // This will trigger __set
$e->notExistMethod('2','8','5');
?>

<?php include "footer.php"; ?>
