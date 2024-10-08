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
                 $cars =array(
                        "Volvo"  => "xc4",
                        "Audi"  => "A5",
                        "BMW"  => "X7",
                        "Toyota"  => "Supra"

                 );

                 $result = array_keys( $cars, "X7" );
                
                print("<pre>");
                print_r( $result ) ;
                print("</pre>");
        ?>
        
        

        </section>

 <?php include "footer.php";?>
