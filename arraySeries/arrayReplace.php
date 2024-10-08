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
                /*
                $color_one = array("red", "green");
                $color_two = array("blue", "yellow");

                $result = array_replace($color_one, $color_two);

                
                
                $color_one = array("a"=>"red","b"=>"green");
                $color_two = array("a"=>"blue", "yellow");
                
                $result = array_replace($color_one, $color_two);
                */


                $color_one = array("red", "green");
                $color_two = array("blue", "yellow");
                $color_three = array("black", "orange");

                $result = array_replace($color_one, $color_two, $color_three);

                print("<pre>");
                print_r(  $result) ;
                print("</pre>");
                
                
        ?>
        
        

        </section>

 <?php include "footer.php";?>
