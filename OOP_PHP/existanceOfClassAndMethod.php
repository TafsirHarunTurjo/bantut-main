<?php include "header.php"; ?>
<?php include "employee.php"; ?>




<?php

if (class_exists("employee")) {

        $e = new employee();
        
        if (method_exists($e, 'details')) {
                echo "Method Exists.<br>";
        } else{
                echo "<b>Method Not Found!</b>";
        }


                $e->details();
} else {
        echo "<b>Class doesn't exists!!!</b>";
}
?>



<?php include "footer.php"; ?>
