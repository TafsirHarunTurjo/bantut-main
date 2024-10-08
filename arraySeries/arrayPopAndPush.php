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

        <?php   /*
               $arr_one = array("red", "green","blue", "skyblue");

               array_pop($arr_one);
                

               $arr_one = array("red", "green","blue", "skyblue");

               array_push($arr_one,"yellow", "burgenbdy");
               */


               $arr = array( "a"=> "yellow", "b"=> "burgendy");
               array_push($arr, "red",'blue');



              
                
                print("<pre>");
                print_r( $arr) ;
                print("</pre>");

                
        ?>
        
        

        </section>

 <?php include "footer.php";?>
