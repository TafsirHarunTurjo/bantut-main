<?php 
session_start();
setcookie('visited',"", time()-3600);
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

                ########        setcookie(name, value, expire, path, domain, secure, httponly)  
                
                /*
                if(!isset($_COOKIE['visited'])){

                        setcookie("visited", "1", time()+86500, "/") or die ("Could not set cookie");
                        echo "this is your first visit in this website";
                }else{
                        echo " You are our old visistor";
                }
                */
                echo " Cookies Deleted";
                


        ?>


        
        
        

        </section>

 <?php include "footer.php";?>
