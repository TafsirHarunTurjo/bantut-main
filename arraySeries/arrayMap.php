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
                /*function myFunction($value){
                        return($value+$value);
                }
                $arr = array(1,2,3,4,5,6,7,8,9,10,11,12,13);
                $result = array_map("myFunction", $arr);
                */

                function myFunction($value){
                       $v = strtoupper($value);
                       return $v;
                }
                $arr = array(
                        "Animal"  => "Movie",
                        "Type"    => "Action"
                );

                $result = array_map("myFunction", $arr);

                print("<pre>");
                print_r( $result ) ;
                print("</pre>");
        ?>
        
        

        </section>

 <?php include "footer.php";?>
