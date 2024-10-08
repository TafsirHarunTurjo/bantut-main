<?php 
session_start();
include "header.php";
?>

        <section class="maincontent">
                <h2> This is main content</h2>
                


        <span style="float:right">
        <?php 
                date_default_timezone_set("Asia/Dhaka");
                echo "Time :".date("h:i:sa")."<br>";
                  
        ?>
        </span>

        <hr>

        <?php

              $_SESSION['user'] = "tafsir";
              $_SESSION['password'] = "1234";
               
              ##session_unset();
              echo "Username is ".$_SESSION['user']."<br/>";
              ##session_unset();
              echo "Password is ".$_SESSION['password'];

                session_destroy();
        ?>


        
        
        

        </section>

 <?php include "footer.php";?>
