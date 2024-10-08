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
                $num = array(10,20,30);

                $result = array_sum($num);
                echo $result;
                */

                $num = array(
                        "a"=> "50",
                        "b"=> "10",
                        "c"=> "20",
                        "d"=> "30"
                );
                $result = array_sum($num);
                echo $result;
               
                
                print("<pre>");
                print_r(  $result) ;
                print("</pre>");
                
                
                
        ?>
        
        

        </section>

 <?php include "footer.php";?>
