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


                $name = "Tafsir";
                $dept = "SE";
                $coder = "PHP";
                
                $result = compact("name","dept","coder");

               

               
                print("<pre>");
                print_r($result) ;
                print("</pre>");
              
                
                
        ?>
        
        

        </section>

 <?php include "footer.php";?>
