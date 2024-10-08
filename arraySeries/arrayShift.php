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
                        "a"=> "red",
                        "b"=> "green",
                        "c"=> "blue",
                        "d"=> "yellow"
                );
                array_shift($color_one);
                
               
                
                print("<pre>");
                print_r( $color_one) ;
                print("</pre>");
                
                
                
        ?>
        
        

        </section>

 <?php include "footer.php";?>
