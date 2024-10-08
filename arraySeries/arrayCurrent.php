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


                $name = array("Sazzad","Sakib","Sazzat","Navid");
                
               
                print("<pre>");
                print_r($name) ;
                print("</pre>");
                echo "Current Value :".current($name)."<br>";
                echo "Next Value :".next($name)."<br>";

                echo "Current Value :".current($name)."<br>";
                echo "Previous Value :".prev($name)."<br>";

                echo "Last Value :".end($name)."<br>";
                
                
        ?>
        
        

        </section>

 <?php include "footer.php";?>
