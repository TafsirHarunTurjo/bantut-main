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
                $coder = array("Sazzad", "Sakib", "Sazzat", "Navid");
                next($coder);
                echo "The current position is :".key($coder);
                */

                $coder = array(
                        "Sazzad" => "53", 
                        "Sakib" => "28", 
                        "Sazzat" => "32", 
                        "Navid" => "30"
                );
                ksort($coder);/// krsort
                foreach($coder as $key=> $value){
                        echo"Name :".$key.",Age : ".$value."<br>";
                }
                
                
                
        ?>
        
       

        </section>

 <?php include "footer.php";?>
