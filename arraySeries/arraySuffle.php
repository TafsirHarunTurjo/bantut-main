<?php include "header.php";?>

        <section class="maincontent">
                <h2> This is main content</h2>
                
        


                
                


        <span style="float:right">
        <?php 
                date_default_timezone_set("Asia/Dhaka");
                echo "Time:".date("h:i:sa")."<br>";
         
        ?>
        </span>

        <hr>

        <?php   
                $color = array("Red","Green", "Purple", "Blue", "Yellow", "Pink");

                shuffle($color);
                print("<pre>");
                print_r($color);
                print("</pre>");
                
        ?>
        
       

        </section>

 <?php include "footer.php";?>
