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
                        $name = array("Sazzad","Sakib","Sazzat", "Navid","Sazzad","Sakib","Sazzat", "Navid","Sazzad","Sakib");
                       
                        $age = array("52","28","32","30","52","28","32","30","28","32","28","32","30","28","32","30");

                       
                

                        print("<pre>");
                        print_r(array_count_values($age) );
                        print("</pre>");
                
        ?>
        
        

        </section>

 <?php include "footer.php";?>
