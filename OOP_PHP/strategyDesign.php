<?php include "header.php"; ?>

<?php

spl_autoload_register(function ($class_name) {
        echo $class_name . "<br>";
        include "strategy/" . $class_name . ".php";
    });
  
$user = new User();
$msg = $user->getMsg();

switch ($variable) {
        case 'email':
                $objmsg = new sendMail();
                break;
        case 'sms':
                $objmsg = new sendSms();
                break;
                

        
        default:
                # code...
                break;
}
$objmsg->notification();

?>

<?php include "footer.php"; ?>
