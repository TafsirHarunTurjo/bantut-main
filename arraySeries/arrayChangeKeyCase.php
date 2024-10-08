<?php include "header.php";?>

        <section class="maincontent">
                <h2> This is main content</h2>
                
        


                
                


        <span style="float:right">
        <?php 
                date_default_timezone_set("Asia/Dhaka");
                echo "The Bangladeshi time is :".date("h:i:sa")."<br>";
                date_default_timezone_get();
                echo date_default_timezone_get();    
        ?>
        </span>

        <hr>

        <?php
               
                /*
                $name = array(
                        "Sazzad Bhai" => 53,
                        "Sakib Bhai" => 28,
                        "Sazzat Bhai" => 32,
                        "Navid" => 30
                    );
                    print("<pre>");
                    print_r(array_change_key_case($name, CASE_UPPER));
                    print("</pre>");
                
                $name = array(
                        "Sazzad Bhai" => 53,
                        "Sakib Bhai" => 28,
                        "Sazzat Bhai" => 32,
                        "Navid" => 30
                    );
                    print("<pre>");
                    print_r(array_change_key_case($name, CASE_LOWER));
                    print("</pre>");
                */
                
        ?>
        
        

        </section>

 <?php include "footer.php";?>
