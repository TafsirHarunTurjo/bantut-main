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
               $arr_one = array("red", "green");
                //$result = array_pad($arr_one,10,"blue");
                $result = array_pad($arr_one, -10,"blue");
              
                
                print("<pre>");
                print_r( $result) ;
                print("</pre>");

                
        ?>
        
        

        </section>

 <?php include "footer.php";?>
