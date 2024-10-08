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
                        $name = array("Sazzad","Sakib","Sazzat", "Navid");
                        ## $post = array("TechLead","SeniorSoft","Soft","Intern");
                        $age = array("52","28","32","30");

                        $combine = array_combine($name, $age);
                

                        print("<pre>");
                        print_r($combine );
                        print("</pre>");
                
        ?>
        
        

        </section>

 <?php include "footer.php";?>
