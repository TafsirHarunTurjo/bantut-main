<?php include "header.php";?>

        <section class="maincontent">
                <h2> This is main content</h2>
                
        


                
                


        <span style="float:right">
        <?php 
                date_default_timezone_set("Asia/Dhaka");
                echo "The Bangladeshi time is :".date("h:i:sa")."<br>";
                date_default_timezone_get();
                echo date_default_timezone_get();    
        ?>
        </span>

        <hr>

        <?php
                ###   require"new.txt";
                require_once "new.txt";
        ?>
        
        

        </section>

 <?php include "footer.php";?>
