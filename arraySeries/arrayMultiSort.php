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
               $arr_one = array("Dog", "Cat");
               $arr_two = array("Lion", "Tiger");
                

                /*
                $arr_one = array(
                        "a"=>"red",
                        "b"=>"green"
                );
                $arr_two = array(
                        "c"=>"blue",
                        "b"=>"yellow"
                );
                */
                array_multisort(  $arr_one, $arr_two);

                print("<pre>");
                print_r( $arr_one) ;
                print("</pre>");

                print("<pre>");
                print_r( $arr_two) ;
                print("</pre>");
        ?>
        
        

        </section>

 <?php include "footer.php";?>
