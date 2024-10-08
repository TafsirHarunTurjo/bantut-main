<?php include "header.php";?>

        <section class="maincontent">
                <h2> This is main content</h2>
                


        <span style="float:right">
        <?php 
                date_default_timezone_set("Asia/Dhaka");
                echo "Time :".date("h:i:sa")."<br>";
                  
        ?>
        </span>


        


        <hr>

        <?php
                ##   phpinfo();
                error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
                $price = 45;
                if ($price == 45){
                        print("The price is $price");
                }else{
                        print("Price is not $price");
                }
        ?>


        
        
        

        </section>

 <?php include "footer.php";?>
