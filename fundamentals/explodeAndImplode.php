<?php include "header.php";?>

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
                /*
                $myStr = "We are learing PHP";
                $str = explode(" ", $myStr);
                echo $str[2];
                */


                $myStr = array("We", "are", "learing", "PHP");
                echo implode(" ", $myStr);
        ?>


        
        
        

        </section>

 <?php include "footer.php";?>
