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
                $arr = array(10,2,4,6,7,3,8,100,2,5,2,152,24,535,631);
                echo( array_product($arr));
              
                /*
                print("<pre>");
                print_r( $arr) ;
                print("</pre>");
                */
                
        ?>
        
        

        </section>

 <?php include "footer.php";?>
