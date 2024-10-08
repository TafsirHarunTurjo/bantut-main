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
               /*$arr_one = array("red", "green");
               $arr_two = array("blue", "yellow");
                */

                $arr_one = array(
                        "a"=>"red",
                        "b"=>"green"
                );
                $arr_two = array(
                        "c"=>"blue",
                        "b"=>"yellow"
                );


                $result = array_merge(  $arr_one, $arr_two);

                print("<pre>");
                print_r( $result ) ;
                print("</pre>");
        ?>
        
        

        </section>

 <?php include "footer.php";?>
