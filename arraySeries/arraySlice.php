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
               
                $color_one = array(
                         "red",
                         "green",
                         "blue",
                         "yellow",
                         "skyblue"
                );
                //$result = array_slice($color_one, 4);
                //$result = array_slice($color_one, 1,3);
                $result = array_slice($color_one,-3,2);
               
                
                print("<pre>");
                print_r(  $result) ;
                print("</pre>");
                
                
                
        ?>
        
        

        </section>

 <?php include "footer.php";?>
